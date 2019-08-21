<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        $var=10;
        $var2=20;
        $var=$var+$var2;
        return $var;
        die;
        return view('belajar/list',compact('data'));    }
}
