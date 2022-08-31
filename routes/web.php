<?php

use App\Http\Controllers\Web\Backend\Achievement\AchievementLevelController;
use App\Http\Controllers\Web\Backend\Achievement\AchievementTypeController;
use App\Http\Controllers\Web\Backend\Cooperation\CooperationFieldController;
use App\Http\Controllers\Web\Backend\Cooperation\CooperationTypeController;
use App\Http\Controllers\Web\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Web\Backend\Document\DocumentController;
use App\Http\Controllers\Web\Backend\Document\DocumentTypeController;
use App\Http\Controllers\Web\Backend\Employee\EmployeeController;
use App\Http\Controllers\Web\Backend\Employee\EmployeeTypeController;
use App\Http\Controllers\Web\Backend\Setting\SettingController;
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
Route::get('/kerjasama-industri', [HomeController::class, 'cooperation'])->name('frontend.cooperation');
Route::get('/staff', [HomeController::class, 'employee'])->name('frontend.employee');

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
        // Employee Type
        Route::prefix('employee-types')->middleware('can:read-employee-types')->group(function () {
            Route::get('', [EmployeeTypeController::class, 'index'])->name('employee-types')->middleware('can:read-employee-types');
            Route::get('get-data', [EmployeeTypeController::class, 'getData'])->name('employee-types.get-data')->middleware('can:read-employee-types');
            Route::post('store', [EmployeeTypeController::class, 'store'])->name('employee-types.store')->middleware('can:create-employee-types');
            Route::get('{employeeType}/show', [EmployeeTypeController::class, 'show'])->name('employee-types.update')->middleware('can:update-employee-types');
            Route::post('{employeeType}/update', [EmployeeTypeController::class, 'update'])->name('employee-types.update')->middleware('can:update-employee-types');
            Route::delete('{employeeType}/delete', [EmployeeTypeController::class, 'destroy'])->name('employee-types.delete')->middleware('can:delete-employee-types');
        });
        // Employee
        Route::prefix('employees')->middleware('can:read-employees')->group(function () {
            Route::get('', [EmployeeController::class, 'index'])->name('employees')->middleware('can:read-employees');
            Route::get('get-data', [EmployeeController::class, 'getData'])->name('employees.get-data')->middleware('can:read-employees');
            Route::post('store', [EmployeeController::class, 'store'])->name('employees.store')->middleware('can:create-employees');
            Route::get('{employee}/show', [EmployeeController::class, 'show'])->name('employees.update')->middleware('can:update-employees');
            Route::post('{employee}/update', [EmployeeController::class, 'update'])->name('employees.update')->middleware('can:update-employees');
            Route::delete('{employee}/delete', [EmployeeController::class, 'destroy'])->name('employees.delete')->middleware('can:delete-employees');
        });
        // Document
        Route::prefix('documents')->middleware('can:read-documents')->group(function () {
            Route::get('', [DocumentController::class, 'index'])->name('documents')->middleware('can:read-documents');
            Route::get('get-data', [DocumentController::class, 'getData'])->name('documents.get-data')->middleware('can:read-documents');
            Route::post('store', [DocumentController::class, 'store'])->name('documents.store')->middleware('can:create-documents');
            Route::get('{document}/show', [DocumentController::class, 'show'])->name('documents.update')->middleware('can:update-documents');
            Route::post('{document}/update', [DocumentController::class, 'update'])->name('documents.update')->middleware('can:update-documents');
            Route::delete('{document}/delete', [DocumentController::class, 'destroy'])->name('documents.delete')->middleware('can:delete-documents');
            Route::get('{document}/update-status', [DocumentController::class, 'updateStatus'])->name('documents.updateStatus')->middleware('can:update-documents');
        });
        // Achievement Type
        Route::prefix('achievement-types')->middleware('can:read-achievement-types')->group(function () {
            Route::get('', [AchievementTypeController::class, 'index'])->name('achievement-types')->middleware('can:read-achievement-types');
            Route::get('get-data', [AchievementTypeController::class, 'getData'])->name('achievement-types.get-data')->middleware('can:read-achievement-types');
            Route::post('store', [AchievementTypeController::class, 'store'])->name('achievement-types.store')->middleware('can:create-achievement-types');
            Route::get('{achievementType}/show', [AchievementTypeController::class, 'show'])->name('achievement-types.update')->middleware('can:update-achievement-types');
            Route::post('{achievementType}/update', [AchievementTypeController::class, 'update'])->name('achievement-types.update')->middleware('can:update-achievement-types');
            Route::delete('{achievementType}/delete', [AchievementTypeController::class, 'destroy'])->name('achievement-types.delete')->middleware('can:delete-achievement-types');
        });
        // Achievement Level
        Route::prefix('achievement-levels')->middleware('can:read-achievement-levels')->group(function () {
            Route::get('', [AchievementLevelController::class, 'index'])->name('achievement-levels')->middleware('can:read-achievement-levels');
            Route::get('get-data', [AchievementLevelController::class, 'getData'])->name('achievement-levels.get-data')->middleware('can:read-achievement-levels');
            Route::post('store', [AchievementLevelController::class, 'store'])->name('achievement-levels.store')->middleware('can:create-achievement-levels');
            Route::get('{achievementLevel}/show', [AchievementLevelController::class, 'show'])->name('achievement-levels.update')->middleware('can:update-achievement-levels');
            Route::post('{achievementLevel}/update', [AchievementLevelController::class, 'update'])->name('achievement-levels.update')->middleware('can:update-achievement-levels');
            Route::delete('{achievementLevel}/delete', [AchievementLevelController::class, 'destroy'])->name('achievement-levels.delete')->middleware('can:delete-achievement-levels');
        });
        // Document Type
        Route::prefix('document-types')->middleware('can:read-document-types')->group(function () {
            Route::get('', [DocumentTypeController::class, 'index'])->name('document-types')->middleware('can:read-document-types');
            Route::get('get-data', [DocumentTypeController::class, 'getData'])->name('document-types.get-data')->middleware('can:read-document-types');
            Route::post('store', [DocumentTypeController::class, 'store'])->name('document-types.store')->middleware('can:create-document-types');
            Route::get('{documentType}/show', [DocumentTypeController::class, 'show'])->name('document-types.update')->middleware('can:update-document-types');
            Route::post('{documentType}/update', [DocumentTypeController::class, 'update'])->name('document-types.update')->middleware('can:update-document-types');
            Route::delete('{documentType}/delete', [DocumentTypeController::class, 'destroy'])->name('document-types.delete')->middleware('can:delete-document-types');
        });
        // Cooperation Type
        Route::prefix('cooperation-types')->middleware('can:read-cooperation-types')->group(function () {
            Route::get('', [CooperationTypeController::class, 'index'])->name('cooperation-types')->middleware('can:read-cooperation-types');
            Route::get('get-data', [CooperationTypeController::class, 'getData'])->name('cooperation-types.get-data')->middleware('can:read-cooperation-types');
            Route::post('store', [CooperationTypeController::class, 'store'])->name('cooperation-types.store')->middleware('can:create-cooperation-types');
            Route::get('{cooperationType}/show', [CooperationTypeController::class, 'show'])->name('cooperation-types.update')->middleware('can:update-cooperation-types');
            Route::post('{cooperationType}/update', [CooperationTypeController::class, 'update'])->name('cooperation-types.update')->middleware('can:update-cooperation-types');
            Route::delete('{cooperationType}/delete', [CooperationTypeController::class, 'destroy'])->name('cooperation-types.delete')->middleware('can:delete-cooperation-types');
        });
        // Cooperation Field
        Route::prefix('cooperation-fields')->middleware('can:read-cooperation-fields')->group(function () {
            Route::get('', [CooperationFieldController::class, 'index'])->name('cooperation-fields')->middleware('can:read-cooperation-fields');
            Route::get('get-data', [CooperationFieldController::class, 'getData'])->name('cooperation-fields.get-data')->middleware('can:read-cooperation-fields');
            Route::post('store', [CooperationFieldController::class, 'store'])->name('cooperation-fields.store')->middleware('can:create-cooperation-fields');
            Route::get('{cooperationField}/show', [CooperationFieldController::class, 'show'])->name('cooperation-fields.update')->middleware('can:update-cooperation-fields');
            Route::post('{cooperationField}/update', [CooperationFieldController::class, 'update'])->name('cooperation-fields.update')->middleware('can:update-cooperation-fields');
            Route::delete('{cooperationField}/delete', [CooperationFieldController::class, 'destroy'])->name('cooperation-fields.delete')->middleware('can:delete-cooperation-fields');
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

        // Settings
        Route::prefix('settings')->middleware('can:read-settings')->group(function () {
            Route::get('', [SettingController::class, 'index'])->name('settings');
            Route::post('', [SettingController::class, 'update'])->middleware('can:update-settings')->name('api.settings');
        });
    });
});
