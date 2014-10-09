<?php
/*

 * @see template_preprocess_forum_topic_list()
 * @see theme_forum_topic_list()

*/
?>

<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--forum topic list .tpl.php -->
<?php } ?>

<?php //  kpr($topics['0']); ?>

<?php print $pager; ?>

<table class="forum-topic-list">
  <thead>
    <tr><?php print $header; ?></tr>
  </thead>
  <tbody>
  <?php foreach ($topics as $topic): ?>
    <tr class="<?php print $topic->zebra;?> <?php print $topic->status ?>">
      <td class="icon">
        <?php  print $topic->icon; ?>
      </td>
      <td class="subject">
        <b><?php print $topic->title; ?></b>
        <i><?php print $topic->name; ?></i>
        <date><?php print $topic->created; ?></date>
      </td>

    <?php if ($topic->moved): ?>
      <td colspan="3">
        <?php print $topic->message; ?>
      </td>
    <?php else: ?>
      <td class="replies">
        <?php print $topic->comment_count; ?>
        <?php if ($topic->new_replies): ?>
          <mark><a href="<?php print $topic->new_url; ?>"><?php print $topic->new_text; ?></a></mark>
        <?php endif; ?>
      </td>
      <td class="last-reply">
        <?php print $topic->last_reply; ?>
        <?php print $topic->last_comment_name; ?>
      </td>
    <?php endif; ?>

    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<?php print $pager; ?>

<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- /forum topic list -->
<?php } ?>

