<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserlistController;
use App\Http\Controllers\BookclassController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CourseController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\TestController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\CoursepaymentController;
use App\Http\Controllers\TestpaymentController;
use App\Http\Controllers\Admin\ManagementcourseController;
use App\Http\Controllers\Admin\ManagementtestController;
use App\Http\Controllers\Admin\BanksoalController;


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


/*------------- SITE LANDING PAGE -----------------*/

Route::get('/', 'App\Http\Controllers\Site\HomeController@getIndex')->name('site.home.getIndex');
Route::get('/about', 'App\Http\Controllers\Site\AboutController@getIndex')->name('site.about.getIndex');
Route::get('/course', 'App\Http\Controllers\Site\CourseController@getIndex')->name('site.course.getIndex');
Route::get('/test', 'App\Http\Controllers\Site\TestController@getIndex')->name('site.test.getIndex');



/*------------- Dashboard-----------------*/

Route::middleware(['auth','verified'])->group(function() {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CoursePayment Route

    Route::get('/coursepayment', 'App\Http\Controllers\CoursePaymentController@getIndex')->name('dashboard.coursepayment.getIndex');

     // TestPayment Route

     Route::get('/testpayment', 'App\Http\Controllers\TestpaymentController@getIndex')->name('dashboard.testpayment.getIndex');

    // Bookclass Route

    Route::get('/bookclass', 'App\Http\Controllers\BookclassController@getIndex')->name('dashboard.bookclass.getIndex');

    // Class Route

    Route::get('/class', 'App\Http\Controllers\ClassController@getIndex')->name('dashboard.class.getIndex');


    // Progress Route

    Route::get('/progress', 'App\Http\Controllers\ProgressController@getIndex')->name('dashboard.progress.getIndex');

    // Exercise Route

    Route::get('/exercise', 'App\Http\Controllers\ExerciseController@getIndex')->name('dashboard.exercise.getIndex');


    // Teachers Route

    Route::get('/teachers', 'App\Http\Controllers\Admin\TeacherController@getIndex')->name('dashboard.teachers.getIndex')->middleware('isadmin');
    Route::get('/teachers/create', 'App\Http\Controllers\Admin\TeacherController@getCreate')->name('dashboard.teachers.getCreate')->middleware('isadmin');
    Route::post('/teachers/store', 'App\Http\Controllers\Admin\TeacherController@postStore')->name('dashboard.teachers.postStore')->middleware('isadmin');
    Route::get('/teachers/show', 'App\Http\Controllers\Admin\TeacherController@getShow')->name('dashboard.teachers.getShow')->middleware('isadmin');
    Route::get('/teachers/edit/{id}', 'App\Http\Controllers\Admin\TeacherController@getEdit')->name('dashboard.teachers.getEdit')->middleware('isadmin');
    Route::post('/teachers/update/{id}', 'App\Http\Controllers\Admin\TeacherController@postUpdate')->name('dashboard.teachers.postUpdate')->middleware('isadmin');
    Route::get('/teachers/delete/{id}', 'App\Http\Controllers\Admin\TeacherController@getDestroy')->name('dashboard.teachers.getDestroy')->middleware('isadmin');

    // Userlist Route

    Route::get('/userlist', 'App\Http\Controllers\Admin\UserlistController@getIndex')->name('dashboard.userlist.getIndex')->middleware('isadmin');
    Route::get('/userlist/create', 'App\Http\Controllers\Admin\UserlistController@getCreate')->name('dashboard.userlist.getCreate')->middleware('isadmin');
    Route::post('/userlist/store', 'App\Http\Controllers\Admin\UserlistController@postStore')->name('dashboard.userlist.postStore')->middleware('isadmin');
    Route::get('/userlist/show', 'App\Http\Controllers\Admin\UserlistController@getShow')->name('dashboard.userlist.getShow')->middleware('isadmin');
    Route::get('/userlist/edit/{id}', 'App\Http\Controllers\Admin\UserlistController@getEdit')->name('dashboard.userlist.getEdit')->middleware('isadmin');
    Route::post('/userlist/update/{id}', 'App\Http\Controllers\Admin\UserlistController@postUpdate')->name('dashboard.userlist.postUpdate')->middleware('isadmin');
    Route::get('/userlist/delete/{id}', 'App\Http\Controllers\Admin\UserlistController@getDestroy')->name('dashboard.userlist.getDestroy')->middleware('isadmin');

     // Managementcourse Route

     Route::get('/managementcourse', 'App\Http\Controllers\Admin\ManagementcourseController@getIndex')->name('dashboard.managementcourse.getIndex');

    // Managementtest Route

     Route::get('/managementtest', 'App\Http\Controllers\Admin\ManagementtestController@getIndex')->name('dashboard.managementtest.getIndex');

     // Bank Soal Route

     Route::get('/banksoal', 'App\Http\Controllers\Admin\BanksoalController@getIndex')->name('dashboard.banksoal.getIndex');





});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';









