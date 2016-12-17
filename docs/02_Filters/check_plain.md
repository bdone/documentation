## check_plain

A wrapper around the [checkplain](https://api.drupal.org/api/drupal/includes%21bootstrap.inc/function/check_plain/7) method. 

Under most circumstances this filter should not be needed, all output is escaped by default. If escaping is turned off, you can use the checkplain filter to return a HTML safe version of the given string. 
Check out the [twig Autoescape](http://twig.sensiolabs.org/doc/tags/autoescape.html) tag, because that tag can handle more scenarios.

```
 {{ '<h3>Title</h3>'|checkplain }}