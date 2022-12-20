<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard/admin/admin-index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard-student', function () {
    return view('dashboard/student/student-index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard-lecturer', function () {
    return view('dashboard/lecturer/lecturer-index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/add-project', function () {
    return view('dashboard/admin/add-project');
})->middleware(['auth', 'verified'])->name('add-project');

Route::get('/submit-progress', function () {
    return view('dashboard/student/submit-progress');
})->middleware(['auth', 'verified'])->name('submit-progress');

Route::get('/project-supervised', function () {
    return view('dashboard/lecturer/project-supervised');
})->middleware(['auth', 'verified'])->name('project-supervised');

Route::get('/mark-project', function () {
    return view('dashboard/lecturer/mark-project');
})->middleware(['auth', 'verified'])->name('mark-project');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
