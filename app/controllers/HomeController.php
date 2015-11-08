<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function index()
    {
        return View::make('home.index',[
            'page_title' => html_entity_decode(get_bloginfo('name'), ENT_QUOTES, 'UTF-8'),
            'page_description' => html_entity_decode(get_bloginfo('description'), ENT_QUOTES, 'UTF-8'),
        ]);
    }

	public function showWelcome()
	{
		return View::make('hello');
	}

}
