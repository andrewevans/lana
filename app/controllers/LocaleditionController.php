<?php

class LocaleditionController extends \BaseController {

    protected $category;
    protected $slug = 'local-edition';

    public function __construct()
    {
        // @TODO: throw exception if false
        $this->category = get_category_by_slug($this->slug);
    }

    public function index()
    {
        return View::make('localedition.index',[
            'page_title' => $this->category->name,
            'page_description' => $this->category->description,
            'slug' => $this->slug,
        ]);
    }

    public function show($year, $month, $day, $wp_url_slug)
    {

        $post = Tools::get_post_by_slug($wp_url_slug);

        // 404 any URLs that do not match the proper pattern
        if (! $post || ! Request::is($this->slug . Tools::permalink_path($post))) {
            return Response::view('errors.missing', array(), 404);
        }

        return View::make('localedition.show',[
            'post' => $post,
        ]);
    }
}
