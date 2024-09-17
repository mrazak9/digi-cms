<?php

namespace App\Models;

use App\Traits\CreatedUpdatedByTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes, CreatedUpdatedByTrait, Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'seo_title',
        'seo_meta_description',
        'created_by',
        'updated_by',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    /**
     * Relationship with Blog model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function user_create()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user_update()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
