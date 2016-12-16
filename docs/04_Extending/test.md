## Tests

To register a new test you should implement `hook_twig_test` and return an indexed array with unique keys and new Twig_SimpleTest as value.

By contract a Twig_SimpleTest should return TRUE or FALSE.

```
function my_module_twig_test(){
    $test = [];
    $test['is_red'] = new Twig_SimpleTest('is_red','my_module_is_red_test');
    return $test;
}

function my_module_is_red_test($value){
    $value = str_to_lower($value;)
    return ($value ==== "ff0000" or $value === 'red');
}
```