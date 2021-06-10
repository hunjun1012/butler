<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'challengename', 'imagefile' , 'likes', 'downloads', 'comments', 'regdate', 
     ];

    public function challengephotoposts(){
        return $this->hasMany(ChallengePhotoPost::class);
    }
}
