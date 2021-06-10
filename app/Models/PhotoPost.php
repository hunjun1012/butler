<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'userid', 'photopostsname' , 'imagefile', 'likes', 'downloads', 'comments', 'creatorcomment', 'favorites', 'regdate', 
     ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function favorites(){
        return $this->hasMany(Favorite::class);
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function challengephotoposts(){
        return $this->belongsTo(ChallengePhotoPost::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function photopostranks(){
        return $this->belongsTo(PhotoPostRank::class);
    }
}
