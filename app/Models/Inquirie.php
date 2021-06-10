<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquirie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'userid', 'type' , 'title', 'content', 'status', 'answer', 'answerdate', 'regdate', 
     ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
