<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->Increments('id')->from(1)->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('service')->nullable();
            $table->string('amount')->nullable();
            $table->string('currency')->nullable();
            $table->integer('period')->default(0);
            $table->date('purchased_date')->nullable();
            $table->longText('description')->nullable();           
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
};
