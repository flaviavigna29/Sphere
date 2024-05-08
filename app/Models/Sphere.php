<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sphere extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'img',
        'user_id'
    ];
// 1-N
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
// N-N
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
