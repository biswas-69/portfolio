<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProfileContent extends Model
{
    use SoftDeletes;
    protected $table = 'profile_contents';
    protected $fillable = ['titile','other','photo'];
}
