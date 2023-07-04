<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projectfs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('names');
            $table->string('lastnames');
            $table->enum('typeid',['cc','ce','ti','rc']);
            $table->integer('numberid');
            $table->integer('telephone');
            $table->string('email');
            $table->string('occupation');
            $table->enum('role',['admin','editor','viewer','guest']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectfs');
    }
};
