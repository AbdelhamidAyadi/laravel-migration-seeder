<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{

    public function index() {
        
        $trains = Train::whereDate('data_di_partenza','=','2022-05-29')->get();
        


        return view('home' , compact('trains'));
    }
}
