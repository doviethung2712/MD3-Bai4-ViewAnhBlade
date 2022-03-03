<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public function posts()
    {
        return $this->hasManyThrough(Post::class, Users::class, 'group_id', 'user_id', 'id');
    }
}
