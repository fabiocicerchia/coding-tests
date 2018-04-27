# TASK 2

**Language:** PHP

**Description:**

Write a function that provides change directory (cd) function for an abstract file system.

Notes:

 * root path is '/'.
 * path separator is '/'.
 * parent directory is addressable as '..'.
 * directory names consist only of English alphabet letters (A-Z and a-z).
 * the function will not be passed any invalid paths.
 * do not use built-in path-related functions.

For example:

```
$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;
```

should display '/a/b/c/x'.

**How to submit:**

Complete the source file named `change_directory.php`.

## Requirements

 * Docker & Docker Compose
 * PHP 7.2

## How to run it

In order to make the things easier the project is provided with a Docker container it can be started with the following command:

```
docker-compose up
```

Otherwise, in case you don't have docker (nor docker-compose) installed, you can run the following command to build the project first, run the tests, then execute the required script.
Although, it is enough just to run the last command.

```
composer install
composer test
php change_directory.php
```

## Additional information

The script has 2 caveats:

 * It accepts only numeric representations
 * It accepts only positive numbers

The code coverage is generated in the `./coverage` folder.
