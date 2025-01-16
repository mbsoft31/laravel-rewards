<?php

namespace Mbsoft\LaravelRewards\Commands;

use Illuminate\Console\Command;

class LaravelRewardsCommand extends Command
{
    public $signature = 'laravel-rewards';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
