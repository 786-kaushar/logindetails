<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("registration");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            "name"=>"required",
            "email"=>"required|email",
            "phone"=>"required|numeric",
            "country"=>"required",
            "state"=>"required",
            "city"=>"required",
            "pincode"=>"required|numeric",
            "photo"=>"required|mimes:'bmp,jpg,jpeg,png'",
            "usertype"=>"required"
        ]);
        $data = $request->all();
        $uniquefilename = time() . "." . $request->photo->extension();    
        $request->photo->move(public_path("images/registration"),$uniquefilename);
        $data['photo'] = $uniquefilename;
        $registration = registration::create($data);
        return view("login")->with("message","Registration has been done successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
        $registration = registration::where('id',$request->id)->get();
        $registration=$registration[0];
        $adminid = $request->adminid;
        return view('editregistration',compact('registration','adminid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registration $registration)
    {
        $this->validate($request,
        [
            "name"=>"required",
            "email"=>"required|email",
            "phone"=>"required|numeric",
            "country"=>"required",
            "state"=>"required",
            "city"=>"required",
            "pincode"=>"required|numeric",
            "usertype"=>"required"
        ]);
        $data = $request->all();
        $data['photo'] = $request->photo;
        if($data['photo']!=null)
        {
            $filename = public_path('images/registration/').$request->oldphoto;
            unlink($filename);
            $uniquefilename = time() . "." . $request->photo->extension();
            $request->photo->move(public_path('images/registration'),$uniquefilename);
            $data['photo'] = $uniquefilename;
        }
        else
        {
            $data['photo'] = $request->oldphoto;
        }
        unset($data['_token'],$data['oldphoto']);
        unset($data['adminid']);
         registration::where('id',$request->id)->update($data);
         $user=registration::where('usertype',2)->get();
         $login=registration::where("id",$request->adminid)->get();
         $login = $login[0];
         $adminmessage=$login->name." "."has been cureently login";
        $message = "user details has been updated";
        return redirect()->to('userlogins/'.$login->name.'/'.$login->email);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(registration $registration)
    {
        //
    }
}
