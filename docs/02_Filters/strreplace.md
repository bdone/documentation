## strreplace

A smarter wrapper around the php str_ireplace function. If the given subject is a drupal render array, the content is rendered first, then the case insentive search and replace is done on the output string.

```
{{ haystack|strreplace("needle", "replacement") }}
```
