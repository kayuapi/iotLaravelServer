<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('passcode');
            
            $table->string('emptied');
            $table->bigInteger('item_id')->unsigned()->nullable();
            $table->foreign('item_id')
                  ->references('id')
                  ->on('items');             
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compartments');
    }
}
