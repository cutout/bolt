<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	<h1 class="posttitle">
		<?php the_title(); ?>
	</h1>
	<?php get_template_part('content','postmetadata'); ?>
	<section class="entry">
		<?php the_content(); ?>
		<?php if (get_the_tags()) {
			the_tags('<p><span class="tags"><strong>'.__('Tagged as:','bolt').'</strong> ', '', '</span></p>');
			}
		?>
		<?php edit_post_link(__('Edit this entry','bolt'), '<p id="wp-edit">', '&rarr;</p>'); ?>
		<div class="postnav clearfix">
			<div class="left"><h5><?php _e('&lsaquo; Newer','bolt'); ?></h5><?php previous_post_link('%link') ?></div>
			<div class="right"><h5><?php _e('Older &rsaquo;','bolt'); ?></h5><?php next_post_link('%link') ?></div>
		</div>
	</section>
</article>