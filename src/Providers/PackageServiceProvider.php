<?php

namespace Statamic\Providers;

use Illuminate\Console\Application as Artisan;
use Illuminate\Support\ServiceProvider;
use Statamic\Commands\TestCommand;

class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Artisan::starting(function ($artisan) {
            $artisan->resolveCommands([TestCommand::class]);
        });
    }
}
