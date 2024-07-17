<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'form'; // Tablo adı

    protected $fillable = [
        'name',
        'phone',
        'email',
    ];
}
