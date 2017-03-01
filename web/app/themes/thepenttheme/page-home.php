<section class="half--wrap container-fluid" style="padding: 0 !important;">
<!-- BEGIN CAROUSEL -->
	<div id="carousel-pentzero" class=" carousel slide" data-ride="carousel">
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
			  <li data-target="#carousel-pentzero" data-slide-to="2"></li>
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
	
	<!-- BEGIN FEATURED VIDEOS SECTION -->
	<section class="home-content featured-videos">
		<div class="alt--wrap">
			<header class="sub">
					<h2 class="default--hd-no-line">
						<span style="background-color: #000; color: #eeb781; border: 1px solid #2c2c2c !important">Featured Videos</span>
					</h2>
			</header>
			<div class="row">
				<!-- VID 1 -->
				<div class="video-box col-xs-12 col-xs-0 col-sm-5 col-sm-offset-1">
					<div class="video embed-responsive embed-responsive-16by9">

						<?php echo do_shortcode("[video_lightbox_youtube video_id=\"HzvzxytPUzg\" width=\"640\" height=\"480\" anchor=\"http://i67.tinypic.com/f3ugyw.jpg\"]");?>
					</div>
				</div>
				<!-- VID 2 -->
				<div class="video-box col-xs-12 col-xs-0 col-xs-12 col-sm-5">
					<div class="video embed-responsive embed-responsive-16by9">
						<iframe src="https://www.youtube.com/embed/_wiN9AkyHpI?rel=0&amp;showinfo=0"  allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END FEATURED VIDEOS SECTION -->


	<!-- BEGIN LATEST UPDATES SECTION -->
	<section id="latest-updates" class="home-content">
			<div class="container">
					<header class="sub">
					<h2 class="default--hd">
						<span style="background-color: #eeb781; color: #fff;">Latest Updates</span>
					</h2>
					</header>
					<div class="post-date--hd" style="position: relative; width:100%;">
						<h3>
							Monday, 6th February <span class="year">2017</span>
						</h3>
=					</div>
				<div class="row">
		  	<?php
		  		$paged = (get_query_var('page')) ? get_query_var('page') : 1;

		  		$args = array(
		  			'post_type'=> array('videos', 'gallery'),
		  			'posts_per_page' => 14,
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
				  				if($i <= 5): $column = 4; $class = "most-recent"; 
				  				else: $column = 3; $class = "older";
				  				endif
			  				?>
			  				<?php 
				  				if($i == 6): echo "
				  					</div></div>
				  					<div class=\"clear\"></div>
				  							<div class=\"alt--wrap\">
					  							<div class=\"container-fluid\" style=\"margin:10px auto 20px auto; clear:both; overflow: hidden; padding:0 !important;\">
					  								<img src=\"/app/themes/thepenttheme/assets/images/pageadvert1.jpg\" width=\"100%\" style=\"margin:auto; display:block;\" />
					  							</div>
				  							</div>
											<div class=\"container\">
												<div class=\"post-date--hd col-xs-12\" style=\"position: relative; width:100%;\">
													<div class=\"center-line--hd\"></div>
														<h3>
															Sunday, 5th February<span class=\"year\"> 2017</span>
														</h3>
											 	</div>
												<div class=\"row\">
				  				";
				  				endif 
			  				?>
							<div class="col-xs-6 col-sm-<?php echo $column; echo " ".$class; ?> ">
									<? get_template_part('templates/content', 'featured'); ?>
							</div>

							<?if($i == 13): echo "</div></div>"; endif?>

					<?php $i++; endwhile; ?>

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
	</section>	<!-- END LATEST UPDATES SECTION -->
   <div class="clear"></div>
</section>	<!-- END SECOND HALF WRAP -->

