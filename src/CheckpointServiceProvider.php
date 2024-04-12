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
            ->hasMigration('create_checkpoint_table')
            ->hasCommand(CheckpointCommand::class);
    }
}
