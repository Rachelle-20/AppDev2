<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/desk', function () {
//     return view('landing');
// });



// Route::post('greeting', [UserController::class, 'index']);

// Route::match(['put', 'patch', 'get', 'post'], '/greeting', function(){
//            return 'This is for put patch post http verb only';
// });

// Route::any('/greeting', function () {
//     return 'This is for put patch post http verb only';
// });

Route::get('/greeting', function (Request $request) {
    return $request->name . ' - '. $request->email;
});
