<?php namespace Restaurant\Meals\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'restaurant_meals_genres';
    
     public $belongsToMany =[
        'meals' =>[
            'Restaurant\Meals\Models\meal',
            'table' => 'restaurant_meals_meals_genres',
            'order' => 'name'
        ]
    ];

}
