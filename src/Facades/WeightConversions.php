<?php

namespace Lodeb\WeightConversions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lodeb\WeightConversions\WeightConversions
 */
class WeightConversions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lodeb\WeightConversions\WeightConversions::class;
    }
}
