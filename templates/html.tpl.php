<!doctype html>

<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php print $language->language; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php print $language->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?>> <!--<![endif]-->
<head>
<title><?php print $head_title; ?></title>
<?php print $head; ?>
<?php //TODO: $appletouchicon; ?>
<?php //print $appletouchicon; ?>
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php print $styles; ?>
<!--[if lt IE 9]>
  <script src="<?php print drupal_get_path('theme', 'parrot'); ?>/js/respond.min.js"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script src="<?php print drupal_get_path('theme', 'parrot'); ?>/js/html5.js"></script>
<![endif]-->
<?php //TODO: Re-add selectivizr; ?>
<?php //print $selectivizr; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
<?php print $page_top; //stuff from modules always render first ?>
<?php print $page; // uses the page.tpl ?>
<?php
    print $scripts;
?>
<?php print $page_bottom; //stuff from modules always render last ?>
</body>
</html>

