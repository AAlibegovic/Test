<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{
    public $timestamps = false;
    use HasFactory;


    protected $fillable = [
        	'fname',
            'lname',
            'DOB',
            'gender',
            'number',
            'description',
    ];
}
