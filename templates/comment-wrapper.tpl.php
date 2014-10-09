<?php
/**
 * @file
 * Default theme implementation to wrap comments.
 *
 * Available variables:
 * - $content: The array of content-related elements for the node. Use
 *   render($content) to print them all, or print a subset such as
 *   render($content['comment_form']).
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default value has the following:
 *   - comment-wrapper: The current template type, i.e., "theming hook".
 *
 * The following variables are provided for contextual information.
 * - $node: Node object the comments are attached to.
 * The constants below the variables show the possible values and should be
 * used for comparison.
 * - $display_mode
 *   - COMMENT_MODE_FLAT
 *   - COMMENT_MODE_THREADED
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess_comment_wrapper()
 */
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- comments-wrapper -->
<?php } ?>
<aside id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>

<?php if ($node->type != 'forum'): ?>
  <h2><?php print t('Comments'); ?></h2>
<?php endif; ?>

<?php print render($content['comments']); ?>

<?php if ($content['comment_form']): ?>
  <h3><?php print t('Add new comment'); ?></h3>
  <?php print render($content['comment_form']); ?>
<?php endif; ?>

</aside>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--/ comments-wrapper -->
<?php } ?>
