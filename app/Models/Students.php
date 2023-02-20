<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'student';
    
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable=[
        'name',
        'countryid',
        'stateid',
        'image',

    ];
    // ...
}
