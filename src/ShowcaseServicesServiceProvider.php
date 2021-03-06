<?php

namespace Binomedev\ShowcaseServices;

use Illuminate\Support\Facades\Blade;
use Laravel\Nova\Nova;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ShowcaseServicesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Card Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('showcase-services')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('web')
            ->hasMigration('create_showcase_services_table')
            ->hasTranslations();
    }

    public function packageRegistered()
    {
        $this->app->singleton(ShowcaseServices::class, function () {
            return new ShowcaseServices(
                $this->app->config[$this->package->configFileName]
            );
        });
    }

    public function packageBooted()
    {
        Blade::componentNamespace('Binomedev\\ShowcaseServices\\View\\Components', $this->package->shortName());

        Nova::resources([
           \Binomedev\ShowcaseServices\Nova\Service::class,
        ]);
    }
}
