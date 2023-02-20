<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function request_api(Request $request){
      

        //$mail = new PHPMailer();
        $client = new Client();
        $api_response = $client->get('https://jsonplaceholder.typicode.com/users');
        $response = $api_response->getBody();
       $contents = $response->getContents();
       $responses = json_decode($contents);

       $client = new Client();
        $api_response = $client->get('https://jsonplaceholder.typicode.com/albums');
        $response = $api_response->getBody();
       $contents = $response->getContents();
       $album = json_decode($contents);
        
    //    $response = json_decode($api_response);
    //    $contents = $response->getBody()->getContents();

        return view('admin.lincense', compact('responses', 'album'));
        
   // return view('admin.lincense')->with(['services'=>Service::all()->sortByDesc('id')]);
    }
}
