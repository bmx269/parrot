<?php
//kpr(get_defined_vars());
//kpr($variables);
//kpr($variables['theme_hook_suggestions']);
/**
 * @file panels-pane.tpl.php
 * Main panel pane template
 *
 * Variables available:
 * - $pane->type: the content type inside this pane
 * - $pane->subtype: The subtype, if applicable. If a view it will be the
 *   view name; if a node it will be the nid, etc.
 * - $title: The title of the content
 * - $content: The actual content
 * - $links: Any links associated with the content
 * - $more: An optional 'more' link (destination only)
 * - $admin_links: Administrative links associated with the content
 * - $feeds: Any feed icons or associated with the content
 * - $display: The complete panels display object containing all kinds of
 *   data including the contexts and all of the other panes being displayed.
 */
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- / tpl:  allerbase/panes/panels-pane--panels-mini.tpl.php -->
<?php } ?>


  <?php if ($title): ?>
    <h2><?php print $title; ?></h2>
  <?php endif; ?>

  <?php print render($content); ?>

<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- / tpl:  allerbase/panes/panels-pane--panels-mini.tpl.php -->
<?php } ?>


