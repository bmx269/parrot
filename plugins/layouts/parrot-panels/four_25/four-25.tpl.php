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
<div class="panel-display parrot-panels four-25 clearfix" <?php if (!empty
($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['four_25_top']): ?>
    <div id="four-25-top-wrapper" class="fullwidth">
      <div class="container">
        <div class="region four-25-top region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['four_25_top']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
    <div id="four-25-middle-wrapper" class="fullwidth">
      <div class="container">
        <div class="region four-25-first">
          <div class="region-inner clearfix">
            <?php print $content['four_25_first']; ?>
          </div>
        </div>
        <div class="region four-25-second">
          <div class="region-inner clearfix">
            <?php print $content['four_25_second']; ?>
          </div>
        </div>
        <div class="region four-25-third">
          <div class="region-inner clearfix">
            <?php print $content['four_25_third']; ?>
          </div>
        </div>
        <div class="region four-25-fourth">
          <div class="region-inner clearfix">
            <?php print $content['four_25_fourth']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php if ($content['four_25_bottom']): ?>
    <div id="four-25-bottom-wrapper" class="fullwidth">
      <div class="container">
        <div class="region four-25-bottom region-conditional-stack">
        <div class="region-inner clearfix">
          <?php print $content['four_25_bottom']; ?>
        </div>
      </div>
      </div>
    </div>
  <?php endif; ?>
</div>
