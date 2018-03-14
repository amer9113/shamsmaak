<?php namespace Restaurant\Parties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRestaurantParties extends Migration
{
    public function up()
    {
        Schema::table('restaurant_parties_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('restaurant_parties_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
