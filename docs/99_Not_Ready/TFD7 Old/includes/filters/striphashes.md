Strips a the **first level** of drupal render array from the hashed values. Mostly useful for iterating trough field output and still being able to use the ``loop.index0``, ``loop.first`` etc options in twig loops.

```
{% for id, item in content.field_link_list|striphashes %}
    {{ item }}
    {% if loop.last %}
        <hr> {% endif %}
{% endfor %}
```
