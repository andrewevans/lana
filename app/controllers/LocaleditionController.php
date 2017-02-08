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

    public function show($permalink_path)
    {
        $post = Tools::get_post_from_permalink_path($permalink_path);

        # Create a DOM parser object
        $dom = new DOMDocument();

        # Parse the HTML from the post.
        # The @ before the method call suppresses any warnings that
        # loadHTML might throw because of invalid HTML in the page.
        @$dom->loadHTML($post->post_content);

        $spans = $dom->getElementsByTagName('span');

        # Iterate over all the <span> tags
        foreach($spans as $link) {

            $class_name = $link->getAttribute('class');

            switch ($class_name) {
                case 'ml-city':
                    $link->nodeValue = 'Berkeley';
                    break;

                case 'ml-state':
                case 'ml-country':
                    $link->nodeValue = 'California';
                    break;

                case 'ml-armed-forces':
                case 'ml-armed-forces-hq':
                    $link->nodeValue = 'police officers';
                    break;

                case 'ml-enemy-group':
                    $link->nodeValue = 'local organized crime syndicate';
                    break;

                case 'ml-region':
                    $link->nodeValue = 'west coast';
                    break;

                case 'ml-country-noun':
                    $link->nodeValue = 'region';
                    break;

                case 'ml-victim-group':
                    $link->nodeValue = 'Berkeley residents';
                    break;

                default:
                    break;
            }
        }

        // 404 any URLs that do not match the proper pattern
        if (! $post) {
            return Response::view('errors.missing', array(), 404);
        }

        $local_edition_post = $dom->saveHTML();

        return View::make('localedition.show',[
            'post' => $post,
            'local_edition_post' => $local_edition_post,
        ]);
    }
}
