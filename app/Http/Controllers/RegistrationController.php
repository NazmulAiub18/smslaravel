<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Registrationcontroller extends Controller
{

    public function registration(Request $req){
    	//return view('registration.reg');

    	$name = $req->input('name');
    	$fathername = $req->input('fathername');
    	$mothername = $req->input('mothername');
    	$password = $req->input('password');
    	$cpassword = $req->input('cpassword');
    	$email = $req->input('email');
    	$address = $req->input('address');
    	$image = $req->input('image');
    	$type = $req->input('type');
    	$dob = $req->input('dob');
    	$class = $req->input('class');
    	$gender = $req->input('gender');
    	//$validity = 'a';
    	if($password !="" && $cpassword!="" && $password == $cpassword && $name !="" && $fathername !="" && $mothername !="" && 
    	   $email !="" && $address !="" && $image !="" && $type !="" && $dob !="" && $class !="" && 
           $gender !="")

            {
    		      
                  $data = array('name'=>$name,'fathername'=>$fathername,'image'=>$image,'mothername'=>
                  $mothername, 'password'=>$password,'email'=>$email,'address'=>$address,'type'=>
                  $type,'dob'=>$dob,'class'=>$class,'gender'=>$gender,'status'=>'p');

    	           DB::table('users')->insert($data);

    	           return redirect()->route('login.index');
    }else{
    	return ("Field can't be empty");
    	
    }
}


    

    public function display(){

    	return view('registration.index');
    }
}
