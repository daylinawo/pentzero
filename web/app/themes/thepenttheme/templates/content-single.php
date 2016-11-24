<?php while (have_posts()) : the_post(); ?>
 <div class="container">
      <div class="row">
      
        <div class="left-panel col-xs-12 col-sm-8">
          <article <?php post_class(); ?>>
            <header class="sub">
              <h1><?php the_title(); ?></h1>
            </header>
            <div class="entry-content">
              <?php the_content(); ?>
              <?php get_template_part('templates/entry-meta'); ?>
            </div>
            <footer>
              <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
            </footer>
          </article>
        </div>

        <div id="sidebar" class="widgets-area col-xs-12 col-sm-4" style="height:auto">
                <?php get_sidebar(); ?>
            </div>
        </div>

      </div>
</div>
<?php endwhile; ?>
