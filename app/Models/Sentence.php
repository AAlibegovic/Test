<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sentence extends Model
{
    public $timestamps = false;
    use HasFactory;


    protected $fillable = [
        	'prisonerNO',
            'cellNO',
            'startDate',
            'endDate',
            'description',
    ];
}
