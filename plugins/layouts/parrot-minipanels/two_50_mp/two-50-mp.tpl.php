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
<div class="panel-display parrot-panels minipanels minipanel-two-50 clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['minipanel_two_50_top']): ?>
    <div id="minipanel-two-50-top-wrapper" class="fullwidth">
        <div class="region minipanel-two-50-top region-conditional-stack">
        <div class="region-inner clearfix">
          <?php print $content['minipanel_two_50_top']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
    <div id="minipanel-two-50-middle-wrapper" class="fullwidth">
      <div class="region minipanel-two-50-first">
        <div class="region-inner clearfix">
          <?php print $content['minipanel_two_50_first']; ?>
        </div>
      </div>
      <div class="region minipanel-two-50-second">
        <div class="region-inner clearfix">
          <?php print $content['minipanel_two_50_second']; ?>
        </div>
      </div>
     </div>
  <?php if ($content['minipanel_two_50_bottom']): ?>
    <div id="minipanel-two-50-bottom-wrapper" class="fullwidth">
      <div class="region minipanel-two-50-bottom region-conditional-stack">
        <div class="region-inner clearfix">
          <?php print $content['minipanel_two_50_bottom']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
