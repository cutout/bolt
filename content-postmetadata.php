	<div class="postmetadata">
		<em>
			<?php _e('By','bolt'); ?>
		</em> 
		<?php the_author_posts_link('namefl'); ?> <?php _e('on','bolt'); ?> <time><?php the_time('M d, Y'); ?></time>
		&bull; 
		<span class="commentcount">
			(<?php comments_popup_link('0', '1', '%'); ?>)
		</span>
	</div>