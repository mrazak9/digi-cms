<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'status',
        'approved_by',
    ];

    public function user_approved()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'slug', 'slug');
    }

    public function page()
    {
        return $this->belongsTo(Page::class, 'slug', 'slug');
    }
}
