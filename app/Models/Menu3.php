<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu3 extends Model
{
    use HasFactory;

    protected $table = "menu3s";
    
    protected $fillable = [
        "category",
        "name",
        "priority",
        "price"
    ];

}
