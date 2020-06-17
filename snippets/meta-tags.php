<?= $page->pTitle() ? Html::tag('title', [$page->pTitle()]).PHP_EOL : false ?>
<?= $page->pDescription() ? Html::tag('meta', null, ["name" => "description", "content" => $page->metaTagsDescription()]).PHP_EOL : false ?>
<?= $page->pRobots() ? Html::tag('meta', null, ["name" => "robots", "content" => $page->pRobots()]).PHP_EOL : false ?>

<?= $page->pOgTitle() ? Html::tag('meta', null, ['property' => 'og:title', 'content' => $page->pOgTitle()]).PHP_EOL : false ?>
<?= $page->pOgType() ? Html::tag('meta', null, ['property' => 'og:type', 'content' => $page->pOgType()]).PHP_EOL : false ?>
<?= $site->sTitle() ? Html::tag('meta', null, ['property' => 'og:site_name', 'content' => $site->sTitle()]).PHP_EOL : false ?>
<?= Html::tag('meta', null, ['property' => 'og:url', 'content' => $page->url()]).PHP_EOL ?>
<?= $page->pOgImage() ? Html::tag('meta', null, ['property' => 'og:image', 'content' => $page->pOgImage()]).PHP_EOL : false ?>
<?= $page->pOgDescription() ? Html::tag('meta', null, ['property' => 'og:description', 'content' => $page->pOgDescription()]).PHP_EOL : false ?>
<?= $page->sOgLocale() ? Html::tag('meta', null, ['property' => 'og:locale', 'content' => $page->sOgLocale()]).PHP_EOL : false ?>


<?= Html::tag('link', null, ["rel" => "canonical", "href" => $page->url()]).PHP_EOL ?>

<?= $site->sIcon('180') ? Html::tag('link', null, ["rel" => "apple-touch-icon", "sizes" => "180x180", "href" => $site->sIcon('180')]).PHP_EOL : false ?>
<?= $site->sIcon('32') ? Html::tag('link', null, ["rel" => "icon", "type" => "image/png", "sizes" => "32x32", "href" => $site->sIcon('32')]).PHP_EOL : false ?>
<?= $site->sIcon('16') ? Html::tag('link', null, ["rel" => "icon", "type" => "image/png", "sizes" => "16x16", "href" => $site->sIcon('16')]).PHP_EOL : false ?>

<?= $site->sTitle() ? Html::tag('meta', null, ['name' => 'apple-mobile-web-app-title', 'content' => $site->sTitle()]).PHP_EOL : false ?>
<?= Html::tag('meta', null, ['name' => 'apple-mobile-web-app-capable', 'content' => 'yes']).PHP_EOL ?>
<?= Html::tag('meta', null, ['name' => 'apple-mobile-web-app-status-bar-style', 'content' => 'black']).PHP_EOL ?>
