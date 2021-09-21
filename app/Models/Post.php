<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'image',
        'content'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
