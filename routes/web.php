<?php

use Illuminate\Support\Facades\Route;

//=========================FRONTEND USE==========================//
use App\Http\Controllers\FrontlandingController;
use App\Http\Controllers\FrontcategoriesController;
use App\Http\Controllers\FrontproductController;
use App\Http\Controllers\FrontbusinessController;
use App\Http\Controllers\FrontsellerController;
use App\Http\Controllers\FrontsellerauthController;

//===============BACKEND ROUTE================//
use App\Http\Controllers\AuthorizeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategorymenuController;
use App\Http\Controllers\ApiUrlController;




//===========================FRONTEND ROUTES====================================//
Route::get('/', [FrontlandingController::class, 'index'])->name('landing');
Route::get('/categories', [FrontcategoriesController::class, 'index'])->name('front-categorie');
Route::get('/categories/{data}', [FrontcategoriesController::class, 'category']);
Route::get('/product/detail/{id}', [FrontproductController::class, 'detail'])->name('product-detail');
Route::get('/product/search', [FrontproductController::class, 'search'])->name('product-search');
Route::get('/business/{id}', [FrontbusinessController::class, 'detail'])->name('business-detail');

Route::get('/sellers', [FrontsellerController::class, 'intro'])->name('become-seller');
Route::get('/sellers/register', [FrontsellerauthController::class, 'register'])->name('seller-register');
Route::get('/sellers/verification', [FrontsellerauthController::class, 'verification'])->name('seller-verification');

//=========================BACKEND ROUTE=================================//

Route::get('/login', [AuthorizeController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthorizeController::class, 'postlogin']);
Route::get('/signup', [AuthorizeController::class, 'signup'])->name('signup');
Route::post('/postsignup', [AuthorizeController::class, 'postsignup']);
Route::get('/notactive', [AuthorizeController::class, 'notactive'])->name('notactive');

Route::group(['prefix' => 'dapur', 'middleware' => 'auth'], function () {

    Route::get('/logout', [AuthorizeController::class, 'logout']);

    Route::get('/', [HomeController::class, 'index'])->name('home');

    //Route Untuk Super Admin
    Route::get('/super/dashboard', [UsersController::class, 'index'])->name('admin');
    Route::get('/super/view', [UsersController::class, 'view']);
    Route::get('/super/view/{id}/edit', [UsersController::class, 'edit']);
    Route::post('/super/view/{id}/update', [UsersController::class, 'update']);
    Route::get('/super/view/{id}/delete', [UsersController::class, 'delete']);
    Route::post('/super/activation', [UsersController::class, 'activation']);

    Route::get('/super/roles', [RolesController::class, 'view'])->name('roles');
    Route::get('/super/roles/add', [RolesController::class, 'add']);
    Route::post('/super/roles/create', [RolesController::class, 'create']);
    Route::get('/super/roles/{id}/edit', [RolesController::class, 'edit']);
    Route::post('/super/roles/{id}/update', [RolesController::class, 'update']);
    Route::get('/super/roles/{id}/delete', [RolesController::class, 'delete']);

    Route::get('/super/permission', [PermissionController::class, 'view'])->name('permission');
    Route::get('/super/permission/add', [PermissionController::class, 'add']);
    Route::post('/super/permission/create', [PermissionController::class, 'create']);
    Route::get('/super/permission/{id}/show', [PermissionController::class, 'show']);
    Route::get('/super/permission/{id}/edit', [PermissionController::class, 'edit']);
    Route::post('/super/permission/{id}/update', [PermissionController::class, 'update']);
    Route::get('/super/permission/{id}/delete', [PermissionController::class, 'delete']);

    Route::get('/super/menu', [MenuController::class, 'view'])->name('menu');
    Route::get('/super/menu/add', [MenuController::class, 'add']);
    Route::post('/super/menu/create', [MenuController::class, 'create']);
    Route::get('/super/menu/{id}/edit', [MenuController::class, 'edit']);
    Route::post('/super/menu/{id}/update', [MenuController::class, 'update']);
    Route::get('/super/menu/{id}/delete', [MenuController::class, 'delete']);
    Route::post('/menu/activation', [MenuController::class, 'activation']);

    //Route Untuk Admin Lain (Sesuai Menu)

    Route::get('/user/{id}/profile', [UsersController::class, 'profile']);

    Route::get('/api-url', [ApiUrlController::class, 'view'])->name('api-url');
    Route::get('/api-url/add', [ApiUrlController::class, 'add']);
    Route::post('/api-url/create', [ApiUrlController::class, 'create']);
    Route::get('/api-url/edit/{id}', [ApiUrlController::class, 'edit']);
    Route::post('/api-url/update/{id}', [ApiUrlController::class, 'update']);
    Route::get('/api-url/delete/{id}', [ApiUrlController::class, 'delete']);

    Route::get('/category-menu', [CategorymenuController::class, 'view'])->name('category-menu');
    // Route::get('/category-menu/add', [CategorymenuController::class, 'add']);
    // Route::post('/category-menu/create', [CategorymenuController::class, 'create']);
    Route::get('/category-menu/edit/{id}', [CategorymenuController::class, 'edit']);
    Route::post('/category-menu/update/{id}', [CategorymenuController::class, 'update']);
    Route::get('/category-menu/delete/{id}', [CategorymenuController::class, 'delete']);

});
