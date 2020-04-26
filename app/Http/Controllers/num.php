<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class num extends Controller
{
    //
    function number($n1,$n2,$n3)
    {
        $arr=[$n1,$n2,$n3];
        return view('num',compact('arr'));
    }
    function even_n($n1,$n2)
    {
        $arr=[$n1,$n2];
        return view('even',compact('arr'));
    }
}
