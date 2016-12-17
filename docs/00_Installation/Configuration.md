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
*Please note, due to a [issue](https://www.drupal.org/node/1545964) in the Drupal 7 core, a Twig template currently can NOT extend a PHP Template.*


## Configuration settings

Twig for Drupal is mostly autoconfigured with sensible defaults, but you can alter the behaviour of Twig for Drupal per installation with setting variables in the settings.php of your site.


#### Autorendering

Twig for Drupal handles render arrays out of the box, so normally you do not need to call the render() function like you do in PHPTemplate based themes. If you want to disabled this behaviour you can turn it off by setting twig_autorender to false.

Turn of the automatic rendering of variables. You have to use {{render(var)}} instead.

``
$conf['twig_autorender'] = false;
``

### Change the location of the template cache
By default it goes into /files/twig_cache of your site. If you have a multisite with a shared theme it can save diskspace and have a more optimized usage of the APC/Opcache by setting the file_twigcache_path to a shared folder between those sites.

``
$conf['file_twigcache_path'] = 'path_to_cache';
``
Just make sure that your webserver has the rights to write files and create directoriesxwx.


#### Disable escaping the output
Like the Drupal 8 version, Twig for Drupal also escapes the output by default. Unlike Drupal 8 you can turn that off. 
Turn of the automatic html escaping for all the templates

``
$conf['twig_autoescape'] = false;
``

#### Disable check for changes in templates.

Turn of the auto reloading of templates, this could save some performance on production environments. But you must clean the template cache yourself if you change the templates in your project!

``
$conf['twig_auto_reload'] = false;
``

#### Debugging

Twig for Drupal is aware of the ``theme_debug`` system of the Drupal theme system.

``$conf['theme_debug'] = true;``