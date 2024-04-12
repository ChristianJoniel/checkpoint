<?php

namespace CN\Checkpoint\Commands;

use Illuminate\Console\Command;

class CheckpointCommand extends Command
{
    public $signature = 'checkpoint';

    public $description = 'My command';

    public function handle(): int
    {

        //        exec('cp vendor/spatie/laravel-permission/config/permission.php config/permission.php');
        //        exec('cp vendor/spatie/laravel-permission/database/migrations/create_permission_tables.php.stub database/migrations/0001_01_01_000000_create_permission_tables.php;');

        $this->comment('All done');

        return self::SUCCESS;
    }
}
