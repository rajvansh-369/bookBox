<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    protected $fillable = [
        'box_name',
        'volume'
    ];

    

    public function box(){

        return  $this->hasMany(BoxBook::class, 'box_id');
    }


}
