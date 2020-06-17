<?php

Kirby::plugin('wearecandyblue/meta-tags', [
  'snippets' => [
    'meta-tags' => __DIR__ . '/snippets/meta-tags.php'
  ],
  'blueprints' => [
    'fields/metaTagsPage' => __DIR__ . '/blueprints/fields/metaTagsPage.yml',
    'fields/metaTagsSite' => __DIR__ . '/blueprints/fields/metaTagsSite.yml'
  ],
  'pageMethods' => [
    'pTitle' => function () {
      $title = '';
      $separator = ' | ';
      if ($this->metaTagsTitle()->isNotEmpty()) {
        $title = strip_tags($this->metaTagsTitle()->kirbytext());
      } else {
        if ($this->isHomePage()) {
          $title = strip_tags(site()->title()->kirbytext());
        } else {
          $title .= strip_tags($this->title()->kirbytext()) . $separator;
          foreach ($this->parents() as $p) {
            $title .= strip_tags($p->title()->kirbytext()) . $separator;
          }
          $title .= strip_tags(site()->title()->kirbytext());
        }
      }
      return $title;
    },
    'pDescription' => function () {
      if ($this->metaTagsDescription()->isNotEmpty()) {
        $description = strip_tags($this->metaTagsDescription()->kirbytext());
        return $description;
      }
    },
    'pRobots' => function () {
      $robotsValue = $this->metaTagsRobots()->isNotEmpty() ? $this->metaTagsRobots() : 'noindex-nofollow';
      $robotsArray = preg_split('/-/', $robotsValue);
      $robotsString = implode(', ', $robotsArray);
      return $robotsString;
    },
    'pOgTitle' => function () {
      if ($this->metaTagsOgTitle()->isNotEmpty()) {
        $title = strip_tags($this->metaTagsOgTitle()->kirbytext());
        return $title;
      }
    },
    'pOgDescription' => function () {
      if ($this->metaTagsOgDescription()->isNotEmpty()) {
        $description = strip_tags($this->metaTagsOgDescription());
        return $description;
      }
    },
    'pOgType' => function () {
      if ($this->metaTagsOgType()->isNotEmpty()) {
        $type = $this->metaTagsOgType();
      } else {
        if ($this->isHomePage()) {
          $type = 'website';
        } else {
          $type = 'article';
        }
      }
      return $type;
    },
    'pOgImage' => function () {
      if ($this->metaTagsOgImage()->isNotEmpty()) {
        $image = $this->metaTagsOgImage()->toFile()->crop(1200, 630, 100)->url();
        return $image;
      }
    },
  ],
  'siteMethods' => [
    'sTitle' => function () {
      if ($this->title()->isNotEmpty()) {
        $title = strip_tags($this->title()->kirbytext());
        return $title;
      }
    },
    'sOgLocale' => function () {
      if (is_bool(kirby()->multilang())) {
        $locale = kirby()->language()->locale();
        return $locale;
      }
    },
    'sIcon' => function ($size) {
      if ($this->metaTagsFavicon()->isNotEmpty()) {
        $icon = $this->metaTagsFavicon()->toFile()->crop($size, $size, 100)->url();
        return $icon;
      }
    },
  ]
]);
