<?php namespace Restaurant\Meals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRestaurantMeals3 extends Migration
{
    public function up()
    {
        Schema::table('restaurant_meals_', function($table)
        {
            $table->text('ingredients')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('restaurant_meals_', function($table)
        {
            $table->string('ingredients', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
