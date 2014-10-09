<?php
// kpr($variables);
// kpr($variables['template_files']);
//  http://api.drupal.org/api/drupal/modules--block--block.tpl.php/7
?>
<!-- block -->
<div <?php print $classes .  $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <div <?php print $content_attributes; ?>>

  <?php print $content ?>

  </div>
</div>
<!-- /block -->
