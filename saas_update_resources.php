<?php

require_once 'vendor/autoload.php';

use LM\WebFramework\Routing\UriBuilder;

version_resources('style.min.css');
version_resources('amp-style.min.css');

/**
 * @todo duplicate
 */
function getVersionedUri(string $first_part, string $extension): string
{
    $uri_builder = new UriBuilder('uri_builder_config.json');
    return $uri_builder->getUri($first_part.'.'.filemtime(__DIR__.'/'.$first_part.$extension).$extension);
}

/**
 * @todo move in a class (UriBuilder?)
 */
function version_resources(string $stylesheet_filename): void
{
    $style = file_get_contents($stylesheet_filename);

    $match_categories = array();

    $preg_match_return_code = preg_match_all('/img\/[a-z]+\.[a-z]+/', $style, $match_categories);

    $image_matches = $match_categories[0];

    if (false === $preg_match_return_code) {
        throw new \Exception();
    }

    $updated_style = $style;
    foreach ($image_matches as $current_image) {
        $img_parts = explode('.', $current_image);
        $img_parts_length = count($img_parts);

        $filename = $img_parts[0];
        for ($i = 1; $i <  - 1; $i++) {
            $filename .= $img_parts[$i];
        }
        
        $updated_style = str_replace($current_image, getVersionedUri($filename, '.'.$img_parts[$img_parts_length - 1]), $updated_style);
    }

    $fpc_return_code = file_put_contents($stylesheet_filename, $updated_style);

    if (false === $fpc_return_code) {
        throw new \Exception();
    }
}