<?php
namespace Mcpuishor\SicaUi;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class SicaUiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        Blade::componentNamespace('Mcpuishor\\SicaUi\\Components', 'sica');
    }
}
