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
<div class="panel-display grid-ready one-stacked clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['one_stacked_top']): ?>
    <div id="top-wrapper" class="fullwidth">
      <div class="container">
        <div class="region region-top region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['one_stacked_top']; ?>
          </div>
        </div>
      </div>
  </div>
  <?php endif; ?>
  <?php if ($content['one_stacked_bottom']): ?>
    <div id="bottom-wrapper" class="fullwidth">
      <div class="container">
        <div class="region region-bottom region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['one_stacked_bottom']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
