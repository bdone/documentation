## Switch

Instead of nesting a bunch of IF/ELSEIF/ELSE construct sometimes it is nicer on the eye to use a switch case construction.
Unlike the PHP version of the switch method, the twig version is not falltrough by design. Meaning you do not need to explicitaly break from a case construct.

```{% verbatim %}
{% switch bar %}
    {% case 'beer' %}
        Here is a cold beer.
    {% case 'water' %}
        The tap is in the toilet
    {% case 'howdie' fallthrough %}
        Hello stranger,
    {% case 'hello' %}
        What do you want to drink?
    {% default %}
            say what?
{% endswitch %}
{% endverbatim %}
```
If bar contains either 'beer','water' and 'hello' it will output a  a single line, yet if bar contains 'howdie' produces both the outcome of the 'howdie' and 'hello'.
And if bar is empty or none of the other case, it will produce 'say what?'
