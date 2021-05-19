<?php

namespace App\Http\Controllers;
use App\Models\registration;
use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $login=registration::where('name',$request->name)->where("email",$request->email)->get();
        if(count($login)!=0)
        {
           $login = $login[0];
           if($login->usertype==1)
           {
               $status=" ";
                $message = $login->name." "."has been cureently login";
                $user=registration::where('usertype',2)->get();
                return view("adminlogin")->with('message',$message)->with('user',$user)->with('id',$login->id);
           }
           else
           {
                $login=registration::where('name',$request->name)->where("email",$request->email)->where('status',1)->get();

                if(count($login)!=0)
                {
                    $login = $login[0];
                    $message = $login->name." "."has been cureently login";
                    return view("userlogin")->with('users',$login)->with('message',$message)->with('id',$login->id);
                }
                else
                {
                    return view("login")->with("message","your account has been deactivated");
                }
                
           } 
        }
          // return view("hello")->with("login",$login);       
               
        else
        {
            return view("login")->with("message","Username or email is incorrect");
        }
    }
}
