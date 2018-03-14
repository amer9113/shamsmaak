<?php namespace Restaurant\Parties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRestaurantParties extends Migration
{
    public function up()
    {
        Schema::create('restaurant_parties_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('name');
            $table->string('name_ar');
            $table->text('description')->nullable();
            $table->text('description_ar')->nullable();
            $table->date('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('restaurant_parties_');
    }
}
