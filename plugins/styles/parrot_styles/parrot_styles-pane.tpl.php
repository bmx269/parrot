<div <?php print (!empty($pane->css['css_id'])) ? printf('id="%s"', $pane->css['css_id']) : ''; ?> <?php print (!empty($pane->css['css_class'])) ? printf('class="panel-pane %s"', $pane->css['css_class']) : 'panel-pane'; ?> <?php print $custom_attrib;?>>
  <div class="pane-content">
  <?php print render($content->content); ?>
  </div>
</div>
