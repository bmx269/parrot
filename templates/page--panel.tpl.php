<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--page.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<div id="header-wrapper" class="fullwidth">
  <div class="container">
    <header role="banner" class="row">
      <div class="siteinfo">
        <?php if ($logo): ?>
        <div class="logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <img src="<?php print $logo; ?>" class="logo-img" alt="<?php print t('Home'); ?>" />
          </a>
        </div>
        <?php endif; ?>

        <?php if($site_name OR $site_slogan ): ?>
        <hgroup>
          <?php if($site_name): ?>
            <h1><?php print $site_name; ?></h1>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <h2><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        </hgroup>
        <?php endif; ?>
      </div>


        <div class="header-region">
          <?php print render($page['header']); ?>
        </div>


    </header>
  </div><!--/.container-->
</div><!--/#header-wrapper-->

<div id="panel-wrapper" class="fullwidth">

  <div role="main" id="#main-content">

    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print $breadcrumb; ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>

    <?php if($page['highlighted'] OR $messages){ ?>
      <div class="drupal-messages">
        <?php print render($page['highlighted']); ?>
        <?php print $messages; ?>
      </div>
    <?php } ?>


    <?php print render($page['content_pre']); ?>

    <?php print render($page['content']); ?>

    <?php print render($page['content_post']); ?>

  </div><!--/main-->
</div><!--/#content-wrapper-->

<div id="footer-wrapper" class="fullwidth">
  <div class="container">
    <footer role="contentinfo" class="row">
      <?php print render($page['footer']); ?>
    </footer>
  </div><!--/.container-->
</div><!--/#footer-wrapper-->
