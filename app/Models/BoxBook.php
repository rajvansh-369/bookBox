<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoxBook extends Model
{
    use HasFactory;

    protected $fillable =[
        'book_id',
        'box_id',
        'qty'
    ];
   
   
    public function book(){

        return  $this->belongsTo(Book::class, 'book_id');
    }
    public function box(){

        return  $this->belongsTo(Box::class, 'box_id');
    }

    

}
