<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'book_author',
        'volume'
    ];

    public function book(){

        return  $this->hasMany(BoxBook::class, 'book_id');
    }



}
