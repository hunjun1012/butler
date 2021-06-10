<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'productid', 'productinfo',
     ];

    public function photos(){
        return $this->belongsTo(Photo::class);
    }
}
