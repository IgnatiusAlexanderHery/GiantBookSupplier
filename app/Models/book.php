<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "books";
    protected $guarded = [];

    public function publisher(){
        return $this->belongsTo(publisher::class);
    }

    public function categories(){
        return $this->belongsToMany(book_category::class,'book_category');
    }
}
