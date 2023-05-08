<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\MailController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\agentController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\cSubJudulController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\pSubJudulController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [landingController::class,"index"]);
Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send.email');

Route::redirect('home','dashboard');
Route::get('/auth', [authController::class,"index"])->name('login')->middleware('guest');
Route::get('/auth/redirect', [authController::class, "redirect"])->middleware('guest');
Route::get('/auth/callback', [authController::class, "callback"])->middleware('guest');
Route::get('/auth/logout', [authController::class,"logout"]);  
// Route::prefix('dashboard')->middleware('auth')->group(
//     function (){
        
//         Route::get('/', function(){
//             return View('dashboard.frame');
//         });
//         Route::resource('portfolio', portfolioController::class);
//     }
// );
Route::prefix('dashboard')->middleware('auth')->group(
    function (){

        Route::get('/', [portfolioController::class,"index"]);
        Route::resource('portfolio', portfolioController::class);
        Route::resource('clients', clientController::class);
        // Route::resource('experience', experienceController::class);
        // Route::resource('education', educationController::class);
        Route::get('agent', [agentController::class,"index"])->name('agent.index');
        Route::post('agent', [agentController::class, "update"])->name('agent.update');
        Route::get('about', [aboutController::class,"index"])->name('about.index');
        Route::post('about', [aboutController::class, "update"])->name('about.update'); 
        Route::get('portfolioSubJudul', [pSubJudulController::class,"index"])->name('portfolioSubJudul.index');
        Route::post('portfolioSubJudul', [pSubJudulController::class, "update"])->name('portfolioSubJudul.update');
        Route::get('clientSubJudul', [cSubJudulController::class,"index"])->name('clientSubJudul.index');
        Route::post('clientSubJudul', [cSubJudulController::class, "update"])->name('clientSubJudul.update');


    }
);
