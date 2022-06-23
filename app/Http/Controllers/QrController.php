<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    public function createQRCode(){
        return view('qrcodeview');
    }
}
