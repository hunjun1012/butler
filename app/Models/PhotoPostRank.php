<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoPostRank extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'photopostsid', 'photorank',
     ];

    public function photoposts(){
        return $this->belongsTo(PhotoPost::class);
    }
}
