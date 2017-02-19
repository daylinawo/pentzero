<section class="half--wrap container-fluid">
	<section class="home-content featured-videos"> 	<!-- BEGIN FEATURED VIDEOS SECTION -->

			<header class="sub">
					<h2 class="default--hd" style="background-color: #000; color: #eeb781; border: 1px solid #2c2c2c;">Featured Videos</h2>
			</header>
			<div class="row">
				<!-- VID 1 -->
				<div class="video-box col-xs-12 col-xs-0 col-sm-5 col-sm-offset-1">
					<div class="video embed-responsive embed-responsive-16by9">
						<iframe src="https://www.youtube.com/embed/HzvzxytPUzg?rel=0&amp;showinfo=0"  allowfullscreen></iframe>
					</div>
				</div>
				<!-- VID 2 -->
				<div class="video-box col-xs-12 col-xs-0 col-xs-12 col-sm-5">
					<div class="video embed-responsive embed-responsive-16by9">
						<iframe src="https://www.youtube.com/embed/_wiN9AkyHpI?rel=0&amp;showinfo=0"  allowfullscreen></iframe>
					</div>
				</div>
			</div>
	</section>
	<!-- END FEATURED VIDEOS SECTION -->

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
				<div class="center-line--hd" style="position: absolute; top:30px; left:0; background-color:#bdbdbd; width:100%; height: 1px; z-index:0;"></div>
					<h2 class="default--hd" style="background-color: #eeb781; color: #fff; border-bottom: 0px; position: relative; z-index:1;">Latest Updates</h2>
		</header>
			<div class="post-date--hd" style="position: relative; width:100%;">
				<div class="center-line--hd" style="position: absolute; top:10px; left:25%; background-color:#bdbdbd; width:50%; height: 1px; z-index:0;"></div>
				<h3 style="text-align: center; margin:0 auto 15px auto; width:27%; font-size: 23px !important; padding-bottom:20px; position: relative; background-color:#fff;">Thursday, 6th February</h3>
			</div>

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
				  				if($i == 6): echo "<div style=\"width: 80%; height:100px; background-color:#bbb; margin:0 auto 40px auto; clear:both;\"></div>";
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
	</section>	<!-- END LATEST UPDATES SECTION -->
   <div class="clear"></div>
</section>	<!-- END SECOND HALF WRAP -->

