Straight mapped to the drupal [format_size](https://api.drupal.org/api/drupal/includes%21common.inc/function/format_size/7) function.

Optional parameter is a different language code then the current node/users language.

```
This PDF document is {{ node.field_fileattachment[0]['size']|size }}
```

```
This PDF document is {{ node.field_fileattachment[0]['size']|size('en') }}
```
