<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    public $table ="transaction";

    protected $fillable = ['user_id','description','amount','category','status','created_at'];

    public function scopeSearch($query,$value){

        $query->where('amount', 'like', "%{$value}%")
              ->orWhere('category', 'like', "%{$value}%")
              ->orWhere('status', 'like', "%{$value}%")
              ->orWhere('description', 'like',  "%{$value}%");
   
    }
}
