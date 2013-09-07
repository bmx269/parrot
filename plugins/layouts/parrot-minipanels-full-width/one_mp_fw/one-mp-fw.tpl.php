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
<div class="panel-display parrot-panels minipanel-one-column-fw clearfix" <?php if (!empty
($css_id)): print "id=\"$css_id\""; endif; ?>>
  <div class="minipanel-one-fw-wrapper fullwidth">
    <div class="container">
      <div class="region region-minipanel-one-main-fw">
        <div class="region-inner clearfix">
          <?php print $content['minipanel_one_main_fw']; ?>
        </div>
      </div>
    </div>
  </div>
</div>
