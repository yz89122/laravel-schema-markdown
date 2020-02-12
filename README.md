# Laravel Schema Markdown

## Install

```shell
composer require yanzhen0610/laravel-schema-markdown
```

## Add Service Provider

In `config/app.php`, add

```php
        /*
        * Package Service Providers...
        */
        SchemaMarkdown/MakeSchemaMarkdownProvider::class,
```

in the `providers` section.

## Run

In your Laravel project root

```shell
php artisan make:schema-md
```

and the schema description will be generated at `./schema.md`.
