<?php

namespace App\Models;

use App\Traits\CreatedUpdatedByTrait;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use Cviebrock\EloquentSluggable\Sluggable;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model implements CanVisit
{
    use HasFactory, SoftDeletes, CreatedUpdatedByTrait, Sluggable;
    use HasVisits;

    protected $fillable = [
        'title',
        'slug',
        'banner',
        'content',
        'image',
        'is_show',
        'type',
        'seo_title',
        'seo_meta_description',
        'created_by',
        'updated_by',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user_create()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user_update()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'slug', 'slug');
    }

    public function approval()
    {
        return $this->hasOne(Approval::class, 'slug', 'slug');
    }
}
