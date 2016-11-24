<header id="top" class="header" role="banner">
  
  <div class="banner container">
    <div class="row">
      <div class="logo col-xs-12 col-sm-4 vcenter">
            <? mytheme_custom_logo();?>
      </div>
      <div class="search-bar-container col-xs-12 col-xs-offset-0 col-sm-4 col-sm-offset-4 vcenter">
          <?php  get_search_form(); ?>
      </div>
    </div>
  </div>
    
<div class="container navbar navbar-default navbar-static-top ">  
     <div class="row">
        <div class="col-xs-12">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <nav class="collapse navbar-collapse" role="navigation">
              <div class="row">
              <?php
              if (has_nav_menu('primary')) :
                wp_nav_menu([
                 'theme_location' => 'primary',
                 'walker' => new wp_bootstrap_navwalker(),
                 'menu_class' => 'nav navbar-nav'
                  ]);
              endif;
              ?>   
              </div>          
            </nav>
            
        </div>
      </div>
</div> 
</header>