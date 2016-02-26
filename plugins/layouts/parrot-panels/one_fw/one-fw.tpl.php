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
<div class="panel-display parrot-panels one-fw-column clearfix" <?php if
(!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <div id="one-fw-wrapper" class="fullwidth">
    <div class="region one-fw-main">
      <div class="region-inner clearfix">
        <?php print $content['one_fw_main']; ?>
      </div>
    </div>
  </div>
</div>
