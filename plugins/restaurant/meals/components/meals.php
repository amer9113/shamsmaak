<?php namespace Restaurant\Meals\Components;

use Cms\Classes\ComponentBase;
use Restaurant\Meals\Models\Meal;

class Meals extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Meal list',
            'description' => 'List of meals'
        ];
    }
    public function defineProperties(){
        return [
            'results' => [
                'title' => 'Number of Meals',
                'description' => 'How  many Meals do you want to display?',
                'default' => 0,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Only numbers allowed'
            ],

            'sortOrder' => [
                'title' => 'Sort Meals',
                'description' => 'Sort those meals',
                'type' => 'dropdown',
                'default' => 'name asc'
            ]
        ];
    }

    public function getSortOrderOptions(){
        return [
            'name asc' => 'Name (ascending)',
            'name desc' => 'Name (descending)'
        ];
    }
    public function onRun(){
        $this->meals = $this->loadMeals();
    }

    protected function loadMeals(){
        $query= Meal::all();
        if($this->property('sortOrder') == 'name asc'){
            $query = $query->sortBy('name');
        }

        if($this->property('sortOrder') == 'name desc'){
            $query = $query->sortByDesc('name');
        }

        if($this->property('results') > 0){
            $query = $query->take($this->property('results'));
        }

        return $query;
    }


    public $meals;

}