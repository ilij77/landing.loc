<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show()
    {
        $array=array(
            'title'=>'Laravel Project',
        'data'=>[
            'one'=>'List1',
        'two'=>'List2',
        'three'=>'List3',
        'for'=>'List4',
        'five'=>'list5'
        ],
        'data1'=>['List1','List2','List3','List4','List5'],
        'bhar'=>true,
        'script'=>"<script>alert('hello')</script>"
    );

        if (view()->exists('index')) {
            return view('index',$array);
        }
        abort(404);
    }
    }
