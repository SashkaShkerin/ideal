<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

Route::get('/', 'HomeController@index');

Route::post('/send_consultation', 'HomeController@send_consultation');

Route::get('/lang/{lang}', function ($lang) {
	
    if (in_array($lang, ['en', 'ru'])) {
       Cookie::queue('locale', $lang, 10080);
    }

	return redirect('/');
});