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
<div class="panel-display parrot-panels two-33-66-alt clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['two_33_66_alt_top']): ?>
    <div id="two-33-66-alt-top-wrapper" class="fullwidth">
      <div class="container">
        <div class="region two-33-66-alt-top region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['two_33_66_alt_top']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
    <div id="two-33-66-alt-middle-wrapper" class="fullwidth">
      <div class="container">
      <div class="region two-33-66-alt-second">
        <div class="region-inner clearfix">
          <?php print $content['two_33_66_alt_second']; ?>
        </div>
      </div>
        <div class="region two-33-66-alt-first">
          <div class="region-inner clearfix">
            <?php print $content['two_33_66_alt_first']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php if ($content['two_33_66_alt_bottom']): ?>
    <div id="two-33-66-alt-bottom-wrapper" class="fullwidth">
      <div class="container">
        <div class="region two-33-66-alt-bottom region-conditional-stack">
      <div class="region-inner clearfix">
        <?php print $content['two_33_66_alt_bottom']; ?>
      </div>
    </div>
      </div>
    </div>
  <?php endif; ?>
</div>
