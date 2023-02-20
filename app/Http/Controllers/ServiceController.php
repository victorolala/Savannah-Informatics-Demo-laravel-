<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
use DB;
use \Caborn;
use DateTime;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

use Mail;
 
use App\Mail\NotifyMail;

class ServiceController extends Controller
{
    public function index(){
        // $service=Service::all()->sortByDesc('id');
        // $serviceCount = Service::count();
        // $userCount = User::count();
        //$stationCount = Station::count();
        //$data = $this->client->get('https://jsonplaceholder.typicode.com/users');
        

        return view('admin.index');
        //->with(['services'=>$service, 'serviceCount'=>$serviceCount, 'userCount'=>$userCount, 'data'=>$data]);
    }
    public function lincense(Request $request){
      

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
    public function add_new(){
        return view('admin.add_new');
    }
    public function store(Request $request){
        $service = new Service();
        $time = strtotime($request->pdate);
        $newformat = date('Y-m-d H:i:s',$time);        
        $service->name = $request->fname;
        $service->email = $request->email;
        $service->service= $request->service;
        $service->amount= $request->amount;
        $service->currency= $request->currency;
        $service->period= $request->period;
        $service->purchased_date=   $newformat;
        $service->description= $request->desc;
        $service->save();
        Session::flash('Success','Service has been added successfully !');        
        return redirect()->route('lincense');
    }

    public function mail(Request $request, $id){
        Mail::to('olalavictor01@gmail.com')->send(new NotifyMail());
 
      if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->success('Great! Successfully send in your mail');
         }
       dd(response());
    }
    

    public function update(Request $request, $id){
        
        $service=Service::find($id);      

        $service->name = $request->fname;
        $service->email = $request->email;
        $service->service= $request->service;
        $service->amount= $request->amount;
        $service->currency= $request->currency;
        $service->period= $request->period;
        $service->update();
         
        Session::flash('Success','Renewal Service has been Updated successfully !');        
        return redirect()->route('lincense');
    }

    public function destroy(Request $request, $id)
    {
        $employee=Service::find($id);
        $employee->delete();
        Session::flash('Success','Service deleted successfully !');       
        return redirect()->route('lincense');
    }

}
