	<div class="home-content large-featured-video container-fluid">
		<div class="row">
			<div id="video_container" class="video-container">
				<video id="video">
					<source src="app/themes/mytheme/assets/videos/nines_trapper_of_the_year.mp4" type="video/mp4">
					<source src="app/themes/mytheme/assets/videos/nines_trapper_of_the_year.webm" type="video/webm">
					<source src="app/themes/mytheme/assets/videos/nines_trapper_of_the_year.ogg" type="video/ogg">
				</video>
			</div>
		</div>
	</div>
<!-- BODE WAS ERE 2016 -->
	<!-- BEGIN FEATURED VIDEOS SECTION -->
	<section class="home-content featured-videos container">

			<header class="sub">
					<h2>Featured Videos</h2>
			</header>
			<div class="video-box row">
				<!-- VID 1 -->
				<div class="video col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="https://www.youtube.com/embed/HzvzxytPUzg?rel=0&amp;showinfo=0"  allowfullscreen></iframe>
					</div>
				</div>
				<!-- VID 2 -->
				<div class="video col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="https://www.youtube.com/embed/_wiN9AkyHpI?rel=0&amp;showinfo=0"  allowfullscreen></iframe>
					</div>
				</div>
			</div>
	</section>
	<!-- END FEATURED VIDEOS SECTION -->

	<!-- BEGIN LATEST UPDATES SECTION -->
	<section id="latest-updates" class="home-content container">

		<header class="sub">
			<h2>Latest Updates</h2>
		</header>

		<div class="push-down row">
		  		<?php
		  		$args = array(
		  			'post_type'=>'video',
		  			'posts_per_page' => 3,
		  			);

		  			$lastBlog = new WP_Query($args);
		  			if($lastBlog->have_posts() ):
		  				while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>

						<div class="col-xs-6 col-sm-4 simple-push">
								<? get_template_part('templates/content', 'featured'); ?>
						</div>

					<? endwhile;
					endif;

					wp_reset_postdata();
		  		?>
		</div>

		<div class="push-down row">

		  		<?php
		  		$args = array(
		  			'post_type'=>'post',
		  			'posts_per_page' => 3,
		  			'offset' => 1,
		  			);

		  			$lastBlog = new WP_Query($args);
		  			if($lastBlog->have_posts() ):
		  				while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>

						<div class="col-xs-6 col-sm-4 simple-push">
								<? get_template_part('templates/content', 'featured'); ?>
						</div>

					<? endwhile;
					endif;

					wp_reset_postdata();
		  		?>
		</div>

		<div class="push-down row">
		  		<?php
		  		$args = array(
		  			'post_type'=>'post',
		  			'posts_per_page' => 4,
		  			);

		  			$lastBlog = new WP_Query($args);
		  			if($lastBlog->have_posts() ):
		  				while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>

						<div class="col-xs-12 col-sm-3">
								<? get_template_part('templates/content', 'featured'); ?>
						</div>

					<? endwhile;
					endif;

					wp_reset_postdata();
		  		?>
		</div>

		<div class="push-down row">
		  		<?php
		  		$args = array(
		  			'post_type'=>'post',
		  			'posts_per_page' => 4,
		  			);

		  			$lastBlog = new WP_Query($args);
		  			if($lastBlog->have_posts() ):
		  				while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>

						<div class="col-xs-12 col-sm-3">
								<? get_template_part('templates/content', 'featured'); ?>
						</div>

					<? endwhile;
					endif;

					wp_reset_postdata();
		  		?>
		</div>
		<div class="push-down row">
		  		<?php
		  		$args = array(
		  			'post_type'=>'post',
		  			'posts_per_page' => 4,
		  			);

		  			$lastBlog = new WP_Query($args);
		  			if($lastBlog->have_posts() ):
		  				while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>

						<div class="col-xs-12 col-sm-3">
								<? get_template_part('templates/content', 'featured'); ?>
						</div>

					<? endwhile;
					endif;

					wp_reset_postdata();
		  		?>
		</div>
	</section>
	<!-- END LATEST UPDATES SECTION -->
