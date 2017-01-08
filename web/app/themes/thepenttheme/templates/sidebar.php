<?php
if ( is_single() ){
		echo '<div id="posts-sidebar" class="widgets-area">';
			  dynamic_sidebar('sidebar-latest');
			  dynamic_sidebar('sidebar-recommend');
			          related_posts();
 
		echo '</div>';
}
?>