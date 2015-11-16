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


    public function show($wp_url_slug = null)
    {
        $args = array(
            'name'         => $wp_url_slug,
            'post_type'        => 'post',
            'orderby'          => 'post_date',
            'order'            => 'DESC',
            'post_status'      => 'publish',
            'suppress_filters' => true );

        $post = current( get_posts( $args ) );

        // @TODO: Prepend URL with section url slug like: /local-edition/2015/12/31/my-post-here

        return View::make('localedition.show',[
            'post' => $post,
        ]);
    }
}
