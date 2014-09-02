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
<div class="panel-display parrot-panels two-50 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['two_50_top']): ?>
    <div id="two-50-top-wrapper" class="fullwidth">
      <div class="region two-50-top region-conditional-stack">
      <div class="container">
        <div class="region-inner clearfix">
          <?php print $content['two_50_top']; ?>
        </div>
      </div>
    </div>
    </div>
  <?php endif; ?>
    <div id="two-50-middle-wrapper" class="fullwidth">
      <div class="container">
        <div class="region two-50-first">
          <div class="region-inner clearfix">
            <?php print $content['two_50_first']; ?>
          </div>
        </div>
        <div class="region two-50-second">
          <div class="region-inner clearfix">
            <?php print $content['two_50_second']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php if ($content['two_50_bottom']): ?>
    <div id="two-50-bottom-wrapper" class="fullwidth">
      <div class="container">
        <div class="region two-50-bottom region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['two_50_bottom']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
