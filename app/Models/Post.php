<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'title', 'details', 'user_name'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function username()
    {
        return $this->belongsTo(User::class, 'user_name');
    }
}
