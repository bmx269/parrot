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

<?php if ($page['user_bar']): ?>
  <div id="user-wrapper" class="fullwidth">
    <div class="container">
      <div role="user">
        <div class="user-region">
          <?php print render($page['user_bar']); ?>
        </div>
      </div>
    </div><!--/.container-->
  </div><!--/#user-wrapper-->
<?php endif; ?>

<?php if($site_name OR $site_slogan OR $logo OR $page['header'] ): ?>
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

        <?php if ($page['header']): ?>
          <div class="header-region">
            <?php print render($page['header']); ?>
          </div>
        <?php endif; ?>

      </header>
    </div><!--/.container-->
  </div><!--/#header-wrapper-->
<?php endif; ?>

<?php if($page['highlighted'] OR $messages ): ?>
  <div id="highlighted-wrapper" class="fullwidth">
    <div class="container">
      <?php print render($page['highlighted']); ?>
      <div class="drupal-messages">
        <?php print $messages; ?>
      </div>
    </div><!--/.container-->
  </div><!--/#highlighted-wrapper-->
<?php endif; ?>

<div id="panel-wrapper" class="fullwidth">
  <div role="main" id="main-content">

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>

    <?php print render($page['content_pre']); ?>

    <?php print render($page['content']); ?>

    <?php print render($page['content_post']); ?>

  </div><!--/main-->

  <?php if ($page['sidebar_first']): ?>
    <div class="sidebar-first">
    <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <div class="sidebar-second">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>

</div><!--/#content-wrapper-->

<?php if ($page['footer']): ?>
  <div id="footer-wrapper" class="fullwidth">
    <div class="container">
      <footer role="contentinfo" class="row">
        <?php print render($page['footer']); ?>
      </footer>
    </div><!--/.container-->
  </div><!--/#footer-wrapper-->
<?php endif; ?>
