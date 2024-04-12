<?php

namespace CN\Checkpoint\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CN\Checkpoint\Checkpoint
 */
class Checkpoint extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CN\Checkpoint\Checkpoint::class;
    }
}
