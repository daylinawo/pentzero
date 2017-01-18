<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<h3 class="psb-head">Recommended Posts</h3>
<?php if (have_posts()):?>
<ol>
	<?php while (have_posts()) : the_post(); ?>
		<li>
			<?php if (has_post_thumbnail()):?>
				<div class="rpthumb">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('yarpp-thumbnail'); ?></a>
				</div>
			<?php endif; ?>
			<h3 class="rp-title">
				<a href="<?php the_permalink() ?>">
					<?php 
						if (strlen($post->post_title) > 45){
      				 		echo substr($post->post_title, 0, 45) . '...';
      					}
   				 		else{
      			 			the_title();
      			 		} 
      			 	?>
      			 </a>
			</h3>
			<p><time class="updated"  datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>
			<div class="clear"></div>
		</li>
	<?php endwhile; ?>
</ol>

<?php else: ?>
<p>No related photos.</p>
<?php endif; ?>
