<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class democontrollers extends Controller
{
    function action(Request $request){
    // $photoFile = $request->file('photo');
    // $filesize = filesize($photoFile);
    // $filetype = filetype($photoFile);
    // $fileOriginalName = $photoFile->getClientOriginalName();
    // $fileTempName = $photoFile->getFilename();
    // $fileExtension = $photoFile->extension();

    // return array(
    //   "filesize" => $filesize,
    //   "filetype" => $filetype,
    //   "f" => $fileOriginalName,
    //   "t" => $fileTempName,
    //   "E" => $fileExtension,

    // );

    // $file = $request->file('photo');
    //✌️✌️problem
    // $file->move(public_path('upload'), $file->getClientOriginalName());
    // return true;

    // return $request->getAcceptableContentTypes();
    // return $request->ip();
    // if ( $request->accepts(['application/json'])){
    //   return "hello";
    // }else{
    //   return "not";
    // }

    // return $request->cookie();
    //✌️✌️problem
    // return $request->cookie('cookie_1');



    // return array(
    //   array("name"=>"Naim", "age"=>20, "email"=>"md@gmail.com"),
    //   array("name"=>"Rakib", "age"=>30, "email"=>"mdrakib@gmail.com"),
    //   "address"=>"sherpur", "phon"=>"01700668591",
    // array("name"=>"Norany", "age"=>10, "email"=>"norany@gamil.com",
    // array('apple', "banana", 'orange')
    //      ) 
    //      );

    // return response()->json(['name' => "Naim", "age" => "20"]);

     //✌️✌️problem
      // $name = 'cookie_1';
      // $value = 'this is my data';
      // $minutes = 60;
      // $path = '/';
      // $domian = $_SERVER['SERVER_NAME'];
      // $secure = true;
      // $httpOnly = true;
      // return response('naim')->cookie(
      //   $name, $value, $minutes, $path, $secure, $httpOnly,$domian
      // );




      // return response('hello')
      // ->header('name', 'Md>Naim')
      // ->header('age', '20');

        // return view('naim');

        // $num1 = $request->num1;
        // $num2 = $request->num2;
        // $sum = $num1+$num2;

        // Log::info($sum);
        // Log::emergency($sum);
        // Log::alert($sum);
        // Log::critical($sum);
        // Log::error($sum);
        // Log::warning($sum);
        // Log::notice($sum);
        // Log::debug($sum);

        // return $sum;
        return 'hello';

    }


    function sessionPut(Request $request):bool{
      $email = $request->email;
      $request->session()->put('userEmail', $email);
      return true;
    }
    function sessionPull(Request $request){
      
    }
    function sessionGet(Request $request){
      
    }
    function sessionForget(Request $request){
      
    }
    function sessionFlush(Request $request){
      
    }


}
