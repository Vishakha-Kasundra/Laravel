<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mynote extends Model
{
    use HasFactory;
    protected $fillable = [
        'Title',
        'Subtitle',
        'note_content',
        'user_id',
    ];
}
