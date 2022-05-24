<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MyDoctorController;
use App\Http\Controllers\SecretaryController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Doctor\DoctorController;


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


Route::get('/' , function(){
    return view('html.index');
})->name('home');

Route::get('department' , function(){
    return view('html.department');
})->name('department');

Route::get('articles' , function(){
    return view('html.articles');
});
Route::get('games' , function(){
    return view('html.games');
})->name('games');
Route::get('game1' , function(){
    return view('html.game1');
})->name('game1');
Route::get('game2' , function(){
    return view('html.game2');
})->name('game2');
Route::get('tests' , function(){
    return view('html.tests');
})->name('tests');
Route::get('test1' , function(){
    return view('html.test1');
})->name('test1');
Route::get('test2' , function(){
    return view('html.test2');
})->name('test2');
Route::get('test3' , function(){
    return view('html.test3');
})->name('test3');
Route::get('test4' , function(){
    return view('html.test4');
})->name('test4');

Route::get('article1' , function(){
    return view('html.article1');
})->name('article1');

Route::get('article3' , function(){
    return view('html.article3');
})->name('article3');
Route::get('article2' , function(){
    return view('html.article2');
})->name('article2');

Route::get('test' , function(){
    return view('html.test');
});
Route::get('/sign in' , function(){
    return view('html.Sign In');
})->name('signin');
Route::get('/signin doctor' , function(){
    return view('html.Sign In doctor');
})->name('doctor.signin');
Route::get('/signUp' , function(){
    return view('html.Sign UP');
})->name('signUp');

Route::post('contact', [ContactController::class, 'store'] )->name('contact.store');

Route::get('blog', [PostController::class, 'index'] )->name('blog');
Route::post('blog', [PostController::class, 'store'] )->middleware('isPatient')->name('posts.store');
Route::get('blog/search', [PostController::class, 'search'] )->name('post.search');
Route::get('blog/speciality=addiction', [PostController::class, 'addiction_posts'] )->name('addiction.posts');
Route::get('blog/speciality=life_coach', [PostController::class, 'life_posts'] )->name('life.posts');
Route::get('blog/speciality=child', [PostController::class, 'child'] )->name('child.posts');
Route::get('blog/speciality=disability', [PostController::class, 'disability'] )->name('disability.posts');
Route::get('blog/speciality=family', [PostController::class, 'family'] )->name('family.posts');
Route::get('blog/speciality=forensic', [PostController::class, 'forensic'] )->name('forensic.posts');
Route::get('blog/speciality=general', [PostController::class, 'general'] )->name('general.posts');
Route::get('blog/speciality=geriatric', [PostController::class, 'geriatric'] )->name('geriatric.posts');


Route::get('blogPage/{id}', [CommentController::class, 'show'] )->name('blog.page');
Route::post('comment post/{id}', [CommentController::class, 'store'])->middleware(['auth:doctor,patient'])->name('comments.store');
Route::get('doctors' , [MyDoctorController::class, 'index'])->name('doctors.index');
Route::get('doctors/search' , [MyDoctorController::class, 'index'])->name('doctors.search');
Route::get('doctors/{doctor:name}' , [MyDoctorController::class, 'show'])->name('doctor.profile');
Route::get('doctors/profile/book' , [MyDoctorController::class, 'book'])->middleware('isPatient')->name('book.store');
Route::get('doctors/search' , [MyDoctorController::class, 'search'])->name('doctors.search');
Route::get('Patientdash' , [PatientController::class, 'PostRegisteration']);
Route::post('Patientdash' , [PatientController::class, 'PostRegisteration'])->name('patient.data');
Route::post('loginhome' , [PatientController::class, 'postLogin'])->name('patient.login');

Auth::routes();



Route::prefix('admin')->group(function(){

    
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','admin.login')->name('admin.login');
          Route::post('/check',[AdminController::class,'check'])->name('admin.check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('admin.home');
        Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
        
        Route::view('/index', 'admin.ADMIN index' )->name('admin.index');
        Route::get('/create', [SecretaryController::class, 'admin_create'])->name('admin.createDRAccount');
        Route::get('/contact', [SecretaryController::class, 'admin_contact'])->name('admin.contact.response');
        Route::get('/modify', [SecretaryController::class, 'modify_appoinment'])->name('admin.modify.appoinments');
        Route::get('/posts', [SecretaryController::class, 'posts'])->name('admin.posts');
        Route::get('/requests', [SecretaryController::class, 'admin_approve_requests'])->name('admin.approve.requests');
        Route::post('/account',[SecretaryController::class, 'store'])->name('admin.doctor.account');
        Route::post('/posts',[SecretaryController::class, 'show_posts'])->name('admin.show.posts');
        Route::delete('/destroy/{id}',[SecretaryController::class, 'destroy'])->name('admin.destroy');
    });


});

Route::prefix('doctor')->name('doctor.')->group(function(){
    
       Route::middleware(['guest:doctor','PreventBackHistory'])->group(function(){
            Route::view('/login','html.Sign In doctor')->name('login');
            Route::view('/register','dashboard.doctor.register')->name('register');
            Route::post('/create',[DoctorController::class,'create'])->name('create');
            Route::post('/check',[DoctorController::class,'check'])->name('check');
       });

       Route::middleware(['auth:doctor','PreventBackHistory'])->group(function(){
            Route::view('/home','dashboard.doctor.home')->name('home');
            // Route::get('/index', [DoctorController::class, 'doctor_index'])->name('index');
            Route::view('/index', 'doctor-dashboard.index')->name('index');
            Route::view('/requests-status', 'doctor-dashboard.requests status')->name('status');
            Route::view('/requests-modifications', 'doctor-dashboard.request modifications')->name('modifications');
            Route::view('publish article', 'doctor-dashboard.publish article')->name('article');
            Route::view('/create','doctor-dashboard.create post')->name('post');
            Route::post('/created',[DoctorController::class,'create_post'])->name('create.post');
            Route::get('logout',[DoctorController::class,'logout'])->name('logout');
       });

});



Route::get('/send-notification', [NotificationController::class, 'sendCancelNotification']);
Route::post('/review', [ReviewController::class, 'store'] )->middleware('isPatient')->name('reviews.store');
