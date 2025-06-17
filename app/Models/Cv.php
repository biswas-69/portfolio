<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// गल्ती: use App\Models\HasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory; // ✔️ सही

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'photo',
        'education',
        'experience',
        'hobbies',
        'award',
    ];
}
