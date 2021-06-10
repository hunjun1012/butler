<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChallengePhotoPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'challengeid', 'photopostsid', 'challengerank', 
     ];

    public function photoposts(){
        return $this->belongsTo(PhotoPost::class);
    }

    public function challenges(){
        return $this->belongsTo(Challenge::class);
    }
}
