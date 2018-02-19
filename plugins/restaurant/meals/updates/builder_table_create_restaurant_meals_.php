<?php namespace Restaurant\Meals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRestaurantMeals extends Migration
{
    public function up()
    {
        Schema::create('restaurant_meals_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('ingredients', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('restaurant_meals_');
    }
}
