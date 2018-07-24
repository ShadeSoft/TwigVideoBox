<?php

namespace ShadeSoft\Twig;

class YouTubeExtension extends \Twig_Extension {

    /**
     * @return array
     */
    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('youtube', array($this, 'getYouTubeBox'), array('is_safe' => array('html')))
        );
    }

    /**
     * @param string $id
     * @param int $width
     * @param int $height
     * @return string
     */
    public function getYouTubeBox($id, $width = 560, $height = 315) {
        return '<iframe width="' . $width . '" height="' . $height . '" src="https://www.youtube.com/embed/' . $id . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
    }

    public function getName() {
        return 'shadesoft_twig_youtube_extension';
    }
}