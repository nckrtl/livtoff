<?php

namespace Nckrtl\Livtoff\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nckrtl\Livtoff\Livtoff
 */
class Livtoff extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nckrtl\Livtoff\Livtoff::class;
    }
}
