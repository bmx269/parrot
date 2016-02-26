<?php if ($pane_prefix): ?>
  <?php print $pane_prefix; ?>
<?php endif; ?>
<div class="<?php print $extra_css; ?>"<?php echo $extra_id; ?><?php print $extra_attrib; ?>>
  <div class="pane-inner">
    <?php if ($pane_inner_prefix): ?>
      <?php print $pane_inner_prefix; ?>
    <?php endif; ?>

    <?php if (isset($admin_links)): ?>
      <?php print $admin_links; ?>
    <?php endif; ?>

    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <<?php print $title_heading; ?><?php print $title_attributes; ?>>
        <?php print $title; ?>
      </<?php print $title_heading; ?>>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <div class="pane-content">
      <?php print render($content); ?>
    </div>

    <?php if ($pane_inner_suffix): ?>
      <?php print $pane_inner_suffix; ?>
    <?php endif; ?>
  </div>
</div>
<?php if ($pane_suffix): ?>
  <?php print $pane_suffix; ?>
<?php endif; ?>
