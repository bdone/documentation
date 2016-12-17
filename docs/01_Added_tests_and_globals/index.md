## Extra tests 

  Besides the default [Twig tests](http://twig.sensiolabs.org/doc/tests/index.html), Twig for Drupal adds the following extra tests to Twig.


#### property

Test if a # property exist in first level of the given array. 

``` {% if content.field_name has property ('render') %}....{% endif %} ```

#### array

Test if an variable is an array.

#### scalar

Test if the variable is scaler.

#### number

Test if the variable is a number

#### string

Test if the variable is a string

## Globals

'base_path' is set the outcome of the Drupal ``base_path()`` method,


## Operators

For developers who like to write less verbose if constructions the following PHP shorthand versions are mapped.

`` ! `` is mapped to Unary_not
`` || `` is mapped to Binary_Or
`` && `` is mapped to Binary_And 
