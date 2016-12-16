## Creating a twig theme
Creating a Twig theme is actually quite easy, you simply replace the engine = phptemplate with  engine = twig and done.
```
name = Twiggy
description = A Twig theme
screenshot = screenshot.png
engine = twig
core = 7.x
php = 5.4
```
*Please note, due to a issue in the Drupal 7 core, a Twig template can NOT extend a PHP Template. I did Try to patch it, but it got stuck because of the backport policy for core.*

### Configuration
Twig for Drupal is mostly autoconfigured with sensible defaults, however you might want to fixate the location of where the template cache is writen. By default it goes into /files/twig_cache of your site. But you can override this behaviour by setting the file_twigcache_path in your settings.php

``
$conf['file_twigcache_path'] = 'path_to_cache';
``

Just make sure that your webserver has the rights to write files and create directories.

Turn of the automatic rendering of variables. You have to use {{render(var)}} instead.

``
$conf['twig_autorender'] = false;
``

Turn of the automatic html escaping for all the templates

``
$conf['twig_autoescape'] = false;
``

Turn of the auto reloading of templates, this could save some performance on production environments. But you must clean the template cache yourself if you change the templates in your project!

``
$conf['twig_auto_reload'] = false;
``