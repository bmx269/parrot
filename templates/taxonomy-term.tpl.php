<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- taxonomy term.tpl.php -->
<?php } ?>

<div id="taxonomy-term-<?php print $term->tid; ?>" class="<?php print $classes; ?>">

  <?php if (!$page): ?>
    <h2><a href="<?php print $term_url; ?>"><?php print $term_name; ?></a></h2>
  <?php endif; ?>

  <div class="content">
    <?php print render($content); ?>
  </div>

</div>

<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- taxonomy term.tpl.php -->
<?php } ?>
