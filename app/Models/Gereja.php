<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gereja extends Model
{
    use SoftDeletes;

    protected $table = 't_churchs';

    protected $fillable = [
        'id',
        'name',
        'seat',
        'no_telephone',
        'email',
        'address'
    ];

    public function register()
    {
        return $this->hasMany(Registrants::class, 'church_id');
    }
}
