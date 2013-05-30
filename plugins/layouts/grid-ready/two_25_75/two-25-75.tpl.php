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
<div class="panel-display grid-ready two-25-75 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['two_25_75_top']): ?>
    <div id="two-25-75-top-wrapper" class="fullwidth">
      <div class="container">
        <div class="region region-top region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['two_25_75_top']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div id="two-25-75-middle-wrapper" class="fullwidth">
    <div class="container">
      <div class="region region-first">
        <div class="region-inner clearfix">
          <?php print $content['two_25_75_first']; ?>
        </div>
      </div>
      <div class="region region-second">
        <div class="region-inner clearfix">
          <?php print $content['two_25_75_second']; ?>
        </div>
      </div>
    </div>
  </div>
  <?php if ($content['two_25_75_bottom']): ?>
    <div id="two-25-75-bottom-wrapper" class="fullwidth">
      <div class="container">
        <div class="region region-bottom region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['two_25_75_bottom']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>