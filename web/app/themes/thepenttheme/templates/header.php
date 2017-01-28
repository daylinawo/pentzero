
<header class="m-header" role="banner">

<div class="l-container l-c-style" style="height:72px; width:100%; background-color:#000;">
  <div class="l-space">
      <div class="l-block" style="height:72px; width:300px; display: inline-block;">

      </div>
  </div>
</div>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
            <? $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
            <? $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
            <? if ( has_custom_logo() ) {
                  echo '<a href="" class="navbar-brand"><img src="'.esc_url( $logo[0] ).'" alt="Pentzero logo" ></a>';
            } else {
                  echo '<h1>'. esc_attr( get_bloginfo( 'name' ) ) .'</h1>';
            } ?> 
      </div>
      <div id="navbar1" class="navbar-collapse collapse">
         <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu([
               'theme_location' => 'primary_navigation',
               'walker' => new wp_bootstrap_navwalker(),
               'menu_class' => 'nav navbar-nav'
                ]);
            endif;
            ?> 
        <div class="col-sm-3 col-md-3 navbar-right">
            <?php  get_search_form(); ?>
        </div>

      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</header>

<!-- LARGE FEATURED VIDEO -->
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

<!-- RECOMMENDED POSTS LIST -->
<section id="recommended-posts" class="d-recommended m-hide">
    <div class="container-fluid r-p-b">
        <h2 class="default--hd" style="background-color: #000; color: #fff; border: 1px solid #292929;">Recommended Posts</h2>
        <div class="row row-span">
            <div class="col-xs-12">
                <?php 

                $args = array( 
                'post_type' => array('videos','gallery'),
                'posts_per_page' => 6,
                'orderby' => 'rand',
                );

                $postsQuery = new WP_Query($args);
                    if($postsQuery->have_posts() ): $i = 0;
                        while($postsQuery->have_posts() ): $postsQuery->the_post(); ?>

                <div class="col-xs-6 col-sm-2"> 
                      <? get_template_part('templates/content', 'recommend'); ?>
                </div>

                <? endwhile;
                   endif; 

                   wp_reset_postdata();

                ?>
                </div>
            </div>
        </div>
    </div>
</section>