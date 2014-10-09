<!-- panels-pane page title-->
<?php if ($admin_links): ?>
  <div class="<?php print $classes; ?>" <?php print $id; ?>>
  <?php print $admin_links; ?>
<?php endif; ?>

<?php if ($title): ?>
  <h1><?php print $title; ?></h1>
<?php endif; ?>

<?php if ($admin_links): ?>
</div>
<?php endif; ?>
