<?php

namespace Marcosper\CopyscapeLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class Copyscape extends Facade
{
    protected static function getFacadeAccessor() { return 'copyscape'; }
}