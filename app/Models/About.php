<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{


public function up()
{
    Schema::create('abouts', function (Blueprint $table) {
        $table->id();
        $table->longText('content'); // Use longText for large paragraphs
        $table->timestamps();
    });
}

}
