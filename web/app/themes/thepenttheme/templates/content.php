
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
  
  <div class="blog-post">
      <header>    
        <?php the_title( sprintf('<h2 class="entry-header"><a href="%s">', esc_url(get_permalink() ) ),'</a></h2>'); ?>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>

    <div class="row">
        <div class="col-xs-12 col-sm-4">
           <?php if(has_post_thumbnail() ){ ?>
            <div class="thumbnail-img"><?php the_post_thumbnail(); }?></div>
        </div>
        
        <div class="col-xs-12 col-sm-8">
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
        </div>

    </div>
</div>
</article>


