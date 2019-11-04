<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Treatment;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{

    public function getLogin(){
        return view('users.login',['title'=>'登入']);
    }

    public function postLogin()
    {
        $query = request()->all();

        $rules = [
            'name'=>['required','max:10'],
        ];

        $validator = Validator::make($query , $rules);
    }

    public function getUser()
    {
        $query = Treatment::all();
        return view('users.index',compact('query') ,['title'=>'會員資料']);
    }

    public function postPDF()
    {   
        $ary = request()->check;
        $posts = DB::table('treatments')->whereIn('id', $ary)->get();
        session()->put('posts',$posts);
        return view('users.pdf',compact('posts'),['title'=>'PDF']);
    }
    
    public function createPDF()
    {   
        $pdf = App::make('dompdf.wrapper');
        $posts = session('posts');
        // dd($posts);
        $pdf->loadHTML($this->getData($posts));
        // $pdf->loadView('users.pdf',compact('posts'));
        session()->forget('posts');
        return $pdf->stream();
    }
    public function getData($query)
    {
        // $query = session('posts');
        // $query = Treatment::all();
        if(empty($query))$output = '<H3 style="text-align:center">No Data checked !</H3>';

        else{
            $output ='
            <table style="width:100% ; word-wrap: break-word; border-collapse:collapse">
            <thead>
                <tr>
                    <th style="text-align:center">id</th>
                    <th style="text-align:center">name</th>
                </tr>
            </thead>
            <tbody>';
            foreach($query as $var)
            {
                $output .= '
                <tr>
                    <td width="25%" align="center">'. $var->id .'</td>
                    <td style="word-wrap: break-word;" align="center">'. $var->name.'</td>
                </tr>
                ';
            }
        } 
        $output .='</table>';
        return $output;
    }

}
