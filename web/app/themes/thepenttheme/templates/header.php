<header id="top" class="main-header" role="banner">
        <!-- <div class="search-bar-container col-xs-12 col-xs-offset-0 col-sm-4 col-sm-offset-4">
            <?php  get_search_form(); ?>
        </div> -->  

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
                  echo '<a href="" style="background-image: url('. esc_url( $logo[0] ) .'); width: 200px; height: 24px;"  class="navbar-brand"></a>';
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

      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</header>