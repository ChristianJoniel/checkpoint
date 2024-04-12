<?php

namespace CN\Checkpoint\Commands;

use Illuminate\Console\Command;

class CheckpointCommand extends Command
{
    public $signature = 'checkpoint';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
