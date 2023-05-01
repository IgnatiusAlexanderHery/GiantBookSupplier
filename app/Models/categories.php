<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "categories";
    protected $guarded = [];

    public function book(){
        return $this->belongsToMany(book_category::class,'book_category');
    }
}
