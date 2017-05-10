<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function hum{
    	$hum = Subject::where('type', 'ah')->all();
    	return view('subject.hum', compact('$hum'));
    }

    public function ssp{

    }

    public function mst{

    }

    public function dpsm{

    }
}
