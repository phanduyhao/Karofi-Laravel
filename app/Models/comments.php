<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    public function parentComment()
    {
        return $this->belongsTo(comments::class, 'parent_comment_id');
    }

    public function childComments()
    {
        return $this->hasMany(comments::class, 'parent_comment_id');
    }
    public function hasChildren()
    {
        return $this->hasMany(comments::class, 'parent_comment_id')->exists();
    }
}
