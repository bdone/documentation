Checks if the given value is a array, then renders it. If the given value is a string, the string is returned. If you give a non existing value, nothing is returned instead of throwing a error.
The array is rendered using the drupal [render](https://api.drupal.org/api/drupal/includes%21common.inc/function/render/7) function.

```
render(node.field_my_field)
```

Please note, that under normal circumstances you should have no need to call the render function explicit, because all the variables that you print in a template are looped trough the render method.
