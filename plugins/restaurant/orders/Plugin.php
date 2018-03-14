<?php namespace Restaurant\Orders;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Restaurant\Orders\Components\OrderForm' => 'orderform'
        ];
    }

    public function registerSettings()
    {
    }
}
