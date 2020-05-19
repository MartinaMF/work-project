<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Post extends Controller
{
    public static $postType = 'post';
    public static $postTypeCategory = 'category';

    /**
     * Get all last posts
     */
    public static function getPaginated($pagNumber)
    {
        $args = [
            'post_type'      => self::$postType,
            'posts_per_page' => 6,
            'paged'          => $pagNumber,
        ];

        $query = new \WP_Query($args);
        $query->posts = self::prepareListing($query->posts);

        return $query;
    }

    /**
     * Get all latest posts
     */
    public static function getLatest($category = null)
    {
        $args = [
            'post_type'      => self::$postType,
            'posts_per_page' => 3,
        ];

        if ($category) {
            $args['category'] = $category;
        }

        return self::prepareListing(get_posts($args));
    }

    /**
     * Prepare listing of posts for view
     */
    public static function prepareListing($list = [])
    {
        $return = [];

        foreach ($list as $num => $elem) {
            $imageId = get_field('listing_image', $elem->ID) ?: get_post_thumbnail_id($elem->ID);
            $return[$num] = (object)[
                'id'      => $elem->ID,
                'name'    => $elem->post_title,
                'excerpt' => get_the_excerpt($elem),
                'date'    => get_the_date('d-M', $elem->ID),
                'image'   => wp_get_attachment_image_src($imageId, 'news-box')[0],
                'url'     => get_permalink($elem->ID),
            ];
        }

        return $return;
    }
}
