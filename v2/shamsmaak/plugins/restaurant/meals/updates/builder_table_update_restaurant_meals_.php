<?php namespace Restaurant\Meals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRestaurantMeals extends Migration
{
    public function up()
    {
        Schema::table('restaurant_meals_', function($table)
        {
            $table->smallInteger('is_available')->default(1);
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('restaurant_meals_', function($table)
        {
            $table->dropColumn('is_available');
            $table->increments('id')->unsigned()->change();
        });
    }
}
