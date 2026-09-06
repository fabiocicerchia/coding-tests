# coding-tests

Interview and challenge submissions, kept as they were sent. Each folder is
self-contained — its own README with the original brief, its own dependencies,
and in most cases its own container.

| Exercise                | Language | Notes                                |
| ----------------------- | -------- | ------------------------------------ |
| `boarding-pass-sorter`  | PHP      | The only one with a test suite       |
| `change_directory`      | PHP      | Runs in its container                |
| `haversine_coverage`    | PHP      | Runs in its container                |
| `reverse_binary`        | JS       | Runs in its container                |
| `hacker-rank`           | PHP      | Loose solutions, one file per problem |

```sh
make run EXERCISE=change_directory       # run one in its container
make install EXERCISE=boarding-pass-sorter
make test                                # the boarding-pass-sorter suite
```

## Make targets

`make help` lists every target. Every repository in this estate exposes the
same eight verbs, so you do not have to read a Makefile to find out how to
build, run or test one (FC-GEN-057). A verb with nothing to do here still
exists: it exits 0 and prints why, and is listed under "Not applicable"
(FC-GEN-058).

| Verb      | What it does here                                  |
| --------- | -------------------------------------------------- |
| `install` | `composer install` for `EXERCISE`                  |
| `build`   | Build the container for `EXERCISE`                 |
| `run`     | Run `EXERCISE` in its container                    |
| `test`    | The `boarding-pass-sorter` suite                   |

### Not applicable

- `setup` — each exercise sets itself up; use `make install EXERCISE=...`.
- `lint` and `format` — these are submissions, kept as they were submitted;
  reformatting them would rewrite the thing being kept.
- `analyze` — the lockfiles pin each exercise to the versions it was written
  against, so a scan reports the age of the exercise rather than a defect.
  CodeQL runs on the source from `.github/workflows/codeql.yml`.
