<?php namespace Vage\Calculator;

use System\Classes\PluginBase;
use Vage\Calculator\Components\MainComponent;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            MainComponent::class => 'MainComponent'
        ];
    }

    public function registerSettings()
    {
    }
}
