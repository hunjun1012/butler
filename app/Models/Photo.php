<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'imagefile' , 'description', 
     ];

    public function photoposts(){
        return $this->belongsTo(PhotoPost::class);
    }

    public function relatedproducts(){
        return $this->hasMany(RelatedProduct::class);
    }
}
