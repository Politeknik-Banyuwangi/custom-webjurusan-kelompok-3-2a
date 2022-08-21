<?php

use App\Http\Controllers\Web\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Web\Backend\Employee\EmployeeTypeController;
use App\Http\Controllers\Web\Backend\User\PermissionController;
use App\Http\Controllers\Web\Backend\User\RoleController;
use App\Http\Controllers\Web\Backend\User\UserController;
use App\Http\Controllers\Web\Frontend\Home\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front End Route
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

// Back End Route
Route::get('auth', function () {
    return view('backend.auth.login');
})->middleware(['guest:' . config('fortify.guard')])->name('login');

Route::get('forgot-passord', function () {
    return view('backend.auth.forgot-password');
})->middleware(['guest:' . config('fortify.guard')])->name('password.request');

Route::get('reset-password', function () {
    return view('backend.auth.reset-password', ['request' => Request::all()]);
})->middleware(['guest:' . config('fortify.guard')])->name('password.reset');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Route for administrator
    Route::prefix('apps')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboards')->middleware('can:read-dashboards');
        // Employee Type Route
        Route::prefix('employee-types')->middleware('can:read-employee-types')->group(function () {
            Route::get('', [EmployeeTypeController::class, 'index'])->name('employee-types')->middleware('can:read-employee-types');
            Route::get('get-data', [EmployeeTypeController::class, 'getData'])->name('employee-types.get-data')->middleware('can:read-employee-types');
            Route::post('store', [EmployeeTypeController::class, 'store'])->name('employee-types.store')->middleware('can:create-employee-types');
            Route::get('{employeeType}/show', [EmployeeTypeController::class, 'show'])->name('employee-types.update')->middleware('can:update-employee-types');
            Route::post('{employeeType}/update', [EmployeeTypeController::class, 'update'])->name('employee-types.update')->middleware('can:update-employee-types');
            Route::delete('{employeeType}/delete', [EmployeeTypeController::class, 'destroy'])->name('employee-types.delete')->middleware('can:delete-employee-types');
        });

        // Roles
        Route::prefix('roles')->middleware('can:read-roles')->group(function () {
            Route::get('', [RoleController::class, 'index'])->name('roles');
            Route::get('getData', [RoleController::class, 'getData'])->name('roles.get-data');
            Route::post('store', [RoleController::class, 'store'])->name('roles.store')->middleware('can:create-roles');
            Route::get('{role}/show', [RoleController::class, 'show'])->name('roles.update')->middleware('can:update-roles');
            Route::post('{role}/update', [RoleController::class, 'update'])->name('roles.update')->middleware('can:update-roles');
            Route::delete('{role}/delete', [RoleController::class, 'destroy'])->name('roles.delete')->middleware('can:delete-roles');
            Route::get('{role}/change-permission', [PermissionController::class, 'index'])->name('roles.change-permissions');
            Route::post('{role}/update-permission', [PermissionController::class, 'changePermission'])->name('roles.update-permission')->middleware('can:change-permissions');
        });

        // Users
        Route::prefix('users')->middleware('can:read-users')->group(function () {
            Route::get('', [UserController::class, 'index'])->name('users');
            Route::get('getData', [UserController::class, 'getData'])->name('users.get-data');
            Route::get('create', [UserController::class, 'create'])->name('users.create')->middleware('can:create-users');
            Route::post('store', [UserController::class, 'store'])->name('users.store')->middleware('can:create-users');
            Route::get('{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('can:update-users');
            Route::post('{user}/update', [UserController::class, 'update'])->name('users.update')->middleware('can:update-users');
            Route::delete('{user}/delete', [UserController::class, 'destroy'])->name('users.delete')->middleware('can:delete-users');
            Route::get('{user}/update-status', [UserController::class, 'updateStatus'])->name('users.updateStatus')->middleware('can:update-users');
        });
    });
});
