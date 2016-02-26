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
<div class="panel-display parrot-panels two-80-20 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['two_80_20_top']): ?>
  <div id="two-80-20-top-wrapper" class="fullwidth">
    <div class="region two-80-20-top region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['two_80_20_top']; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div id="two-80-20-middle-wrapper" class="fullwidth">
    <div class="container">
      <div class="region two-80-20-first">
        <div class="region-inner clearfix">
          <?php print $content['two_80_20_first']; ?>
        </div>
      </div>
      <div class="region two-80-20-second">
        <div class="region-inner clearfix">
          <?php print $content['two_80_20_second']; ?>
        </div>
      </div>
    </div>
  </div>
  <?php if ($content['two_80_20_bottom']): ?>
    <div id="two-80-20-bottom-wrapper" class="fullwidth">
      <div class="container">
        <div class="region two-80-20-bottom region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['two_80_20_bottom']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
