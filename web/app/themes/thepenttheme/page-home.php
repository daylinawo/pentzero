	<div class="home-content large-featured-video container-fluid">
		<div class="row">
			<div id="video_container" class="video-container">
				<video id="video">
					<source src="/app/themes/thepenttheme/assets/videos/nines_trapper_of_the_year.mp4" type="video/mp4">
					<source src="/app/themes/thepenttheme/assets/videos/nines_trapper_of_the_year.webm" type="video/webm">
					<source src="/app/themes/thepenttheme/assets/videos/nines_trapper_of_the_year.ogg" type="video/ogg">
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

	<!-- BEGIN CAROUSEL -->
	<div id="carousel-pentzero" class=" carousel slide container" data-ride="carousel">

	<div class="carousel-container">
	 <!-- Wrapper for slides -->
	 <div class="carousel-inner">

	<div class="item active" style=" max-height: 400px;">
	<img style="min-width:100%; object-fit: cover; max-height:400px;" src="/app/uploads/2016/12/california-palms.jpg" alt="california-palms" />
	<div class="carousel-caption">
	                <a href="#">Here is a little teaser.</a>
	</div>
	</div>

	   <!-- Indicators -->
	 <ol class="carousel-indicators">
	  <li data-target="#carousel-pentzero" data-slide-to="1" class="active"></li>
	 </ol>
	 </div>
	 
	 <!-- Controls -->
	 <a class="left carousel-control" href="#carousel-pentzero" role="button" data-slide="prev">
	   <span class="glyphicon glyphicon-chevron-left"></span>
	 </a>
	 <a class="right carousel-control" href="#carousel-pentzero" role="button" data-slide="next">
	   <span class="glyphicon glyphicon-chevron-right"></span>
	 </a>
	</div> 
	</div> 
	<!-- END CAROUSEL -->


	<!-- BEGIN LATEST UPDATES SECTION -->
	<section id="latest-updates" class="home-content container">

		<header class="sub">
			<h2>Latest Updates</h2>
		</header>

		<div class="row">
		  	<?php
		  		$paged = (get_query_var('page')) ? get_query_var('page') : 1;

		  		$args = array(
		  			'post_type'=> array('videos', 'gallery'),
		  			'posts_per_page' => 8,
		  			'paged' => $paged,
		  			);

		  		$postsQuery = new WP_Query($args);
		  			
		  		global $wp_query;
		  		$tmp_query = $wp_query;
		  		$wp_query = null;
		  		$wp_query = $postsQuery;

		  			if($postsQuery->have_posts() ): $i = 0;
		  				while($postsQuery->have_posts() ): $postsQuery->the_post(); ?>
			  				<?php
				  				if($i <= 5): $column = 4; $class = "recent-posts"; 
				  				else: $column = 3; $class = "older-posts";
				  				endif
			  				?>
			  				<?php 
				  				if($i == 6): echo "<div class=\"col-xs-12\" style=\"width:100%; height:3px; background-color:#000; margin:20px 0;\"></div>";
				  				endif 
			  				?>
							<div class="col-xs-6 col-sm-<?php echo $column; echo " ".$class; ?> ">
									<? get_template_part('templates/content', 'featured'); ?>
							</div>

					<?php $i++; endwhile; ?>
					</div>
					<div class="row" id="pagination">
						<div class="col-sm-12 text-center">
							<?php 
								echo paginate_links( array(
									'total' => $postsQuery->max_num_pages,
									) ); 
							?>
						</div>
					<?php endif;
					
					$wp_query = null;
					$wp_query = $tmp_query;
					
					wp_reset_postdata();
		  		?>
		</div>
	</section>
	<!-- END LATEST UPDATES SECTION -->
