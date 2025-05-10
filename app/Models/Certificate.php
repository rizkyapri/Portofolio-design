<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table = 'certificates';
    protected $fillable = [
        'title',
        'description',
        'image',
        'image1',
        'start_date',
        'end_date',
    ];
}
