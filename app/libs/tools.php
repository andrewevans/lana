<?php

class Tools {

    // My common functions
    public static function somethingOrOther()
    {
        return (mt_rand(1,2) == 1) ? 'something' : 'other';
    }

    /**
     * @param WP_Post $post
     * @return bool|mixed - permalink path of a WP post (ex: /2010/06/05/my-title/)
     */
    public static function permalink_path(WP_Post $post)
    {
        return str_replace(home_url(), '', rtrim(get_permalink ($post->ID), '/'));
    }

    public static function get_post_by_slug($wp_url_slug)
    {
        $args = array(
            'name'         => $wp_url_slug,
            'post_type'        => 'post',
            'orderby'          => 'post_date',
            'order'            => 'DESC',
            'post_status'      => 'publish',
            'suppress_filters' => true );

        return current( get_posts( $args ) );
    }
}