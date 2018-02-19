<?php namespace Restaurant\Meals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRestaurantMeals4 extends Migration
{
    public function up()
    {
        Schema::table('restaurant_meals_', function($table)
        {
            $table->integer('price')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('restaurant_meals_', function($table)
        {
            $table->dropColumn('price');
        });
    }
}
