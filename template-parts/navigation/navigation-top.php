<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="main_menu" class="main_menu">

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

</nav>
