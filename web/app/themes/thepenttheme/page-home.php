<section class="wrap--half" style="padding: 0 !important;">
	
	<div class="row">
	<div class="wrapper alt black">
		<div class="maxWidth">
			<div class="ad strip">
				<img src="/app/uploads/2017/03/wg_ss11_campaign_main_5_web_1column-e1488843597457.jpg" maxwidth="80%" style="margin:auto; display:block;" />
			</div>
		</div>
	</div>
</div>

	<!-- BEGIN FEATURED VIDEOS SECTION -->
	<section id="featured-videos" class="home-content wrapper alt grey">

				<div class="row inner-container">			
					<div class="maxWidth">
						<header class="sub">
							<h2 class="default--hd-no-line">
								<span style="background-color: #000; color: #eeb781; border: 1px solid #2c2c2c !important">Featured Videos</span>
							</h2>
						</header>
							<div style="background-color:#000; padding: 4px 3px;">	
									<!-- VID 1 -->
									<div class="video-box col-xs-12 col-sm-6">
										<div class="thumbnail-img">
											<?php echo do_shortcode("[video_lightbox_youtube video_id=\"HzvzxytPUzg\" width=\"640\" height=\"480\" anchor=\"http://i65.tinypic.com/vevoes.jpg\"]");?>
											<a rel="wp-video-lightbox" class="overlay" href="https://www.youtube.com/watch?v=HzvzxytPUzg&width=640&height=480">
												<div class="cont">
													<div class="title">
														<h3>Money on my mind<small>Nines</small></h3><span class="glyphicon glyphicon-play right"></span>
													</div>
												</div>
											</a>
										</div>
									</div>
									<!-- VID 2 -->
									<div class="video-box col-xs-12 col-sm-6">
										<div class="thumbnail-img">
											<?php echo do_shortcode("[video_lightbox_youtube video_id=\"_wiN9AkyHpI\" width=\"640\" height=\"480\" anchor=\"http://i68.tinypic.com/2hrpob9.jpg\"]");?>
											<a rel="wp-video-lightbox" class="overlay" href="https://www.youtube.com/watch?v=_wiN9AkyHpI&width=640&height=480">
												<div class="cont">
													<div class="title">
														<h3>Champions Freestyle<small>Teyana Taylor</small></h3><span class="glyphicon glyphicon-play right"></span>
													</div>
												</div>
											</a>
										</div>
									</div>
									<br class="clear"/>
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

			<div class="item active" style=" max-height: 700px;">
			<img style="min-width:100%; object-fit: cover; max-height:700px;" src="http://static3.businessinsider.com/image/5589a63669bedd6c56f6781f/5-habits-that-helped-turn-ordinary-people-into-self-made-millionaires.jpg" alt="california-palms" />
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

	<!-- BEGIN LATEST UPDATES SECTION -->
	<section id="latest-updates" class="home-content">
			<div class="row inner-container clear">
				<div class="maxWidth">
					<header class="sub">
						<h2 class="default--hd">
							<span style="background-color: #eeb781; color: #fff; margin-bottom: 20px;">Latest Updates</span>
						</h2>
					</header>

		  	<?php
		  		$paged = (get_query_var('page')) ? get_query_var('page') : 1;

		  		$args = array(
		  			'post_type'=> array('videos', 'gallery'),
		  			'posts_per_page' => -1,
		  			'paged' => $paged,
		  			);

		  		$postsQuery = new WP_Query($args);
		  			
		  		global $wp_query;
		  		$tmp_query = $wp_query;
		  		$wp_query = null;
		  		$wp_query = $postsQuery;


          	 	 // Catch output of sidebar in string
          		 ob_start();
           		 dynamic_sidebar("banner-ads-home");
           		 $sidebar_output = ob_get_clean();

     			 // Create DOMDocument with string (and set encoding to utf-8)
         		 $dom = new DOMDocument;
          		 @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $sidebar_output);          		 

          		  // Get IDs of the elements in your sidebar, e.g. "text-2"
            			global $_wp_sidebars_widgets;
            			$sidebar_element_ids = $_wp_sidebars_widgets["banner-ads-home"]; // Use ID of your sidebar
            			// Save single widgets as html string in array
           				 $sidebar_elements = [];

           			foreach ($sidebar_element_ids as $sidebar_element_id):

           				// Get widget by ID
           				$element = $dom->getElementByID($sidebar_element_id);
           				$sidebar_elements[] = return_dom_node_as_html($element);

           			endforeach;


           			$bannerad_count = 0;

		  			if($postsQuery->have_posts() ): $i = 0; $day_check = "";
		  				while($postsQuery->have_posts() ): $postsQuery->the_post();

				  				if($i <= 5): $column = 4; $class = "most-recent"; 
				  				else: $column = 3; $class = "older";
				  				endif;

				  				if($i <= 5): $widget_interval = 6; // After how many posts an banner ad is displayed
				  				else: $widget_interval = 26;
				  				endif;

				  				if($i >= 6):
				  						$day = get_the_date('j');
				  						if($day != $day_check):
				  								 ?>
				  									
				  									<div class="row"><div class="col-sm-12 post-date"><h3><? echo get_the_date();?><h3></div></div>

				  						<?		
				  						endif;
				  				endif;
		  						$day_check = $day;
			  				?>
							<div class="col-xs-12 col-sm-<?php echo $column; echo " ".$class; ?> ">
									<? get_template_part('templates/content', 'featured'); ?>
							</div>

					<?php 	$i++; 

			                if (!empty($sidebar_elements) && $i % $widget_interval === 0):

			                    // Echo the widget
			                    echo $sidebar_elements[$bannerad_count];
			                    $bannerad_count++;
			                    // Restart after the last widget
			                    if ($bannerad_count == count($sidebar_elements)):
			                        $bannerad_count = 0;
			                    endif;

			                endif;

					endwhile; 
					?>
					</div>
				</div>


			<? if($postsQuery->max_num_pages > 1): ?>					
			<div class="row" id="pagination">
				<div class="col-sm-12 text-center">
							<?php 
								echo paginate_links( array(
									'total' => $postsQuery->max_num_pages,
									) ); 
							?>
						</div>
			<? endif; ?>			
					<?php endif;
					
					$wp_query = null;
					$wp_query = $tmp_query;
					
					wp_reset_postdata();
		  		?>
			</div>
	</section>	<!-- END LATEST UPDATES SECTION -->
   <div class="clear"></div>
</section>	<!-- END SECOND HALF WRAP -->

