<?php
/*
Removed the Clearfix & content inner div wrapper hell
*/
?>
<div class="<?php print $classes; ?> "<?php print $attributes; ?>>
  <?php print render($content); ?>
</div>
