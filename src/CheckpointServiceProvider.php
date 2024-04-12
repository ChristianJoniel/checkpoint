<?php

namespace CN\Checkpoint;

use CN\Checkpoint\Commands\CheckpointCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CheckpointServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('checkpoint')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('0001_01_01_000000_create_permission_tables')
            ->hasCommand(CheckpointCommand::class)
            ->hasRoute('web')
            ->publishesServiceProvider('CheckpointServiceProvider')
        ;
    }
}
