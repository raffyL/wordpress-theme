<?php
  
    get_header();
  ?>
<div class="container">
	</div>
	 <div class="container-fluid my-fluid-container">
	 		<div class='row'>
		 		<?php

		               			//The loop begins
		               		if (have_posts()) : 
		               			
		               			while (have_posts()) :
		               				the_post();
		               					the_content();
		               			
		               			endwhile;
		               		
		               		endif;

		        ?> 
	        </div>
</div>
<?php get_footer(); ?>