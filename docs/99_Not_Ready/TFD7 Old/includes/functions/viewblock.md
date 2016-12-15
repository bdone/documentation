Perhaps the most usable function of them all.  Returns or renders a drupal [block](https://www.drupal.org/documentation/modules/block) directly in your template.
No need to use context, panels or any other system to have display a block based on certain conditions.

```
{{ viewblock(delta,module,return) }}
```

**delta** the delta of the block you want to render. This could be the only parameter needed if the delta of your block is unique in the block table.

**module** the module of the block the given delta belongs to. If your delta is a simple number, you need to specify the module the block belongs to.

**return** Return the block rendered (true) or as a build render array.

```
{% set menuitems = viewblock(2,'menu_block',false) %}
{# the menuitems variable now contains the renderable array of the menu_block
modules block 2 #}
```

```
{# Render the view_block_id #}
{{ viewblock(view_block_id,'views') }}
```
