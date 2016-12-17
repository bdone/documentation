## Extending Twig for Drupal 7

TFD Implements 3 hooks for developers to create their own [filters](http://twig.sensiolabs.org/doc/advanced.html#filters), [functions](http://twig.sensiolabs.org/doc/advanced.html#functions) or even a specific [test](http://twig.sensiolabs.org/doc/advanced.html#tests).

The default Twig for Drupal filters are implemented in `./TFD/Extension.php` take a peek in there to understand most things going on under the hood.


### Filters
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

### Functions

To register a new filter you should implement `hook_twig_function()` and return an indexed array with unique keys and new Twig_SimpleFunction as value.

```
function my_module_twig_function(){
    $functions = [];
    $functions['coolfunction'] = new Twig_SimpleFunction('coolfunction','my_module_coolfunction');
    return $functions;
}

function my_module_coolfunction($param_1,$param_2...){
    // do what you need to do, and return something.
}
```

You do not need to explicitly define the parameters of the callable, every para
meter you enter in the template will be passed to the callable.

### Tests

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

### Tags and Globals (or adding your own Extensions)

Adding extra tags is not a very common task, and most developers will actually never need that. So for that reason there is no Drupal hook for adding extra tags. However if you want to alter or add an extra extension from your module you can alter the entire TFD_Environment by implementing ``hook_twig_init()``

Adding your own extension to the booted Twig for Drupal enviroment.

```
function module_twig_init(TFD_Environment $twig){
 $twig->addExtension(new Your_Extension());   
}
```
See [Twig Documentation](http://twig.sensiolabs.org/doc/advanced.html#creating-an-extension) for how to create your own extensions.

A more common task from your module could be adding a few extra global variables to all templates. You can use the same hook_twig_init for that.

```
function module_twig_init(TFD_Environment $twig){
 $twig->addGlobal('name','value');
}
```
See [Twig Documentation](http://twig.sensiolabs.org/doc/advanced.html#globals) on globals.

