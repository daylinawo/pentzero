<?php while (have_posts()) : the_post(); ?>
 <div class="container">
      <div class="row">
        
          <div class="left-panel col-xs-12 col-sm-8">
            <article <?php post_class(); ?>>
                <header class="sub" style="background: transparent !important; border-bottom: 20px !important;">
                    <h2 style="font-size: 20px;"><?php the_title(); ?></h2>
                </header>
              
                <?php $video = get_field('video'); ?>

                <div class="entry-content">
                    <!-- VIDEO POST -->
                     <?php $vdlink = $video['url']; ?>
                     <?php echo do_shortcode("[KGVID]".$vdlink."[/KGVID]"); // DISPLAY VIDEO PLAYER ?> 

                    <!-- VIDEO DESCRIPTION --> 
                    <div class="description">
                      <?php the_field('video_description'); ?>
                   </div>
                    <!-- <?php get_template_part('templates/entry-meta'); ?> -->
                </div>
                
            </article>
          </div> 

          <div class="col-xs-12 col-sm-4">
              <?php include (TEMPLATEPATH . '/templates/sidebar.php'); ?>
          </div>

        </div>
 </div>
<?php endwhile; ?>
