<?php

namespace Binomedev\ShowcaseServices;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Binomedev\ShowcaseServices\Commands\ShowcaseServicesCommand;

class ShowcaseServicesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('showcase-services')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_showcase_services_table')
            ->hasCommand(ShowcaseServicesCommand::class);
    }
}
