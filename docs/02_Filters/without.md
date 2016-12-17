Just like in Drupal 8, you can use the without filter to render a renderable array without certain fields.


```
{{ content|without(['links','language']) }}
```
