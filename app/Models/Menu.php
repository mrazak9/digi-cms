<?php

namespace App\Models;

use App\Traits\CreatedUpdatedByTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'menu_name',
        'slug_page',
        'menu_status',
        'sequence',
        'main_menu',
        'created_by',
        'updated_by',
    ];

    public function submenus()
    {
        return $this->hasMany(Menu::class, 'main_menu', 'id');
    }


    public static function getMenuTree($parentId = null)
    {
        $menus = self::with('submenus')
            ->where('main_menu', $parentId)
            ->orderBy('sequence') // Menambahkan orderBy
            ->get();

        $menuTree = [];
        foreach ($menus as $menu) {
            $submenus = $menu->submenus;

            if (count($submenus) > 0) {
                $menu->submenus = self::getMenuTree($menu->id);
            }

            $menuTree[] = $menu;
        }

        return $menuTree;
    }
}
