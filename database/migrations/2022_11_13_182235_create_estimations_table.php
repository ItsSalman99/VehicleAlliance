<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimations', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->double('min_est', 15, 8)->nullable();
            $table->double('max_est', 15, 8)->nullable();
            $table->string('vehicle_name')->nullable();
            $table->string('model_name')->nullable();
            $table->string('issue')->nullable();
            // $table->unsignedBigInteger('vehicle_id')->nullable();
            // $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
            // $table->unsignedBigInteger('model_id')->nullable();
            // $table->foreign('model_id')->references('id')->on('vehicle_models')->onDelete('cascade');
            // $table->unsignedBigInteger('issue_id')->nullable();
            // $table->foreign('issue_id')->references('id')->on('vehicle_issues')->onDelete('cascade');
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
        Schema::dropIfExists('estimations');
    }
}
