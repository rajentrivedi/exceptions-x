<?php

namespace Rajentrivedi\ExceptionsX\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rajentrivedi\ExceptionsX\ExceptionsX
 */
class ExceptionsX extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rajentrivedi\ExceptionsX\ExceptionsX::class;
    }
}
