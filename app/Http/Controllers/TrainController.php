<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{

    public function index() {
        
        $trains = Train::table('trains')->where('data_di_partenza')->CURDATE();


        return view('home' , compact('trains'));
    }
}
