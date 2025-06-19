<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cv extends Model
{
    use SoftDeletes;

    protected $table = 'cvs';

    protected $fillable = ['photo'];
}
