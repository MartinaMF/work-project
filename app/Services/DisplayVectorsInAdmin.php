<?php

namespace App\Services;

class DisplayVectorsInAdmin
{
    /**
     * Enable media library SVG display.
     *
     * @since 0.1.0
     */
    public static function enable()
    {
        if (!has_action('admin_enqueue_scripts', [__CLASS__, 'add_administation_styles'])) {
            add_action('admin_enqueue_scripts', [__CLASS__, 'add_administration_styles']);
            add_filter('wp_prepare_attachment_for_js', [__CLASS__, 'adjust_response_for_svg'], 10, 3);
        }
    }

    /**
     * Add styles necessary for media library display.
     *
     * @since 0.1.0
     */
    public static function add_administration_styles()
    {
        static::add_media_listing_style();
    }

    /**
     * Add dimensions and orientation for SVG to attachment ajax data.
     *
     * @since 0.1.0
     *
     * @param array   $response
     * @param WP_Post $attachment
     * @param array   $meta
     *
     * @return array
     */
    public static function adjust_response_for_svg($response, $attachment, $meta)
    {
        if ('image/svg+xml' != $response['mime'] or !empty($response['sizes'])) {
            return $response;
        }
        $dimensions = static::get_dimensions(get_attached_file($attachment->ID));
        $response['sizes'] = [
            'full' => [
                'url'         => $response['url'],
                'width'       => $dimensions->width,
                'height'      => $dimensions->height,
                'orientation' => $dimensions->width > $dimensions->height ? 'landscape' : 'portrait',
            ],
        ];

        return $response;
    }

    /**
     * @since 0.1.0
     */
    protected static function add_media_listing_style()
    {
        wp_add_inline_style('wp-admin', ".attachment img[src$='.svg'] { max-width: 75% !important; max-height: 75% !important; }");
    }

    /**
     * Parse width and height from an SVG file.
     *
     * @since 0.1.0
     *
     * @param string $svg_path
     *
     * @return object
     */
    protected static function get_dimensions($svg_path)
    {
        $width = $height = 0;
        $svg = simplexml_load_file($svg_path, 'SimpleXMLElement', LIBXML_NOWARNING);
        if ($svg) {
            $attributes = $svg->attributes();
            $width = (string)$attributes->width;
            $height = (string)$attributes->height;
        }
        return (object)compact('width', 'height');
    }
}

