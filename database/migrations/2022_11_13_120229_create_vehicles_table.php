<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->double('price', 15, 8)->nullable()->default(123.4567);
            $table->string('engine_capacity')->nullable();
            $table->string('transmission_type')->nullable();
            $table->unsignedBigInteger('model_id')->nullable();
            $table->foreign('model_id')->references('id')->on('vehicle_models')->onDelete('cascade');
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
        Schema::dropIfExists('vehicles');
    }
}
