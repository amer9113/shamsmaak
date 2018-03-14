<?php namespace Restaurant\Meals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRestaurantMeals5 extends Migration
{
    public function up()
    {
        Schema::table('restaurant_meals_', function($table)
        {
            $table->string('name_ar', 255);
            $table->text('description_ar')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('restaurant_meals_', function($table)
        {
            $table->dropColumn('name_ar');
            $table->dropColumn('description_ar');
        });
    }
}
