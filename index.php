<?php

Kirby::plugin('candyblue/kirby-v3-head', [
  'snippets' => [
    'head' => __DIR__ . '/snippets/head.php',
    'head/seo' => __DIR__ . '/snippets/head/seo.php',
    'head/og' => __DIR__ . '/snippets/head/og.php',
    'head/twitter' => __DIR__ . '/snippets/head/twitter.php',
    'head/apple' => __DIR__ . '/snippets/head/apple.php',
    'head/google' => __DIR__ . '/snippets/head/google.php',
    'head/json-ld' => __DIR__ . '/snippets/head/json-ld.php',
    'head/preconnect' => __DIR__ . '/snippets/head/preconnect.php'
  ],
  'blueprints' => [
    'fields/head' => __DIR__ . '/blueprints/fields/head.yml'
  ]
]);
