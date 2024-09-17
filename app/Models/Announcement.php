<?php

namespace App\Models;

use App\Traits\CreatedUpdatedByTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedByTrait;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'content_short',
        'image',
        'attachment',
        'seo_title',
        'seo_meta_description',
    ];
}
