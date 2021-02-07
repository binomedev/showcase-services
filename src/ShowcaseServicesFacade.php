<?php

namespace Binomedev\ShowcaseServices;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Binomedev\ShowcaseServices\ShowcaseServices
 */
class ShowcaseServicesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ShowcaseServices::class;
    }
}
