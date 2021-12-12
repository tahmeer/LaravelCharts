<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    function QrCode(){
       return view('QrCode');
    }
    function QrCodeResult(){
       return "Hello User";
    }
}
