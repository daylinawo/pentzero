
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
    
        <header class="l-p-info">   
        <h3 class="entry-header">         
           <?php             
               $the_post_type = get_post_type();

              switch ($the_post_type){
                case 'videos':
                  print '<span class="post-type glyphicon glyphicon-expand"></span>';
                  break;
                case 'gallery':
                  print '<span class="post-type glyphicon glyphicon-camera"></span>';
                  break;
                default: 
                  print 'nothing.';
                  break;
              }?>
              <?php the_title( sprintf('<a href="%s">', esc_url(get_permalink() ) ),'</a>'); ?>
            </h3>
 
        </header>

    </div>
</article>
