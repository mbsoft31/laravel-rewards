<?php

namespace Mbsoft\LaravelRewards\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mbsoft\LaravelRewards\LaravelRewards
 */
class LaravelRewards extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Mbsoft\LaravelRewards\LaravelRewards::class;
    }
}
