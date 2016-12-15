A convient function if you are handling form errors. Under the hood the drupal [form_get_errors](https://api.drupal.org/api/drupal/includes%21form.inc/function/form_get_errors/7) is called.
The result is then mapped upon a new array index by the form field name, with the error(s) as value.
