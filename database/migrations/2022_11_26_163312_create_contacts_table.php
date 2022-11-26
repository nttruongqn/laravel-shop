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
        Schema::create('contacts', function (Blueprint $table) {
           $table->increments('id');
           $table->string('ct_name')->nullable();
           $table->string('ct_email')->nullable();
           $table->string('ct_title')->nullable();
           $table->text('ct_content')->nullable();
           $table->tinyInteger('ct_status')->default(0);
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
        Schema::dropIfExists('contacts');
    }
};
