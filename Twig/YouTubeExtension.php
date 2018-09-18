<?php

namespace ShadeSoft\Twig;

class YouTubeExtension extends \Twig_Extension {

    /**
     * @return array
     */
    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('youtube', array($this, 'getBox'), array('is_safe' => array('html'))),
            new \Twig_SimpleFilter('youtubeBoxes', array($this, 'getBoxes'))
        );
    }

    /**
     * @param string $id
     * @param int|string $width
     * @param int|string $height
     * @return string
     */
    public function getBox($id, $width = 560, $height = 315) {
        return '<iframe width="' . $width . '" height="' . $height . '" src="https://www.youtube.com/embed/' . $id . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
    }

    /**
     * @param string $content
     * @param int|string $width
     * @param int|string $height
     * @return string
     */
    public function getBoxes($content, $width = 560, $height = 315) {
        return preg_replace(
            '#([^\"\'])http[s]?://([w]{3}\.)?youtu[\.]?be(\.com)?/(watch\?v=)?([_a-zA-Z0-9-]+)#',
            '${1}<iframe width="' . $width . '" height="' . $height . '" src="https://www.youtube.com/embed/${5}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
            $content
        );
    }

    public function getName() {
        return 'shadesoft_twig_youtube_extension';
    }
}