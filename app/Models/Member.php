<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $visible = [
        'id',
        'name',
        'gender',
        'birth_date',
        'created_at',
    ];
    
    /*protected $fillable= [
        'name',
        'gender',
        'birth_date',
    ];
    protected $validation =[];
*/
}