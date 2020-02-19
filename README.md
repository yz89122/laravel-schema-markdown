# Laravel Schema Markdown

[![Latest Stable Version](https://poser.pugx.org/yanzhen0610/laravel-schema-markdown/v/stable)](https://packagist.org/packages/yanzhen0610/laravel-schema-markdown) [![Total Downloads](https://poser.pugx.org/yanzhen0610/laravel-schema-markdown/downloads)](https://packagist.org/packages/yanzhen0610/laravel-schema-markdown) [![Latest Unstable Version](https://poser.pugx.org/yanzhen0610/laravel-schema-markdown/v/unstable)](https://packagist.org/packages/yanzhen0610/laravel-schema-markdown) [![License](https://poser.pugx.org/yanzhen0610/laravel-schema-markdown/license)](https://packagist.org/packages/yanzhen0610/laravel-schema-markdown) ![test](https://github.com/yanzhen0610/laravel-schema-markdown/workflows/test/badge.svg) [![codecov](https://codecov.io/gh/yanzhen0610/laravel-schema-markdown/branch/master/graph/badge.svg)](https://codecov.io/gh/yanzhen0610/laravel-schema-markdown)

## Install

```shell
composer require --dev yanzhen0610/laravel-schema-markdown
```

## Run

In your Laravel project root

```shell
php artisan make:schema-md
```

and the schema description will be generated at `./schema.md`.

## Usage

```plain
$ php artisan make:schema-md --help

Description:
  Make a markdown documentations of migration files

Usage:
  make:schema-md [options]

Options:
      --force                Force the operation to run when in production
      --database[=DATABASE]  The database connection to use [default: "schema-markdown"]
      --path[=PATH]          The path(s) to the migrations files to be executed (multiple values allowed)
      --realpath             Indicate any provided migration file paths are pre-resolved absolute paths
      --step                 Force the migrations to be run so they can be rolled back individually
  -o, --output[=OUTPUT]      The output path for the generated markdown [default: "./schema.md"]
  -h, --help                 Display this help message
  -q, --quiet                Do not output any message
  -V, --version              Display this application version
      --ansi                 Force ANSI output
      --no-ansi              Disable ANSI output
  -n, --no-interaction       Do not ask any interactive question
      --env[=ENV]            The environment the command should run under
  -v|vv|vvv, --verbose       Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

## Example

[schema.example.md](./schema.example.md)
