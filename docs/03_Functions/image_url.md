## image url

A function version of the image_url filter.

Formats an image public URL with the given image cache preset.
Wraps around the drupal function [image_style_url](https://api.drupal.org/api/drupal/modules!image!image.module/function/image_style_url/7)

Example

```
<img src"{{image_url(node.field_image,'mypreset) }}">
```
