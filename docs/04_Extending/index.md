## Extending Twig for Drupal 7

TFD Implements 3 hooks for developers to create their own [filters](http://twig.sensiolabs.org/doc/advanced.html#filters), [functions](http://twig.sensiolabs.org/doc/advanced.html#functions) or even a specific [test](http://twig.sensiolabs.org/doc/advanced.html#tests).

The default Twig for Drupal filters are implemented in `sites/all/libraries/TFD/TFD/Extension.php` take a peek in there to understand most things going on under the hood.