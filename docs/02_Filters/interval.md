## interval

Wrapper around the drupal [format_interval](https://api.drupal.org/api/drupal/includes%21common.inc/function/format_interval/7) function.

Can be used to create a 'xx days ago' for a given date. The NOW date is calculated in the filter, so unlike the drupal version you only need to supply the date you want to use to calculate the interval between now and date.

Usage


``date|interval(format_interval=2,display_ago=true,langcode=UND)``

**granularity**: How many different units to display in the string.

**display_ago**: Adds ``t('!time ago')`` where time is replaced with the calculated difference

**langcode**: Optional language code to translate to a language other than what is used to display the page

Example

```
Node created {{ node.published|interval(2) }}
```

```
User has been a been a member for {{ user.created|interval(4,false) }}
```
