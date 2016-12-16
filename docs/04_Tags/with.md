## With

Scope shift a bunch of variables into a context. Mostly for readability in your template code, but can be used to grab the render array from a field mixed with the raw value into a single array.

```
{% verbatim %}
{% with expr [as localName] [, expr2 [as localName2], [....]]  {sandboxed|merged} %}
 {# do something with the scoped variables #}
{% endwith %}
{% endverbatim %}
```

```
'foo' => array(
    'name' => 'Foo',
    'id'   => 1
    ),
'bar' => array(
    'name' => 'Bar',
    'id'   => 2
    )
)

{% verbatim %}
{% with foo %}
    {{ id }}: {{ name }} {# would output: "1: Foo" #}
{% endwith %}

{% with foo as baz %}
    {{ baz.id }}: {{ baz.name }} {# would output: "1: Foo" #}
{% endwith %}

{% with foo as bar, bar as foo %}
    {{ bar.id }}: {{ bar.name }} {# would output: "1: Foo" #}
    {{ foo.id }}: {{ foo.name }} {# would output: "2: Bar" #}
{% endwith %}
{% endverbatim %}
```