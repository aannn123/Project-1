<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registrants extends Model
{
    use SoftDeletes;
    
    protected $table = 't_registrants';

    protected $fillable = [
        'id',
        'church_id',
        'church_name',
        'worship_id',
        'church_seat_id',
        'fullname',
        'gender',
        'address',
        'region',
        'age',
        'phone_number',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'answer_5',
        'answer_6',
        'answer_7',
        'answer_8',
        'status',
    ];

}
