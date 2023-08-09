<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cates extends Model
{
    use HasFactory;
    protected $table = 'cates';
    protected $casts = [
        'created_at' => 'datetime:d/m/Y', // Định dạng ngày tháng năm
    ];
    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y', strtotime($value)); // Định dạng theo 'Ngày/Tháng/Năm'
    }
    public function parent()
    {
        return $this->belongsTo(cates::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(cates::class, 'parent_id');
    }
}
