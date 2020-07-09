<?php

namespace App\Http\Controllers;
use DB;
use App\Deal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ViewErrorBag;

class BookyardController extends Controller
{
    public function getList()
    {
    	$bookyard = Deal::all();
    	return view('Admin.bookyard',['bookyard'=>$bookyard]);
    }
    public function postDelete_bookyard(Request $request)
	{
		$bookyard = Deal::find($request->id)->delete();
		return response()->json();
    }
}