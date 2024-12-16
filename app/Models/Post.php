<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    // Your model code...
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'image',
    ];
    public function user()
    {
        return $this->belongsTo(User::class); // Links the post to the user
    }
    }
