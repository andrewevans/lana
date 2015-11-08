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
}
