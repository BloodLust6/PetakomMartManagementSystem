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
// Route::get('/addattendance', function () {
//     return view('manageUserManagement.addAttendance_screen');
// });
Route::get('/staffdetailadmin', function () {
    return view('manageUserManagement.staffDetailsAdmin_screen');
});
Route::get('/schedulemenu', function () {
    return view('manageUserManagement.scheduleMenu_screen');
});
// Route::get('/schedule', function () {
//     return view('manageUserManagement.schedule_screen');
// });
// Route::get('/schedulea', function () {
//     return view('manageUserManagement.scheduleAdmin_screen');
// });
Route::get('/addschedule', function () {
    return view('manageUserManagement.addschedule_screen');
});
// Route::get('/stafflist', function () {
//     return view('manageUserManagement.stafflist_screen');
// });
Route::get('/stafflistadmin', function () {
    return view('manageUserManagement.staffListAdmin_screen');
});
Route::get('/staffdetail', function () {
    return view('manageUserManagement.staffDetails_screen');
});
Route::get('/staffdetailadmin', function () {
    return view('manageUserManagement.staffDetailsAdmin_screen');
});
Route::get('/addstaff', function () {
    return view('manageUserManagement.addStaff_screen');
});
Route::get('/editstaff', function () {
    return view('manageUserManagement.editStaff_screen');
});
Route::get('/attendance', function () {
    return view('manageUserManagement.attendance_screen');
});
Route::get('/usermanagementa', function () {
    return view('manageUserManagement.userManagementAdmin_screen');
});
// Route::get('/addpromotion', function () {
//     return view('managePromotion.addPromotion_screen');
// });

// Route::get('/promotion', function () {
//     return view('managePromotion.home_screen');
// });
// Route::get('/promotionlist', function () {
//     return view('managePromotion.promotion_screen');
// });


// Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
// Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('announcements.create');
// Route::post('/announcements', [AnnouncementController::class, 'store'])->name('announcements.store');
// Route::get('/attendances', 'AttendanceController@index')->name('attendance');
// Route::get('/schedules', 'ScheduleController@index')->name('schedule');
// Route::get('/staff', 'StaffController@index')->name('staff');
// Route::get('/user-management', 'UserController@index')->name('user.management');

Route::get('/1', function () {
    return view('manageInventory.inventory_screen');
});

Route::get('/2', function () {
    return view('test');
});

//promotion

Route::get('/promotion','App\Http\Controllers\promotionController@index')->name('promotion');
Route::get('/promotionadmin','App\Http\Controllers\promotionController@indexAdmin')->name('admin.promotion');
Route::get('/promotion/{id}/edit','App\Http\Controllers\promotionController@edit')->name('promotion.edit');
Route::post('/promotion/{id}/update','App\Http\Controllers\promotionController@update');
Route::get('/promotion/{id}/delete','App\Http\Controllers\promotionController@delete')->name('promotion.delete');
Route::post('/promotion/create','App\Http\Controllers\promotionController@createAdmin')->name('promotion.create');
Route::get('/promotion/{id}','App\Http\Controllers\promotionController@Detail')->name('promotion.detail');
Route::post('/promotion/add','App\Http\Controllers\promotionController@Add')->name('promotion.add');
// Route::get('/promotion','App\Http\Controllers\promotionController@index')->name('admin.attendance');

//attendance
Route::post('/attendance/create','App\Http\Controllers\attendanceController@create');
Route::get('/attendance/{id}','App\Http\Controllers\attendanceController@index')->name('admin.attendance');
Route::get('/attendance/add','App\Http\Controllers\attendanceController@add')->name('add.attendace');

//staff
Route::get('/stafflist','App\Http\Controllers\staffController@index');
Route::get('/stafflistadmin','App\Http\Controllers\staffController@indexadmin');
Route::get('/staffDetail/{id}','App\Http\Controllers\staffController@staffDetail')->name('staff.detail');
Route::get('/staffDetailadmin/{id}','App\Http\Controllers\staffController@staffDetailAdmin')->name('admin.staff.detail');
Route::get('/stafflistadmin/{id}/edit','App\Http\Controllers\staffController@edit')->name('admin.staff.edit');
Route::post('/stafflistadmin/{id}/update','App\Http\Controllers\staffController@update');
Route::post('/stafflistadmin/create','App\Http\Controllers\staffController@create');
Route::get('/stafflistadmin/{id}/delete','App\Http\Controllers\staffController@delete')->name('admin.staff.delete');

//schedulestaff
Route::get('/schedule','App\Http\Controllers\scheduleController@index');
Route::post('/schedule/create','App\Http\Controllers\scheduleController@create')->name('schedule.add');
Route::get('/schedule/add','App\Http\Controllers\scheduleController@add');
Route::get('/schedule/edit','App\Http\Controllers\scheduleController@edit');
Route::get('/schedule/destroy','App\Http\Controllers\scheduleController@destroy');
Route::get('/schedule/store','App\Http\Controllers\scheduleController@store')->name('schedule.store');
Route::post('/schedule/update','App\Http\Controllers\scheduleController@update');

//scheduleadmin
Route::get('/scheduleadmin','App\Http\Controllers\scheduleController@indexAdmin');
Route::post('/scheduleadmin/createAdmin','App\Http\Controllers\scheduleController@createAdmin')->name('admin.schedule.add');
Route::get('/scheduleadmin/{id}/edit','App\Http\Controllers\scheduleController@edit')->name('admin.schedules.edit');
Route::post('/scheduleadmin/{id}/update','App\Http\Controllers\scheduleController@update');
Route::get('/scheduleadmin/{id}/delete','App\Http\Controllers\scheduleController@delete')->name('admin.schedules.delete');


Route::get('/inventory','App\Http\Controllers\inventoryController@index');
Route::get('/inventory/form','App\Http\Controllers\inventoryController@form');
Route::post('/inventory/create','App\Http\Controllers\inventoryController@create');
Route::get('/inventory/{id}/confirm','App\Http\Controllers\inventoryController@confirm');
Route::get('/inventory/{id}/delete','App\Http\Controllers\inventoryController@delete');
Route::get('/inventory/{id}/edit','App\Http\Controllers\inventoryController@edit');
Route::post('/inventory/{id}/update','App\Http\Controllers\inventoryController@update');

Route::get('/pos','App\Http\Controllers\inventoryController@pos');
Route::get('/pay','App\Http\Controllers\inventoryController@pay');
Route::get('/pay/cash','App\Http\Controllers\inventoryController@cash');
Route::get('/pay/balance','App\Http\Controllers\inventoryController@balance');
Route::get('/pay/qr','App\Http\Controllers\inventoryController@qr');
Route::get('/pay/success','App\Http\Controllers\inventoryController@success');
