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

## Usage

Add \ShadeSoft\Twig\YouTubeExtension to your Twig environment's dependencies, then you can use the filters:

```twig
{{ 'youtube_video_id'|youtube }} {# Renders YouTube with the default dimensions (560x315) #}
{{ 'youtube_video_id'|youtube(640) }} {# Renders YouTube with the width given (640x315) #}
{{ 'youtube_video_id'|youtube(640, 480) }} {# Renders YouTube with both dimensions given (640x480) #}
```
