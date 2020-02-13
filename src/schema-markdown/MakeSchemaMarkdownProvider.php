<?php

namespace SchemaMarkdown;

use \Illuminate\Support\ServiceProvider;

class MakeSchemaMarkdownProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            MakeSchemaMarkdownCommand::class
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(MakeSchemaMarkdownCommand::class, function () {
            return new MakeSchemaMarkdownCommand();
        });
    }
}
