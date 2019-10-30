<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getLogin(){
        return 'getLogin';
    }

    public function postLogin()
    {
        return 'postLogin';
    }

    public function getUser()
    {
        $query = User::all();
        return view('users.index',compact('query') ,['title'=>'會員資料']);
    }
}
