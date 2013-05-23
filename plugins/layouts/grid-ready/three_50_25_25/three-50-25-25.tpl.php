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
<div class="panel-display grid-ready three-50-25-25 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['three_50_25_25_top']): ?>
    <div id="three-50-25-25-top-wrapper" class="fullwidth">
      <div class="container">
        <div class="region region-top region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['three_50_25_25_top']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
    <div id="three-50-25-25-middle-wrapper" class="fullwidth">
      <div class="container">
        <div class="region region-first">
          <div class="region-inner clearfix">
            <?php print $content['three_50_25_25_first']; ?>
          </div>
        </div>
        <div class="region region-second">
          <div class="region-inner clearfix">
            <?php print $content['three_50_25_25_second']; ?>
          </div>
        </div>
        <div class="region region-third">
          <div class="region-inner clearfix">
            <?php print $content['three_50_25_25_third']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php if ($content['three_50_25_25_bottom']): ?>
    <div id="three-50-25-25-bottom-wrapper" class="fullwidth">
      <div class="container">
        <div class="region region-bottom region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['three_50_25_25_bottom']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
