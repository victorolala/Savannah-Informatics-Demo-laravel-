<?php
use GuzzleHttp\Client;
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

// Route::get('/', function () {
//      //$mail = new PHPMailer();
//      $client = new Client();
//      $api_response = $client->get('https://jsonplaceholder.typicode.com/users');
//      $response = $api_response->getBody();
//      $contents = $response->getContents();
//      $responses = json_decode($contents);

//      $api_response = $client->get('https://jsonplaceholder.typicode.com/albums');
//      $response = $api_response->getBody();
//      $contents = $response->getContents();
//      $albums = json_decode($contents);

//      $api_responses = $client->get('https://jsonplaceholder.typicode.com/photos');
//      $response = $api_responses->getBody();
//      $contents = $response->getContents();
//      $photo_album = json_decode($contents);

//     //  $api_response = $client->get('https://jsonplaceholder.typicode.com/users');
//     //  $response = $api_response->getBody();
//     //  $contents = $response->getContents();
//     //  $data= json_decode($contents);
//     //  ->join($albums->userId, $responses->id)
//     //  ->where('employees.id', $user_id)
//     //  ->get();
     
//  //    $response = json_decode($api_response);
//  //    $contents = $response->getBody()->getContents();

//     // return view('admin.lincense', compact('responses'));
//     return view('welcome', compact('responses', 'albums', 'photo_album'));
// });

Route::get('/', function () {
   return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\ServiceController::class, 'index'])->name('admin');
Route::get('/user', [App\Http\Controllers\UserController::class, 'request_api'])->name('request_api');
Route::get('/licenses/add_new', [App\Http\Controllers\ServiceController::class, 'add_new'])->name('add_new');
Route::post('licenses/save','\App\Http\Controllers\ServiceController@store')->name('service_store');
Route::get('licenses/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('destroy');
Route::PUT('licenses/Update/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('service_update');
Route::get("send-email/{id}", [App\Http\Controllers\ServiceController::class, 'mail'])->name('mail');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
