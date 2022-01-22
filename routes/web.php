<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Backend\LetterController;
use App\Http\Controllers\Backend\files\FilesController;
use App\Http\Controllers\Backend\PayController;


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

/* ----------------------------Admin Route --------------------*/

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'Index'])->name('login_from');
    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/register', [AdminController::class, 'AdminRegister'])->name('admin.register');
    Route::post('/register/create', [AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');
});

/* ---------------------- End of Admin Route -------------------*/

/* ----------------------------Employee Route --------------------*/

Route::prefix('employee')->group(function () {
    Route::get('/change/password', [EmployeeController::class, 'ChangePassword'])->name('change.password');
    Route::post('/update/password', [EmployeeController::class, 'UpdatePassword'])->name('password.update');
    Route::get('/login', [EmployeeController::class, 'Index'])->name('employee_login_from');
    Route::post('/login/owner', [EmployeeController::class, 'Login'])->name('employee.login');
    Route::get('/dashboard', [EmployeeController::class, 'Dashboard'])->name('employee.dashboard')->middleware('employee');
    Route::get('/logout', [EmployeeController::class, 'employeeLogout'])->name('employee.logout')->middleware('employee');
    Route::get('/register', [EmployeeController::class, 'employeeRegister'])->name('employee.register');
    Route::post('/register/create', [EmployeeController::class, 'employeeRegisterCreate'])->name('employee.register.create');
});

/* ---------------------- End of Admin Route -------------------*/

/* ----------------------------Letter Route --------------------*/

Route::prefix('letter')->group(function () {
    Route::get('/view', [LetterController::class, 'letterView'])->name('letter.view');
    Route::get('/inbox', [LetterController::class, 'letterInbox'])->name('letter.inbox');
    Route::get('/add', [LetterController::class, 'letterAdd'])->name('letters.add');
    Route::post('/store', [LetterController::class, 'letterStore'])->name('letters.store');
    Route::get('/submit/{id}', [LetterController::class, 'letterSubmit'])->name('letter.submit');
    Route::post('/submitToHigher/{id}', [LetterController::class, 'letterSubmitToHigher'])->name('letter.submit_to_higher');
});
/* ---------------------- End of Letter Route -------------------*/

/* ----------------------------User Route --------------------*/

Route::prefix('users')->group(function () {
    Route::get('/admin/view', [UserController::class, 'AdminView'])->name('user.admin.view');
    Route::get('/employee/view', [UserController::class, 'EmployeeView'])->name('employee.view');
    Route::get('/employee/edit/{id}', [UserController::class, 'EmployeeEdit'])->name('employee.edit');
    Route::post('/employee/update/{id}', [UserController::class, 'EmployeeUpdate'])->name('employee.update');
    Route::get('/admin/add', [UserController::class, 'AdminAdd'])->name('users.admin.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});
/* ---------------------- End of Letter Route -------------------*/
/* ----------------------------Files Route --------------------*/

Route::prefix('files')->group(function () {
    Route::get('/view', [FilesController::class, 'FileView'])->name('files.view');
    Route::get('/add', [FilesController::class, 'FileAdd'])->name('files.add');
    Route::post('/store', [FilesController::class, 'FileStore'])->name('files.store');
    Route::get('/edit/{id}', [FilesController::class, 'FileEdit'])->name('files.edit');
    Route::get('/delete/{id}', [FilesController::class, 'FileDelete'])->name('files.delete');
    Route::post('/update/{id}', [FilesController::class, 'FileUpdate'])->name('files.update');
});
/* ---------------------- End of Letter Route -------------------*/

/* ----------------------------Pay Route --------------------*/

Route::prefix('pay')->group(function () {
    Route::get('/view', [PayController::class, 'PayView'])->name('pay.view');
    Route::get('/add', [PayController::class, 'PayAdd'])->name('pay.add');
    Route::post('/store', [PayController::class, 'PayStore'])->name('pay.store');
    Route::get('/edit/{id}', [PayController::class, 'PayEdit'])->name('pay.edit');
    Route::get('/delete/{id}', [PayController::class, 'PayDelete'])->name('pay.delete');
    Route::post('/update/{id}', [PayController::class, 'PayUpdate'])->name('pay.update');
});
/* ---------------------- End of Pay Route -------------------*/

Route::get('/', function () {
    return view('employee.employee_login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
