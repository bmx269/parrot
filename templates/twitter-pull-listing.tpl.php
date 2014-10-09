<?php
// $Id: twitter-pull-listing.tpl.php,v 1.2.2.3 2011/01/11 02:49:27 inadarei Exp $

/**
 * @file
 * Theme template for a list of tweets.
 *
 * Available variables in the theme include:
 *
 * 1) An array of $tweets, where each tweet object has:
 *   $tweet->id
 *   $tweet->username
 *   $tweet->userphoto
 *   $tweet->text
 *   $tweet->timestamp
 *
 * 2) $twitkey string containing initial keyword.
 *
 * 3) $title
 *
 */
?>
<section class="tweets">
<?php if (!empty($title)): ?>
	<h2><?php print $title; ?></h2>
<?php endif; ?>

<?php if (is_array($tweets)): ?>
  <?php $tweet_count = count($tweets); ?>
  
  <?php foreach ($tweets as $tweet_key => $tweet): ?>
	<article>
  	<div class="userphoto"><img src="<?php print $tweet->userphoto; ?>" alt="<?php print $tweet->username; ?>" title="" /></div>
  	<b class="username"><?php print l($tweet->username, 'http://twitter.com/' . $tweet->username); ?></b>
    <p class="tweet"><?php print twitter_pull_add_links($tweet->text); ?></p>
    <date><?php print l($tweet->time_ago, 'http://twitter.com/' . $tweet->username . '/status/' . $tweet->id);?></date>
  </article>
  <?php endforeach; ?>

<?php endif; ?>
</section>
