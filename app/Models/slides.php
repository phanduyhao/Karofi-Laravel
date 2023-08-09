<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slides extends Model
{
    use HasFactory;
    protected $casts = [
        'created_at' => 'datetime:d/m/Y', // Định dạng ngày tháng năm
    ];
    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y', strtotime($value)); // Định dạng theo 'Ngày/Tháng/Năm'
    }
}
