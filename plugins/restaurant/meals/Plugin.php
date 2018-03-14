<?php namespace Restaurant\Meals;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Restaurant\Meals\Components\Meals' => 'meals',
        ];
    }

    public function registerSettings()
    {
    }
}
