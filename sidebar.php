
<section id="sidebar">
	<?php //if (function_exists('submenu') && $options['submenu-show']) { submenu(); } ?>

	<?php
	if(isset($options["alt_category"]) &&  !empty($options["alt_category"]))
	{


		dynamic_sidebar('Main-'.$options["alt_category"].'-Sidebar'); 

	}
	else
	{
		dynamic_sidebar('Main-Sidebar');

	}
	  ?>
	<div class="clear"></div>
</section>