<?php

namespace Mbsoft\LaravelRewards;

use Mbsoft\LaravelRewards\Commands\LaravelRewardsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelRewardsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-rewards')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_rewards_table')
            ->hasCommand(LaravelRewardsCommand::class);
    }
}
