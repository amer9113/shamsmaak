<?php namespace Restaurant\Parties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRestaurantParties3 extends Migration
{
    public function up()
    {
        Schema::table('restaurant_parties_', function($table)
        {
            $table->smallInteger('is_available')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('restaurant_parties_', function($table)
        {
            $table->smallInteger('is_available')->default(null)->change();
        });
    }
}
