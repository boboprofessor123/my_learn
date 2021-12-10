<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mylearn extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'tag',
        'title',   
        'content',
    ];
    public $timestamps = false;
}