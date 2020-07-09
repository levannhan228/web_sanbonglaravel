<?php

namespace App\Http\Controllers;

use DB;
use App\Stadium;
use App\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ViewErrorBag;

class CalendarController extends Controller
{
    public function getList()
    {
        $liststadium = Stadium::all();
        $calendar = Calendar::all();
    	return view('Admin.Calendar.calendar',['liststadium'=>$liststadium,'calendar'=>$calendar]);
    }
    public function postCalendar(Request $request )
    {
        $product = new Calendar();
        $product->title = $request->title;
        $product->save();
    }
}
