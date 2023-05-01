<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "book_categories";
    protected $guarded = [];
}
