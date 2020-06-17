# kirby-v3-head

## Installation
```$ git submodule add https://github.com/wearecandyblue/kirby3-meta-tags.git site/plugins/meta-tags ```

## Updating
```
$ cd site/plugins/head
$ git checkout master
$ git pull
```


## Setup
Place before the closing head-tag ```$ <?php snippet('meta-tags') ?>```

site.yml
```
metaTagsSite:
  type: fields
  fields:
    icons: fields/metaTagsSite
```

default.yml

```
metaTagsPage:
  type: fields
  fields:
    icons: fields/metaTagsPage
```
