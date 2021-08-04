<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Application;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{

    public function index()
    {
    	if (Cookie::get('locale')) {
    		App::setLocale(Cookie::get('locale'));
    	}
    	
        return view('home');
    }
    
    public function send_consultation(Request $request)
    {
    	if (
    		$request->input('name') &&
    		$request->input('phone') &&
    		$request->input('messange')
		) {
			
			Mail::to(env('MAIL_FOM_MAIL'))->send(new Application(array(
				'name' => $request->input('name'),
	    		'phone' => $request->input('phone'),
	    		'messange' => $request->input('messange')
			)));
				
		}
		 return redirect('/');
    }
}
