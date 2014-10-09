<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- field title.tpl.php -->
<?php } ?>

  <?php if(count($items) > 1 ){ ?>
    <div class="field-items"<?php print $content_attributes; ?>>
      <?php foreach ($items as $delta => $item) : ?>
        <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
      <?php endforeach; ?>
    </div>
  <?php }else{ ?>
      <?php foreach ($items as $delta => $item) : ?>
        <?php print render($item); ?>
      <?php endforeach; ?>
  <?php } ?>

<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- /field title.tpl.php -->
<?php } ?>
