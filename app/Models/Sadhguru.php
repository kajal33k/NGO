<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sadhguru extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'para1',
        'para2',
        'qoutes',
        'author',
        'image',
    ];
}
