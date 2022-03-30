<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserView(){
        // $allData =User::all();
        // return view('backend.user.view_user',compact('allData','allData'));
        
        $data['allData'] = User::all();
        return view('backend.user.view_user',$data);
    }
}
