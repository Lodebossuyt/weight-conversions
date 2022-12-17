<?php

namespace Lodeb\WeightConversions;

use Lodeb\WeightConversions\Commands\WeightConversionsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WeightConversionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('weight-conversions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_weight-conversions_table')
            ->hasCommand(WeightConversionsCommand::class);
    }
}
