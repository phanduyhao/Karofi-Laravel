<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    use HasFactory;
    public function cate()
    {
        return $this->belongsTo(cates::class, 'cate_id','id');
    }
}
