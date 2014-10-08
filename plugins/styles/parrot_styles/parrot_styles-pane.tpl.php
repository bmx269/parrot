<div <?php print (!empty($pane->css['css_id'])) ? printf('id="%s"', $pane->css['css_id']) : ''; ?>
  <?php print (!empty($pane->css['css_class'])) ? printf('class="panel-pane %s"', $pane->css['css_class']) : 'panel-pane'; ?> <?php print $custom_attrib;?>>
  <?php if ($content->title): ?>
    <h2><?php print render($content->title); ?></h2>
  <?php endif; ?>
  <div class="pane-content">
  <?php print render($content->content); ?>
  </div>
</div>
