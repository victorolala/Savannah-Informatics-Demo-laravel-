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

Route::get('/', function () {
     //$mail = new PHPMailer();
     $client = new Client();
     $api_response = $client->get('https://jsonplaceholder.typicode.com/users');
     $response = $api_response->getBody();
     $contents = $response->getContents();
     $responses = json_decode($contents);

     $api_response = $client->get('https://jsonplaceholder.typicode.com/albums');
     $response = $api_response->getBody();
     $contents = $response->getContents();
     $albums = json_decode($contents);

     $api_responses = $client->get('https://jsonplaceholder.typicode.com/photos');
     $response = $api_responses->getBody();
     $contents = $response->getContents();
     $photo_album = json_decode($contents);

    //  $api_response = $client->get('https://jsonplaceholder.typicode.com/users');
    //  $response = $api_response->getBody();
    //  $contents = $response->getContents();
    //  $data= json_decode($contents);
    //  ->join($albums->userId, $responses->id)
    //  ->where('employees.id', $user_id)
    //  ->get();
     
 //    $response = json_decode($api_response);
 //    $contents = $response->getBody()->getContents();

    // return view('admin.lincense', compact('responses'));
    return view('welcome', compact('responses', 'albums', 'photo_album'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
