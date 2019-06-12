<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){

    	return view('login.index');
    }

    public function verify(Request $req){

        $user = DB::table('users')->where('id', $req->uid)
            ->where('password', $req->password)
            ->first();

    	if($user){
            $req->session()->put('uname', $user->name);
			$req->session()->put('uid', $user->id);
			$req->session()->put('type', $user->type);
			$req->session()->put('password', $user->password);
    		if($user->status == "a")
			{
				if($user->type == "admin")
					return redirect()->route('adminhome.index');
				else if($user->type == "teacher")
					return redirect()->route('teacherhome.index');
				else if($user->type == "student")
					return redirect()->route('studenthome.index');
			}
			else if($user->status == "p")
			{
				$req->session()->flash('msg', "Your Account Is Pending, Please Contact Administration!");
				return redirect()->route('login.index');
			}
			else if($user->status == "r")
			{
				$req->session()->flash('msg', "Your Account Is Rejected, Please Contact Administration!");
				return redirect()->route('login.index');
			}
    	}else{

            $req->session()->flash('msg', "Invalid username/password");
    		return redirect()->route('login.index');
    	}
    }
}
