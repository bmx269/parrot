<div <?php print (!empty($pane->css['css_id'])) ? printf('id="%s"', $pane->css['css_id']) : ''; ?> class="panel-pane <?php echo $settings['grid_width'] . ' '.  $settings['left_margin'] . ' '. $settings['right_margin'] . ' '.  $settings['custom_classes'] . ' '. $settings['float'];?> column" <?php
echo $custom_attrib;?>>
  <div class="pane-content">
    <?php print render($content->content); ?>
  </div>
</div>
