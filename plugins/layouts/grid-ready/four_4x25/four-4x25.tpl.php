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
<div class="panel-display four-4x25 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['four_25_top']): ?>
    <div class="region region-top region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['four_25_top']; ?>
      </div>
    </div>
  <?php endif; ?>
  <div class="region region-first">
    <div class="region-inner clearfix">
      <?php print $content['four_25_first']; ?>
    </div>
  </div>
  <div class="region region-second">
    <div class="region-inner clearfix">
      <?php print $content['four_25_second']; ?>
    </div>
  </div>
  <div class="region region-third">
    <div class="region-inner clearfix">
      <?php print $content['four_25_third']; ?>
    </div>
  </div>
  <div class="region region-fourth">
    <div class="region-inner clearfix">
      <?php print $content['four_25_fourth']; ?>
    </div>
  </div>
  <?php if ($content['four_25_bottom']): ?>
    <div class="region region-bottom region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['four_25_bottom']; ?>
      </div>
    </div>
  <?php endif; ?>
</div>
