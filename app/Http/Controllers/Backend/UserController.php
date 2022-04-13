<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
    public function UserView(){
        // $allData =User::all();
        // return view('backend.user.view_user',compact('allData','allData'));
        
        $data['allData'] = User::all();
        return view('backend.user.view_user',$data);
    }

    public function UserAdd(){
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request){
        $validatedData = $request->validate([
            'email' => 'required | unique:users',
            'name' => 'required',
            'name' => 'required',
        ]);
        
        $data = new User();
        $data ->usertype = $request->usertype;
        $data ->name = $request->name;
        $data ->email = $request->email;

        
        // $data ->password = $request->usertype;
        $data ->password = bcrypt($request->password);
        $data->save();

        $notification = array(
            'message' => 'User Inserted Succesfully',
            'alert-type' => 'success'
            
        );

        return redirect()->route('user.view')->with($notification);




    }
}
