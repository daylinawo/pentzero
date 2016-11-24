<?php while (have_posts()) : the_post(); ?>
 <div class="container">
      <div class="row">
        
          <div class="left-panel col-xs-12 col-sm-8">
            <article <?php post_class(); ?>>

                  <header class="sub" style="background: transparent !important; border-bottom: 20px !important;">
                    <h2 style="font-size: 20px;"><?php the_title(); ?></h2>
                  </header>
              
                    <?php $videos = get_post_meta($post->ID, 'videofields', true); ?>

                    <div class="entry-content">
                     
                      <?php foreach($videos as $video){ ?>

                            <?php $vdlink = wp_get_attachment_url($video['video']); ?>
                               
                               <?php echo do_shortcode("[KGVID]".$vdlink."[/KGVID]"); // DISPLAY VIDEO PLAYER ?> 
                       
                          <div class="description">
                            <?php echo $video['video-description']; ?>
                          </div>

                     <?php } ?>

                        <!-- <?php get_template_part('templates/entry-meta'); ?> -->
                    </div>
              
                  <footer>
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                  </footer>
            
            </article>
          </div>

            
            

        </div>

 </div>
<?php endwhile; ?>
