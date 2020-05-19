<?php

namespace App\Controllers;

use Sober\Controller\Controller;
//
use App\Services\MobileDetect;

class App extends Controller
{
    private static $detect;
    private static $usedNames;

    public function __construct()
    {
        self::$detect = new mobileDetect;
        self::$usedNames = [];
    }

    public static function title()
    {
        if (get_post_type() === 'reseller' && get_field('hero_title', get_the_ID()))
            return get_field('hero_title', get_the_ID());

        if (get_option('page_for_posts') && (is_home() || is_single())) {
            if (get_field('special_page_title', get_option('page_for_posts')))
                return get_field('special_page_title', get_option('page_for_posts'));

            return get_the_title(get_option('page_for_posts'));
        }

        if (get_field('special_page_title'))
            return get_field('special_page_title');

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf(__('Search Results for: %s', 'sage'), get_search_query());
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    public static function thumbnail()
    {
        $id = get_post_thumbnail_id();

        if (get_option('page_for_posts') && (is_search() || is_home() || is_single() || is_category() || is_author()))
            $id = get_post_thumbnail_id(get_option('page_for_posts'));

        if (get_post_type() === 'reseller' && get_field('hero_image', get_the_ID()))
            $id = get_field('hero_image', get_the_ID());

        return wp_get_attachment_image_url($id, 'hero-' . (\App\Controllers\App::isMobile() ? 'mobile' : 'desktop'));
    }
    public static function is_child($slug) { 
        $page = get_page_by_path($slug);
        if($page) {
            $page_id = $page->ID;
            global $post; 
            if( is_page() && ($post->post_parent==$page_id) ) {
                       return true;
            } else { 
                       return false; 
            }
        }
    }
    /**
     * Get share links
     */
    public static function getSocialShares($detailsLink = false, $detailsTitle = false)
    {
        if (!$detailsLink) {
            $detailsLink = get_permalink();
        }

        if (!$detailsTitle) {
            $detailsTitle = get_the_title();
        }

        return [
            'facebook' => [
                'url'    => sprintf('https://www.facebook.com/sharer/sharer.php?u=%s', urlencode($detailsLink)),
                'target' => '_blank',
            ],
            'linkedin' => [
                'url'    => sprintf('https://www.linkedin.com/shareArticle?mini=true&url=%s&title=%s', urlencode($detailsLink), $detailsTitle),
                'target' => '_blank',
            ],
            'twitter'  => [
                'url'    => sprintf('https://twitter.com/home?status=%s', urlencode($detailsLink)),
                'target' => '_blank',
            ],
        ];
    }

    /**
     * Detect mobile environment
     */
    public static function isMobile()
    {
        return self::$detect->isMobile();
    }

    /**
     * Detect tablet environment
     */
    public static function isTablet()
    {
        return self::$detect->isTablet();
    }

    /**
     * Detect tablet phone
     */
    public static function isPhone()
    {
        return self::isMobile() && !self::isTablet();
    }

    /**
     * Prepare unique name for sections
     */
    public static function getUniqueName($name, $num = 0)
    {
        $name = str_replace(' ', '-',
                preg_replace("/[^a-z\s+-]/", '',
                    strtolower(
                        strip_tags(
                            $name
                        )
                    )
                )
            ) . ($num === 1 ? '-' . $num : ($num ?: ''));

        if (in_array($name, self::$usedNames))
            return self::getUniqueName($name, $num + 1);

        array_push(self::$usedNames, $name);
        return $name;
    }
}
