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
use Illuminate\Support\Facades\DB;

class Post extends Model implements CanVisit
{
    use HasFactory, SoftDeletes, CreatedUpdatedByTrait, Sluggable;
    use HasVisits;

    protected $fillable = [
        'categories',
        'type_id',
        'title',
        'slug',
        'content',
        'content_short',
        'image',
        'attachment',
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

    public static function getAllCategoriesWithCount()
    {
        $allCategories = Post::whereHas('approval', function ($query) {
            $query->where('status', 'publish');
        })->get()
            ->flatMap(function ($post) {
                return collect(explode(',', $post->categories))->map(function ($category) {
                    return trim($category);
                });
            });
        return $allCategories->countBy();
    }


    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function user_create()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user_update()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function approval()
    {
        return $this->hasOne(Approval::class, 'slug', 'slug');
    }

    function agenda()
    {
        return $this->hasOne(Agenda::class, 'post_id');
    }
}
