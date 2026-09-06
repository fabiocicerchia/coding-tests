# Which exercise the verbs act on. Each folder is self-contained — its own
# README, its own dependencies, its own container.
EXERCISE ?= change_directory
COMPOSE   = docker compose -f $(EXERCISE)/docker-compose.yml --project-directory $(EXERCISE)

# Every verb this repository exposes lives here; `make` on its own prints them.
# FC-GEN-057: the same eight verbs in every repo, each either wired or a
# declared no-op that says why. None of them exit 0 quietly.

.DEFAULT_GOAL := help

.PHONY: help setup install build run test lint format analyze

help: ## Show this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | \
	  awk 'BEGIN {FS = ":.*?## "}; {printf "  %-10s %s\n", $$1, $$2}'

install: ## composer install for EXERCISE (default change_directory)
	@test -f $(EXERCISE)/composer.json || { \
		echo "$(EXERCISE) has no composer.json — see $(EXERCISE)/README.md" >&2; \
		exit 1; }
	composer install --working-dir=$(EXERCISE)

build: ## Build the container for EXERCISE
	@test -f $(EXERCISE)/docker-compose.yml || { \
		echo "$(EXERCISE) has no docker-compose.yml — see $(EXERCISE)/README.md" >&2; \
		exit 1; }
	$(COMPOSE) build

run: ## Run EXERCISE in its container
	@test -f $(EXERCISE)/docker-compose.yml || { \
		echo "$(EXERCISE) has no docker-compose.yml — see $(EXERCISE)/README.md" >&2; \
		exit 1; }
	$(COMPOSE) run --rm php

# boarding-pass-sorter is the only exercise with a suite; the others are a
# single script with their answer in the README.
test: ## Run the boarding-pass-sorter suite
	@test -x boarding-pass-sorter/vendor/bin/phpunit || { \
		echo "run 'make install EXERCISE=boarding-pass-sorter' first" >&2; \
		exit 69; }
	cd boarding-pass-sorter && vendor/bin/phpunit

# --- Declared no-ops (FC-GEN-058) ---
# These exit 0 and say why. They are listed under "Not applicable" in the README.

setup: ## Not applicable — each exercise sets itself up
	@echo "Nothing to set up at the top level: run 'make install EXERCISE=...'"
	@echo "for the one you are looking at. See README > Not applicable."

lint: ## Run the whole gate — every hook, every file
	pre-commit run --all-files

format: ## Not applicable — the code is kept as it was submitted
	@echo "No formatter: reformatting would rewrite the submissions themselves."
	@echo "See README > Not applicable."

analyze: ## Not applicable — the dependencies are pinned to their era
	@echo "Nothing useful to scan: composer.lock and package-lock.json here pin"
	@echo "the versions each exercise was written against, so a scan reports the"
	@echo "age of the exercise, not a defect to fix. CodeQL runs on the source"
	@echo "from .github/workflows/codeql.yml. See README > Not applicable."
