A more Drupal way of getting the children of an element using the [element_children](https://api.drupal.org/api/drupal/includes%21common.inc/function/element_children/7) method instead of simply [stripping the hashes](http://tfd7.rocks/filters#striphashes)

In the php template you would do something like this.
```
<ul>
    <?php foreach(element_children($content['field_myfield']) as $key): ?>
    <li><?php print render($content['field_myfield'][$key]; ?></li>
    <?php endforeach; ?>
</ul>
```

You can loop on a render array with native twig, as it will render properties.
```
<ul>
    {% for element in children(content.field_myfield) %}
        <li>{{ element }}</li>
    {% endfor %}
</ul>
```
