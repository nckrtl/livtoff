<?php

namespace Nckrtl\Livtoff;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nckrtl\Livtoff\Commands\LivtoffCommand;

class LivtoffServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livtoff')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_livtoff_table')
            ->hasCommand(LivtoffCommand::class);
    }
}
