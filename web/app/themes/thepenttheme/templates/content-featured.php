
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="blog-item">
      
        <?php if(has_post_thumbnail() ){ 
              $perma = array(
              'before' => '<a href="'.esc_url(get_permalink() ).'">',
              'after' => '</a>',
              ); // If thumbnail: link the thumbnail
            ?> 

            <div class="thumbnail-img">
              <? echo $perma['before']; ?>
                  <? the_post_thumbnail();  ?>
              <? echo $perma['after'];
            } // closing if statement parentheses
            ?>
             </div>
    
        <header>           
          <?php the_title( sprintf('<h3 class="entry-header"><a href="%s">', esc_url(get_permalink() ) ),'</a></h3>'); ?>
          <p><time class="updated"  datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>
        </header>

    </div>
</article>
