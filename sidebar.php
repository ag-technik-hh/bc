<section id="sidebar">
	<div id="sidebar-title">
		<h2>Sidebar</h2>
	</div>
	<?php // if (function_exists('submenu')) { submenu(); } ?>

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