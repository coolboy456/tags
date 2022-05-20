<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagPost extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;

    protected $fillable = [
        'title_name',
        'content'
    ];
}
