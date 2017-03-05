
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="blog-item">
      
        <?php if(has_post_thumbnail() ){ 
              $perma = array(
              'before' => '<a href="'.esc_url(get_permalink() ).'" class="overlay">',
              'after' => '</a>',
              );
            ?> 

            <div class="thumbnail-img">
                  <? the_post_thumbnail();  ?>
                      <? echo $perma['before']; ?>

                      <?php             
                       $the_post_type = get_post_type();

                      switch ($the_post_type){
                        case 'videos':
                          print '<span class="post-type glyphicon glyphicon-play"></span>';
                          break;
                        case 'gallery':
                          print '<span class="post-type glyphicon glyphicon-camera"></span>';
                          break;
                        default: 
                          print 'nothing.';
                          break;
                      }
                      ?>
                <? echo $perma['after'];
            } // closing if statement parentheses
            ?>
             </div>
    
        <header class="l-p-info">   
        <h3 class="entry-header">         
              <?php the_title( sprintf('<a href="%s">', esc_url(get_permalink() ) ),'</a>'); ?>
            </h3>
 
        </header>

    </div>
</article>
