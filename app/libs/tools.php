<?php

class Tools {

    // My common functions
    public static function somethingOrOther()
    {
        return (mt_rand(1,2) == 1) ? 'something' : 'other';
    }

    /**
     * @param $permalink_path - Permalink without the WP Site Address (ex: '2010/06/05/my-house')
     * @return array|null|WP_Post
     */
    public static function get_post_from_permalink_path($permalink_path)
    {
        return get_post(url_to_postid(home_url() . '/' . $permalink_path));
    }

    public static function get_permalink_path_from_post(WP_Post $post)
    {
        return str_replace(home_url(), '', get_permalink($post->ID));
    }
}