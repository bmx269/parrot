<?php
/**
 * @file
 * Implementation of a panels grid ready layout.
 *
 * Available variables:
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout.
 * - $css_id: unique id if present.
 */

?>
<div class="panel-display parrot-panels minipanels minipanel-one-column clearfix" <?php
if (!empty
($css_id)): print "id=\"$css_id\""; endif; ?>>
  <div class="minipanel-one-wrapper fullwidth">
    <div class="region region-minipanel-one-main">
      <div class="region-inner clearfix">
        <?php print $content['minipanel_one_main']; ?>
      </div>
    </div>
  </div>
</div>
