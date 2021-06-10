<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'userid', 'photopostsid' , 'likes', 
     ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function photoposts(){
        return $this->belongsTo(PhotoPost::class);
    }
}
