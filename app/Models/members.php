<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    use HasFactory;
    public $table='members';
    protected $fillable = ['name', 'age', 'gender', 'user_id'];

   
}
