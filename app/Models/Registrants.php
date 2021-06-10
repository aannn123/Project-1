<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registrants extends Model
{
    protected $table = 't_registrants';
    protected $fillable = ['church_id', 'church_name', 'worship_id', 'fullname', 'address', 'region', 'gender', 'age', 'phone_number', 'answer_1', 'answer_2', 'answer_3', 'answer_4', 'answer_5', 'answer_6', 'answer_7', 'answer_8'
    ];
}
