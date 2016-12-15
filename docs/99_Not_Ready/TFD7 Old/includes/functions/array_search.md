A straight mapper to the php [array_search](http://php.net/manual/en/function.array-search.php) function.

```
{% if arrray_search(node.fields|keys,'field_something') %}
    {# do something with node.fields.field_something #}
{% endif %}
```
