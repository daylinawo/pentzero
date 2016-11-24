<?php 
if(is_single()){
		echo '<div class="widgets-area col-xs-12 col-sm-8" style="float: right;">';
		dynamic_sidebar('sidebar-blog');
		echo '</div>';

	}else{
		dynamic_sidebar('sidebar-primary');
	}
?>
