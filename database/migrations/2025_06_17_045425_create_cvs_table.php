<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */public function up()
{
    Schema::create('cvs', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('address');
        $table->text('education'); // JSON or comma-separated string
        $table->text('experience');
        $table->text('hobbies');
        $table->text('award');
        $table->string('photo')->nullable();
        $table->timestamps();
    });
}

};
