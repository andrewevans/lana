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
        $query = new WP_Query();
        $posts = $query->get_posts();

        return View::make('home.index',[
                'posts' => $posts,
        ]);
    }

	public function showWelcome()
	{
		return View::make('hello');
	}

}
