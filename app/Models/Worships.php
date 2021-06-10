<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worships extends Model
{
    protected $table = 't_worships';
    protected $fillable = [
        'name','time','date','quota','r_quota'
    ];
}
