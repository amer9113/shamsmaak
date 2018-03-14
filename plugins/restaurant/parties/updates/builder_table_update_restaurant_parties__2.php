<?php namespace Restaurant\Parties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRestaurantParties2 extends Migration
{
    public function up()
    {
        Schema::table('restaurant_parties_', function($table)
        {
            $table->smallInteger('is_available');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('restaurant_parties_', function($table)
        {
            $table->dropColumn('is_available');
            $table->dropColumn('slug');
        });
    }
}
