<?php if('video' == get_post_type() ){ ?>
			<?php 	get_template_part('templates/video', 'single');	?>
	<?php } else { ?>
			<?php  get_template_part('templates/content-single', get_post_type()); ?>
	<?php } ?>

