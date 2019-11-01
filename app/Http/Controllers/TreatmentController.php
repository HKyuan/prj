<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TreatmentController extends Controller
{
    public function getTreat()
    {
        return 'getTreat';
    }

    public function getrecord()
    {
        // $query = User::all();
        return 'getRecord';
    }
    
}
