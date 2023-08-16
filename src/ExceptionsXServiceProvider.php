<?php

namespace Rajentrivedi\ExceptionsX;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rajentrivedi\ExceptionsX\Commands\ExceptionsXCommand;

class ExceptionsXServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('exceptions-x')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_exceptions-x_table')
            ->hasCommand(ExceptionsXCommand::class);
    }
}
