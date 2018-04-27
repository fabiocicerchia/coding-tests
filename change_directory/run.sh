#!/bin/sh
composer install
composer test
php change_directory.php
