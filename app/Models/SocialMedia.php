<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialMedia extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'social_medias';


    protected $fillable = [
        'name',
        'url',
        'icon',
        'order',
        'created_by',
        'updated_by',
    ];

    public function user_create()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user_update()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
