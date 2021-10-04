<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','update_at'];

    //Relacion uno a muchos
    public function user(){
      return $this->belongsTo(User::class);
    }

    // relacion uno a uno polimorfica
    public function image(){
      return $this->morphOne(Image::class, 'imageable');
    }
    
}
