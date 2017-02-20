
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

        <div class="col-sm-3 col-md-3">
        <ul class="social">
            <li><a href="#" class="ic ic-facebook"></a><li>
            <li><a href="#" class="ic ic-twitter"></a><li>
            <li><a href="#" class="ic ic-youtube"></a><li>
            <li><a href="#" class="ic ic-instagram"></a><li>
          </ul>
        </div>
        <div class="col-sm-2 col-md-2 navbar-right">
            <?php  get_search_form(); ?>
        </div>

      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</header>
<?php
if(is_front_page()){
     get_template_part('templates/content-header', 'part');

}
?>