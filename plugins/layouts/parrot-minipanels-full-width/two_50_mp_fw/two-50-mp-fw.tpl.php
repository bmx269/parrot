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
<div class="panel-display parrot-panels minipanel-two-50-fw clearfix" <?php if
(!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['minipanel_two_50_top_fw']): ?>
    <div id="minipanel-two-50-top-fw-wrapper" class="fullwidth">
      <div class="container">
        <div class="region minipanel-two-50-top-fw region-conditional-stack">
        <div class="region-inner clearfix">
          <?php print $content['minipanel_two_50_top_fw']; ?>
        </div>
      </div>
      </div>
    </div>
  <?php endif; ?>
    <div id="minipanel-two-50-middle-fw-wrapper" class="fullwidth">
      <div class="container">
        <div class="region minipanel-two-50-first-fw">
          <div class="region-inner clearfix">
            <?php print $content['minipanel_two_50_first_fw']; ?>
          </div>
        </div>
        <div class="region minipanel-two-50-second-fw">
          <div class="region-inner clearfix">
            <?php print $content['minipanel_two_50_second_fw']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php if ($content['minipanel_two_50_bottom_fw']): ?>
    <div id="minipanel-two-50-bottom-fw-wrapper" class="fullwidth">
      <div class="container">
        <div class="region minipanel-two-50-bottom-fw region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['minipanel_two_50_bottom_fw']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
