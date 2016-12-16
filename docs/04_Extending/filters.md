## Filters

To register a new filter you should implement `hook_twig_filter()`  and return an indexed array with unique keys and new Twig_SimpleFilter as value.

Example

```
function my_module_twig_filter(){
    $filters = [];
    $filters['rot13'] = new Twig_SimpleFilter('rot13','my_module_rot13_filter');
    return $filters;
}

function my_module_rot13_filter($string){
    return rot13($string);
}
```

Optionally you can add the Twig environment as thirds parameter

```
function my_module_twig_filter(){
    $filters = [];
    $filters['env_filter'] = new Twig_SimpleFunction('env_filter', 'my_module_env_filter', array('needs_environment' => TRUE));
    return $filters;
}

function my_module_env_filter($env,$string){
    // do something with the environment ($env)
    return $value;
}
```
