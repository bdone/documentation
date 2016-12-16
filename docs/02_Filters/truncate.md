## truncate

Word sensitive UTF-8 enabled text truncating.
``
{{ node.body|truncate(500) }}
``

Usage

``text|truncate(length=300,elipse=true,words=true)``


**length**: How many letters  to keep

**elipse**: Adds ``t('...')`` after the truncated text.

**words**: keep words, don't cut them of. This can make the output a few letters longer!
