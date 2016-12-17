Formats a date string or unix timestamp into a date. Wraps the Drupal [format_date](https://api.drupal.org/api/drupal/includes!common.inc/function/format_date/7.x).


usage: `` format_date('<date format string>','<optional language code>') ``


```
	{{ date|format_date('d-m-y') }}

	{{ date|format_date('d-m-y','nl') }}
```