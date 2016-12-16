## Functions

To register a new filter you should implement `hook_twig_function()` and return an indexed array with unique keys and new Twig_SimpleFunction as value.

```
function my_module_twig_function(){
    $functions = [];
    $functions['coolfunction'] = new Twig_SimpleFunction('coolfunction','my_module_coolfunction');
    return $filters;
}

function my_module_coolfunction($param_1,$param_2...){
    // do what you need to do, and return something.
}
```

You do not need to explicitly define the parameters of the callable, every para
meter you enter in the template will be passed to the callable.