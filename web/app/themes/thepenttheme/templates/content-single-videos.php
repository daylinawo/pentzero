<?php while (have_posts()) : the_post(); ?>
 <div class="container post-page--container push">
      <div class="row">        
        <article <?php post_class(); ?>>
         
          <div class="col-xs-8">
            <header class="post-page--title">
                <h2><?php the_title(); ?></h2>
            </header>
          </div>

            <div class="col-xs-4">
                <!-- <form method="post" action="">
                      <input type="button" name="submit" value="Click here to subscribe" style="width:100%; background-color:#000; color:#fff; border: 0 !important; text-transform: uppercase;">
                </form> -->
                <a href="#" style="background-color:#000; width:100%; color:#eeb781; display: block; padding:10px;"><span class="glyphicon glyphicon-plus-sign" style="padding-right:5px;"></span>Subscribe to Pentzero</a>
          </div>
     </div>
           <div class="row">        
              <div class="left-panel col-xs-12 col-sm-8">
                <?php $video = get_field('video'); ?>

                <div class="entry-content">
                    <!-- VIDEO POST -->
                     <?php $vdlink = $video['url']; ?>
                     <?php echo do_shortcode("[KGVID]".$vdlink."[/KGVID]"); // DISPLAY VIDEO PLAYER ?> 

                    <div class="description">
                      <p class="post-page--time"><time datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('F j, Y'); ?></time></p>
                     <p class="post-info"> <?php the_field('video_description'); ?> </p>
                   </div><!-- VIDEO DESCRIPTION --> 

                    <!-- <?php get_template_part('templates/entry-meta'); ?> -->

                    <?php if( comments_open() ){ comments_template(); }?>
                </div>
                
            </article>
          </div> 

          <div class="col-xs-12 col-sm-4">
            
  
            <div>
              <?php include (TEMPLATEPATH . '/templates/sidebar.php'); ?>
            </div>
          </div>

        </div>

<?php endwhile; ?>
