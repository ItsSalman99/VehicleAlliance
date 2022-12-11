<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->double('price', 15, 8)->nullable();
            $table->text('summary')->nullable();
            $table->text('description')->nullable();
            $table->string('img')->nullable();
            $table->boolean('is_active')->nullable()->default(0);
            $table->boolean('show')->nullable()->default(0);
            $table->time('available_stime')->nullable();
            $table->time('available_etime')->nullable();
            $table->date('start_available_date')->nullable();
            $table->date('end_available_date')->nullable();
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
        Schema::dropIfExists('services');
    }
}
