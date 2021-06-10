<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'userid', 'photopostsid' , 'datetime', 
     ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function photoposts(){
        return $this->belongsTo(PhotoPost::class);
    }
}
