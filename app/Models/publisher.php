<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "publishers";
    protected $guarded = [];

    public function book(){
        return $this->hasMany(book::class);
    }
}
