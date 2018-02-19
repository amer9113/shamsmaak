<?php namespace Restaurant\Meals\Models;

use Model;

/**
 * Model
 */
class Meal extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'restaurant_meals_';
    
    protected $jsonable =['ingredients'];

    /**
     * Relations
     */
    public $belongsToMany =[
        'genres' =>[
            'Restaurant\Meals\Models\Genre',
            'table' => 'restaurant_meals_meals_genres',
            'order' => 'genre_title'
        ]
    ];

    
    public $attachOne =[
       'main_picture' =>'System\Models\File'
    ];

    public $attachMany =[
        'meal_galary' =>'System\Models\File'
    ];
}
