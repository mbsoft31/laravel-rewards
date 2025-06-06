<?php

namespace Mbsoft\LaravelRewards\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mbsoft\LaravelRewards\LaravelRewardsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mbsoft\\LaravelRewards\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelRewardsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-rewards_table.php.stub';
        $migration->up();
        */
    }
}
