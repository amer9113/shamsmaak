<?php namespace Restaurant\Meals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRestaurantMealsGenres extends Migration
{
    public function up()
    {
        Schema::create('restaurant_meals_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('restaurant_meals_genres');
    }
}
