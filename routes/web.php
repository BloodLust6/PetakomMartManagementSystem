<?php

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
    return view('welcome');
});
Route::get('/usermanagement', function () {
    return view('manageUserManagement.userManagementCashier_screen');
});
Route::get('/addattendance', function () {
    return view('manageUserManagement.addAttendance_screen');
});
Route::get('/staffdetails', function () {
    return view('manageUserManagement.staffDetailsAdmin_screen');
});
Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('announcements.create');
Route::post('/announcements', [AnnouncementController::class, 'store'])->name('announcements.store');
Route::get('/attendance', 'AttendanceController@index')->name('attendance');
Route::get('/schedule', 'ScheduleController@index')->name('schedule');
Route::get('/staff', 'StaffController@index')->name('staff');
Route::get('/user-management', 'UserController@index')->name('user.management');