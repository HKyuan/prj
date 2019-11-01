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

    public function getPDF()
    {   
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->getHTML());
        // $pdf->loadView('users.pdf');
        $pdf->stream();
    }
    public function getHTML()
    {
        
        $query = $this->request()->check;
        $output ='
        <table style="width:100% ; border-collapse:collapse ; border: 1px solid; ">
        <thead>
            <tr>
                <th align="center">id</td>
                <th align="center">name</td>
            </tr>
        </thead>
        <tbody width="100%">
        ';
        foreach($query as $var)
        {
            $output .='
            <tr>
                <td width="25%" align="center">'. $var->id .'</td>
                <td style="word-wrap: break-word;" align="center">'. $var->name.'</td>
            </tr>
            ';
        }
        $output.='</table>';
        return $output;
    }
    
    public function postpdf()
    {   
        $ary = request()->check;
        $posts = DB::table('treatments')->whereIn('id', $ary)->get();
        return view('users.pdf',compact('posts'));
    }
}
