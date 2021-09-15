<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'reviews';

    protected $fillable = [
        'target_id',
        'type',
        'content',
        'rate',
        'location',
    ];

    public function users()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }
}
