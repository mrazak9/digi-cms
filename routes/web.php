<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FooterColumnController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PatnerController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.frontend.index');
});

Route::get('/home', function () {
    return view('pages.frontend.index');
});

Route::post('logout', [AdminController::class, 'logout'])->name('logout');
Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::get('search', [SearchController::class, 'search'])->name('search');
Route::get('{slug}', [PageController::class, 'show_page'])->name('pages.show-page');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('pages.admin.dashboard', ['type_menu' => '']);
    })->name('home');
    Route::resource('user', UserController::class);
    Route::resource('pages', PageController::class);
    Route::resource('settings', GeneralSettingController::class);
    Route::resource('menus', MenuController::class);
    Route::get('menus.generate', [MenuController::class, 'generate'])->name('menus.generate');
    Route::resource('categories', CategoryController::class);
    Route::resource('types', TypeController::class);
    // Route::resource('faqs', FaqController::class);
    Route::resource('posts', PostController::class);
    Route::resource('footer_columns', FooterColumnController::class);
    Route::resource('social_medias', SocialMediaController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('galleries', GalleryController::class);
    // Route::resource('food_prices', FoodPriceController::class);
    Route::resource('patners', PatnerController::class);
    // Route::resource('permissions', PermissionController::class);
    Route::post('edit-permissions', [PermissionController::class, 'update'])->name('permissions.update');
    Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::post('permissions', [PermissionController::class, 'store'])->name('permissions.store');
    Route::delete('permissions/{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy');

    Route::post('edit-roles', [RoleController::class, 'update'])->name('roles.update');
    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/add-permission', [RoleController::class, 'addPermission'])->name('roles.addPermission');
    Route::post('/roles/{role}/assign-permissions', [RoleController::class, 'roleHasPermission'])->name('roleHasPermission');

    Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
    Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');

    Route::get('show-activity', [AdminController::class, 'show_activity'])->name('show_activity');
    Route::get('show-menu', [MenuController::class, 'showMenu'])->name('show-menu');

    Route::get('/general-settings/{type}', [GeneralSettingController::class, 'showType'])->name('general-settings.show-type');
    Route::get('galleries/add/{post_id}', [GalleryController::class, 'add'])->name('galleries.add');
    Route::post('categories/add', [CategoryController::class, 'add'])->name('categories.add');
    Route::get('posts-approval', [PostController::class, 'approval'])->name('posts.approval');
    Route::post('posts/set-approval', [PostController::class, 'setApproval'])->name('set.approval');
    Route::get('/posts/{id}/show-approval-modal', [PostController::class, 'showApprovalModal'])->name('show.approval.modal');
    Route::get('/filter-approvals', [PostController::class, 'filterByStatus']);
    // routes/web.php
    Route::get('/get-weekly-data', [AdminController::class, 'getWeeklyData']);
});
