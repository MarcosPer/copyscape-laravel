<?php

namespace Marcosper\CopyscapeLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class CopyScape extends Facade
{
    protected static function getFacadeAccessor() { return 'copyscape'; }
}