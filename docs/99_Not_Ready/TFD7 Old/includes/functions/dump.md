A themers best friend in debugging by dumping objects, arrays and strings.
This dumper is aware of the [devel](http://www.drupal.org/projects/devel) module.

Without parameters the dump command uses php var_dump(), if the devel module is enabled dpr() is used.

However you can specify the prefered dumping method as parameter.
```
variable|dump(method)
```

**method** : dpr,dpm,kpr,print_r,var_dump.

Please note that if you specify a devel module dump method,it is asumed that you have enabled the devel module. This is **not** checked!
