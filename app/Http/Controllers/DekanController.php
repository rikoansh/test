<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DekanController extends Controller
{
    public function home()
	{
		$no = 1;
		return view('dekan/home',compact('no'));
	}
	
	public function tracerstudy()
	{
		$no = 1;
		return view('dekan/tracerstudy',compact('no'));
	}
	public function laporan()
	{
		$no = 1;
		return view('dekan/laporan',compact('no'));
	}

	public function setting()
	{
		$no = 1;
		return view('dekan/setting',compact('no'));
	}


}
