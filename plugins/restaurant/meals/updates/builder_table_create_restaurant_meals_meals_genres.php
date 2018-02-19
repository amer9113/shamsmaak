<?php namespace Restaurant\Meals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRestaurantMealsMealsGenres extends Migration
{
    public function up()
    {
        Schema::create('restaurant_meals_meals_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('meal_id');
            $table->integer('genre_id');
            $table->primary(['meal_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('restaurant_meals_meals_genres');
    }
}
