<?php

namespace Superlatif\ZmdLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Superlatif\ZmdLaravel\Skeleton\SkeletonClass
 */
class ZmdLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zmd-laravel';
    }
}
