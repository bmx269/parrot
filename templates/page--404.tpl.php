<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--node.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<header role="banner">
  <div class="siteinfo">
    <?php if ($logo): ?>
      <figure>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      </figure>
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
</header>


<div class="page">
  <div role="main" id="main-content">

  <article>


   <h1>Not Found</h1>

    <h2>
      These are not the nodes you are looking for
    </h2>

    <p>Sorry, but the page you were trying to view does not exist.</p>
    <p>It looks like this was the result of either:</p>
    <ul>
      <li>a mistyped address</li>
      <li>an out-of-date link</li>
    </ul>

    <a href="/search/">search ?</a>

    <script>
      var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
    </script>
    <script src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>

  </article>

  </div>
</div>

<footer role="contentinfo">

</footer>
