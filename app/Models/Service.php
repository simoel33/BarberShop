<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

 
    protected $fillable = [
        'nom',
        'prix',
        'option1',
        'option2',
        'option3',
        'option4',
        'option5',
    ];
    
}
