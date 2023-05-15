<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {


    Route::group(['middleware' => ['guest:admin']], function () {
        Route::get('login', 'App\Http\Controllers\Admin\AuthController@showLoginForm')->name('show.login');
        Route::post('login', 'App\Http\Controllers\Admin\AuthController@login')->name('login');
    });
    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', [
            'uses' => 'App\Http\Controllers\Admin\HomeController@dashboard',
            'as' => 'dashboard.index',
            'icon' => '<i class="feather icon-home"></i>',
            'title' => 'الرئيسيه',
            'sub_route' => false,
            'type' => 'parent',
        ]);
        Route::get('logout', 'App\Http\Controllers\Admin\AuthController@logout')->name('logout');
    });
    Route::group(['middleware' => ['admin', 'role.check']], function () {

        /** -------------- Permissions Start --------------- */
        Route::group(['prefix' => 'permissions', 'as' => 'permissions.'], function () {

            Route::get('/', [
                'uses' => 'App\Http\Controllers\Admin\PermissionController@index',
                'as' => 'index',
                'title' => 'permissions',
                'child' => [
                    'admin.permissions.index',
                    'admin.permissions.create',
                    'admin.permissions.store',
                    'admin.permissions.show',
                    'admin.permissions.edit',
                    'admin.permissions.update',
                    'admin.permissions.destroy',
                    'admin.permissions.destroy_selected',
                ]
            ]);
            Route::get('/create', [PermissionController::class, 'create'])->name('create');
            Route::post('/', [PermissionController::class, 'store'])->name('store');
            Route::get('/{role}', [PermissionController::class, 'show'])->name('show');
            Route::get('/{role}/edit', [PermissionController::class, 'edit'])->name('edit');
            Route::put('/{role}', [PermissionController::class, 'update'])->name('update');
            Route::delete('/{role}', [PermissionController::class, 'destroy'])->name('destroy');
            Route::post('/selected', [PermissionController::class, 'destroySelected'])->name('destroy_selected');
        });
        /** -------------- Permissions End --------------- */


        /** -------------- About Start --------------- */
        Route::group(['prefix' => 'about', 'as' => 'about.'], function () {

            Route::get('/', [
                'uses' => 'App\Http\Controllers\Admin\AboutController@index',
                'as' => 'index',
                'title' => 'about',
                'child' => [
                    'admin.about.index',
                    'admin.about.update',
                ]
            ]);
            Route::put('update', [AboutController::class, 'updateAbout'])->name('update');
        });
        /** -------------- About End --------------- */


        /** -------------- Admin Start --------------- */
        Route::group(['prefix' => 'admins', 'as' => 'admins.'], function () {

            Route::get('/', [
                'uses' => 'App\Http\Controllers\Admin\AdminController@index',
                'as' => 'index',
                'title' => 'admins',
                'child' => [
                    'admin.admins.index',
                    'admin.admins.create',
                    'admin.admins.store',
                    'admin.admins.show',
                    'admin.admins.edit',
                    'admin.admins.update',
                    'admin.admins.destroy',
                    'admin.admins.destroy_selected',
                ]
            ]);
            Route::get('/create', [AdminController::class, 'create'])->name('create');
            Route::post('/', [AdminController::class, 'store'])->name('store');
            Route::get('/{admin}', [AdminController::class, 'show'])->name('show');
            Route::get('/{admin}/edit', [AdminController::class, 'edit'])->name('edit');
            Route::put('/{admin}', [AdminController::class, 'update'])->name('update');
            Route::delete('/{admin}', [AdminController::class, 'destroy'])->name('destroy');
            Route::post('/selected', [AdminController::class, 'destroySelected'])->name('destroy_selected');
        });
        /** -------------- Admin End --------------- */


        /** -------------- User Start --------------- */
        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {

            Route::get('/', [
                'uses' => 'App\Http\Controllers\Admin\UserController@index',
                'as' => 'index',
                'title' => 'users',
                'child' => [
                    'admin.users.index',
                    'admin.users.create',
                    'admin.users.store',
                    'admin.users.show',
                    'admin.users.edit',
                    'admin.users.update',
                    'admin.users.destroy',
                    'admin.users.destroy_selected',
                ]
            ]);
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/', [UserController::class, 'store'])->name('store');
            Route::get('/{user}', [UserController::class, 'show'])->name('show');
            Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
            Route::put('/{user}', [UserController::class, 'update'])->name('update');
            Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
            Route::post('/selected', [UserController::class, 'destroySelected'])->name('destroy_selected');
        });
        /** -------------- User End --------------- */


        /** -------------- Project Start --------------- */
        Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {

            Route::get('/', [
                'uses' => 'App\Http\Controllers\Admin\ProjectController@index',
                'as' => 'index',
                'title' => 'projects',
                'child' => [
                    'admin.projects.index',
                    'admin.projects.create',
                    'admin.projects.store',
                    'admin.projects.show',
                    'admin.projects.edit',
                    'admin.projects.update',
                    'admin.projects.destroy',
                    'admin.projects.destroy_selected',
                ]
            ]);
            Route::get('/create', [ProjectController::class, 'create'])->name('create');
            Route::post('/', [ProjectController::class, 'store'])->name('store');
            Route::get('/{project}', [ProjectController::class, 'show'])->name('show');
            Route::get('/{project}/edit', [ProjectController::class, 'edit'])->name('edit');
            Route::put('/{project}', [ProjectController::class, 'update'])->name('update');
            Route::delete('/{project}', [ProjectController::class, 'destroy'])->name('destroy');
            Route::post('/selected', [ProjectController::class, 'destroySelected'])->name('destroy_selected');
        });
        /** -------------- Project End --------------- */


        /** -------------- Task Start --------------- */
        Route::group(['prefix' => 'tasks', 'as' => 'tasks.'], function () {
            Route::get('/', [
                'uses' => 'App\Http\Controllers\Admin\TaskController@index',
                'as' => 'index',
                'title' => 'tasks',
                'child' => [
                    'admin.tasks.index',
                    'admin.tasks.create',
                    'admin.tasks.store',
                    'admin.tasks.show',
                    'admin.tasks.edit',
                    'admin.tasks.update',
                    'admin.tasks.destroy',
                    'admin.tasks.destroy_selected',
                ]
            ]);
            Route::get('/create', [TaskController::class, 'create'])->name('create');
            Route::post('/', [TaskController::class, 'store'])->name('store');
            Route::get('/{task}', [TaskController::class, 'show'])->name('show');
            Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('edit');
            Route::put('/{task}', [TaskController::class, 'update'])->name('update');
            Route::delete('/{task}', [TaskController::class, 'destroy'])->name('destroy');
            Route::post('/selected', [TaskController::class, 'destroySelected'])->name('destroy_selected');
        });
        /** -------------- Task End --------------- */

        /** -------------- Setting Start --------------- */
        Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {

            Route::get('/', [
                'uses' => 'App\Http\Controllers\Admin\SettingController@index',
                'as' => 'index',
                'title' => 'settings',
                'child' => [
                    'admin.settings.index',
                    'admin.settings.update',
                ]
            ]);
            Route::put('/', [SettingController::class, 'update'])->name('update');
        });
        /** -------------- Setting End --------------- */


        /** -------------- Report Start --------------- */
        Route::group(['prefix' => 'reports', 'as' => 'reports.'], function () {

            Route::get('/', [
                'uses' => 'App\Http\Controllers\Admin\ReportController@index',
                'as' => 'index',
                'title' => 'reports',
                'child' => [
                    'admin.reports.index',
                    'admin.reports.show',
                    'admin.reports.destroy',
                    'admin.reports.destroy_selected',
                ]
            ]);
            Route::get('/{report}', [ReportController::class, 'show'])->name('show');
            Route::delete('/{id}', [ReportController::class, 'destroy'])->name('destroy');
            Route::post('/selected', [ReportController::class, 'destroySelected'])->name('destroy_selected');
        });
        /** -------------- Report End --------------- */


        /** -------------- Inbox Start --------------- */
        Route::group(['prefix' => 'inbox', 'as' => 'inbox.'], function () {

            Route::get('/', [
                'uses' => 'App\Http\Controllers\Admin\ContactUsController@index',
                'as' => 'index',
                'title' => 'inbox',
                'child' => [
                    'admin.inbox.index',
                    'admin.inbox.show',
                    'admin.inbox.destroy',
                    'admin.inbox.destroy_selected',
                    'admin.inbox.reply',
                ]
            ]);
            Route::get('/{id}', [ContactUsController::class, 'show'])->name('show');
            Route::delete('/{id}', [ContactUsController::class, 'destroy'])->name('destroy');
            Route::post('/selected', [ContactUsController::class, 'destroySelected'])->name('destroy_selected');
            Route::post('/inbox-reply/{id}', [ContactUsController::class, 'reply'])->name('reply');
        });
        /** -------------- Inbox End --------------- */

        /** -------------- Inbox Start --------------- */
        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {

            Route::get('/', [
                'uses' => 'App\Http\Controllers\Admin\ProfileController@index',
                'as' => 'edit',
                'title' => 'profile',
                'child' => [
                    'admin.profile.edit',
                    'admin.profile.update',
                ]
            ]);
            Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
            Route::put('/update', [ProfileController::class, 'update'])->name('update');
        });
        /** -------------- Profile End --------------- */
    });
});
