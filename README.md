# TwigVideoBox

> Twig extensions for making video embedding easy.

Currently supports YouTube. Other video sharing sites will be available later.

## Installation

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require shadesoft/twig-video-box
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Including into Symfony container

```yaml
# app/config/services.yml for Symfony 2-3 and config/services.yaml for Symfony 4

shadesoft.twig.video_box.youtube_extension:
    class: ShadeSoft\Twig\YouTubeExtension
    tags:
        - { name: twig.extension }
```

### Including into Slim Framework's Twig view renderer

```php
// src/dependencies.php

// ...
$container['view'] = function($c) {
    //...
    $view->addExtension(new ShadeSoft\Twig\YouTubeExtension);
    //...
}
```

## Usage

Add \ShadeSoft\Twig\YouTubeExtension to your Twig environment's dependencies (or include into one of the frameworks above), then you can use the filters:

```twig
{{ 'youtube_video_id'|youtube }} {# Renders YouTube with the default dimensions (560x315) #}
{{ 'youtube_video_id'|youtube(640) }} {# Renders YouTube with the width given (640x315) #}
{{ 'youtube_video_id'|youtube(640, 480) }} {# Renders YouTube with both dimensions given (640x480) #}

{% set content = '<div><p>Youtube video:</p>http://youtu.be/video_id</div>' %}
{{ content|youtubeBoxes|raw }} {# Renders the div with the p and the embedded video inside content #}
{# With this you can render multiple video boxes in a html content, you can simply use any valid YouTube url to the video #}
{# The width and height parameters can be used here, too #}
```
