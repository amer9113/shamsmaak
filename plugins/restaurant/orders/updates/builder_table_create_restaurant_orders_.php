<?php namespace Restaurant\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRestaurantOrders extends Migration
{
    public function up()
    {
        Schema::create('restaurant_orders_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->text('orders_description')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('restaurant_orders_');
    }
}
