<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Send;

class DashboardController extends Controller
{
    public function show_send(){
        $send = Send::all();
        return view('dashboard', ['send'=>$send]);
    }
}
