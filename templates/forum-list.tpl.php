<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- forum list-->
<?php } ?>
<section class="forum-overview">

<?php foreach ($forums as $child_id => $forum): ?>
	<?php
		//lets figure out which is the first of each round
		$count = " count-" . $forum->count % 3;
	?>

	<?php if ($forum->is_container){ ?>
		<h2><?php print $forum->name; ?>:</h2>
	<?php }else{ ?>

  <article class="<?php print $forum->zebra . $count; ?>">
    <h3><a href="<?php print $forum->link; ?>"><?php print $forum->name; ?></a></h3>

		<?php if ($forum->description): ?>
    	<p><?php print $forum->description; ?></p>
    <?php endif; ?>

		<div class="icon <?php print $forum->icon_class; ?>">
    	<?php print $forum->icon_title; ?>
    	<span class="element-invisible"><?php print $forum->icon_title; ?></span>
    </div>

		<?php print t('Topics');?> <?php print $forum->num_topics ?>

  	<?php if ($forum->new_topics): ?>
  	<mark><a href="<?php print $forum->new_url; ?>" class="new"><?php print $forum->new_text; ?></a></mark>
  	<?php endif; ?>

  	<div>
    <?php print t('Posts');?> <?php print $forum->num_posts ?>
		</div>

  	<?php print t('Last post'); ?> <?php print $forum->last_reply ?>

	</article>

	<?php } ?>

<?php endforeach; ?>
</section>


<?php

/*
		<?php
		//print the parent term
		if($forum->parents['0']){
			$term = taxonomy_term_load($forum->parents['0']);
			print $term->name;
		}
		?>


<!-- forum list-->
<table>
  <thead>
    <tr>
      <th><?php print t('Forum'); ?></th>
      <th><?php print t('Topics');?></th>
      <th><?php print t('Posts'); ?></th>
      <th><?php print t('Last post'); ?></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($forums as $child_id => $forum): ?>
    <tr class="<?php print $forum->zebra; ?>">
      <td <?php print $forum->is_container ? 'colspan="4" class="container"' : 'class="forum"'; ?>>
                <?php print str_repeat('<div class="indent">', $forum->depth); ?>
          <div class="icon forum-status-<?php print $forum->icon_class; ?>" title="<?php print $forum->icon_title; ?>">
            <span class="element-invisible"><?php print $forum->icon_title; ?></span>
          </div>
          <h3><a href="<?php print $forum->link; ?>"><?php print $forum->name; ?></a></h3>
          <?php if ($forum->description): ?>
            <p><?php print $forum->description; ?></p>
          <?php endif; ?>
        <?php print str_repeat('</div>', $forum->depth); ?>
      </td>
      <?php if (!$forum->is_container): ?>
        <td class="topics">
          <?php print $forum->num_topics ?>
          <?php if ($forum->new_topics): ?>
            <mark>
            <a href="<?php print $forum->new_url; ?>" class="new"><?php print $forum->new_text; ?></a>
            </mark>
          <?php endif; ?>
        </td>
        <td class="posts"><?php print $forum->num_posts ?></td>
        <td class="last-reply"><?php print $forum->last_reply ?></td>
      <?php endif; ?>
    </tr>
  <?php endforeach; ?>
  </tbody>
  */
?>