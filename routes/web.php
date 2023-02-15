<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\FrontController;
use App\Http\controllers\AdminController;
use App\Http\controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;

// Front Controller
Route::get('/', [FrontController::class, 'home']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::get('/solutions', [FrontController::class, 'solutions']);
Route::get('/silver', [FrontController::class, 'silver']);
Route::get('/gold', [FrontController::class, 'gold']);
Route::get('/platinium', [FrontController::class, 'platinium']);
Route::get('/ultimate', [FrontController::class, 'ultimate']);
Route::get('/ubuntu', [FrontController::class, 'ubuntu']);
Route::get('/apache', [FrontController::class, 'apache']);
Route::get('/php', [FrontController::class, 'php']);
Route::get('/mariadb', [FrontController::class, 'mariadb']);
Route::get('/phpmyadmin', [FrontController::class, 'phpmyadmin']);
Route::get('/pureftpd', [FrontController::class, 'pureftpd']);
Route::get('/realvnc', [FrontController::class, 'realvnc']);
Route::get('/aapanel', [FrontController::class, 'aapanel']);

// Admin Controller
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/admin', [AdminController::class, 'home']);
Route::get('/admin/addcategory', [AdminController::class, 'addcategory']);
Route::get('/admin/categories', [AdminController::class, 'categories']);
Route::get('/admin/addslider', [AdminController::class, 'addslider']);
Route::get('/admin/sliders', [AdminController::class, 'sliders']);
Route::get('/admin/addarticle', [AdminController::class, 'addarticle']);
Route::get('/admin/articles', [AdminController::class, 'articles']);
Route::get('/admin/addpage', [AdminController::class, 'addpage']);
Route::get('/admin/pages', [AdminController::class, 'pages']);

// Category controller
Route::post('admin/savecategory', [CategoryController::class, 'savecategory']);
Route::delete('/admin/deletecategory/{id}', [CategoryController::class, 'deletecategory']);
Route::get('/admin/editcategory/{id}', [CategoryController::class, 'editcategory']);
Route::put('/admin/updatecategory/{id}', [CategoryController::class, 'updatecategory']);

// Slider controller
Route::get('/addsliders', [SliderController::class, 'addsliders']);
Route::get('/sliders', [SliderController::class, 'sliders']);
Route::post('/admin/saveslider', [SliderController::class, 'saveslider']);
Route::delete('admin/deleteslider/{id}', [SliderController::class, 'deleteslider']);
Route::get('/admin/editslider/{id}', [SliderController::class, 'editslider']);
Route::put('/admin/updateslider/{id}', [SliderController::class, 'updateslider']);
Route::put('/admin/unactivateslider/{id}', [SliderController::class, 'unactivateslider']);
Route::put('/admin/activateslider/{id}', [SliderController::class, 'activateslider']);

// Articles controller
Route::get('/addarticles', [ArticleController::class, 'addarticles']);
Route::get('/articles', [ArticleController::class, 'articles']);
Route::post('/admin/savearticle', [ArticleController::class, 'savearticle']);
Route::delete('admin/deletearticle/{id}', [ArticleController::class, 'deletearticle']);
Route::get('/admin/editarticle/{id}', [ArticleController::class, 'editarticle']);
Route::put('/admin/updatearticle/{id}', [ArticleController::class, 'updatearticle']);
Route::put('/admin/unactivatearticle/{id}', [ArticleController::class, 'unactivatearticle']);
Route::put('/admin/activatearticle/{id}', [ArticleController::class, 'activatearticle']);

// Pages controller
Route::get('/addpages', [PageController::class, 'addpages']);
Route::get('/pages', [PageController::class, 'pages']);
Route::post('/admin/savepage', [PageController::class, 'savepage']);
Route::delete('admin/deletepage/{id}', [PageController::class, 'deletepage']);
Route::get('/admin/editpage/{id}', [PageController::class, 'editpage']);
Route::put('/admin/updatepage/{id}', [PageController::class, 'updatepage']);
Route::put('/admin/unactivatepage/{id}', [PageController::class, 'unactivatepage']);
Route::put('/admin/activatepage/{id}', [PageController::class, 'activatepage']);
