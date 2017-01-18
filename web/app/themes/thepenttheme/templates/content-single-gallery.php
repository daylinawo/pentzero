<?php while (have_posts()) : the_post(); ?>
 <div class="container">
      <div class="row">     
          <div class="left-panel col-xs-12 col-sm-8">
          
            <article <?php post_class(); ?>>
              <header class="sub" style="background: transparent !important; border-bottom: 20px !important;">
                    <h2><?php the_title(); ?></h2>
              </header>    

              <div class="entry-content">
                <!-- GALLERIA -->
                        <div class="carousel-images slider-for">
                            <div><img src="/app/uploads/2017/01/billboard_ben_baller_main-1024x577.jpg" alt="1"/></div>
                            <div><img src="/app/uploads/2017/01/gucci_mane_-_press_photo_2_-_johnathan_mannion-e1484580677629.jpg" alt="2"/></div>
                            <div><img src="/app/uploads/2017/01/billboard_ben_baller_main-1024x577.jpg" alt="3"/></div>
                        </div>

                      <div class="carousel-nav slider-nav">
                          <div><img src="/app/uploads/2017/01/billboard_ben_baller_main-1024x577.jpg" alt="1"/></div>
                          <div><img src="/app/uploads/2017/01/gucci_mane_-_press_photo_2_-_johnathan_mannion-e1484580677629.jpg" alt="2"/></div>
                          <div><img src="/app/uploads/2017/01/billboard_ben_baller_main-1024x577.jpg" alt="3"/></div>
                      </div>
                <!-- GALLERY POST TEXT --> 

                <div class="description">
                  <?php the_field('post_text'); ?>
                </div>

              </div>    
            </article>

          </div> 

          <div class="col-xs-12 col-sm-4">
              <?php include (TEMPLATEPATH . '/templates/sidebar.php'); ?>
          </div>

        </div>
 </div>
<?php endwhile; ?>
