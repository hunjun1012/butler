<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'email' , 'password', 'profileimage', 'phone', 'upload', 'follow', 'regdate', 
     ];

    public function user_ranks(){
        return $this->belongsTo(UserRank::class);
    }

    public function follows(){
        return $this->hasMany(Follow::class);
    }

    public function inquiries(){
        return $this->hasMany(Inquirie::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function favorite(){
        return $this->hasMany(Favorite::class);
    }

    public function photoposts(){
        return $this->hasMany(PhotoPost::class);
    }
}
