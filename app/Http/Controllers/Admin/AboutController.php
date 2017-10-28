<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    public function show()
    {
        if (view()->exists('index')) {
            return view('index');
        }
        abort(404);
    }



}
