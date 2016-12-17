## t

Wraps the drupal [t](https://api.drupal.org/api/drupal/includes%21bootstrap.inc/function/t/7) method.

```
<a href="\">{{ 'home'|t }}</a>
```

Or use the [Twig filter](http://twig.sensiolabs.org/doc/tags/filter.html) tag to loop a larger block of text through the t() method.

```
{% filter t %}
    This section is being translated using the t() function
{% endfilter %}
```
