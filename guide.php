<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'fabthemes_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function fabthemes_theme_guide(){
		echo '

<div id="welcome-panel" class="about-wrap">

	<div class="wpbadge" style="float:left; margin-right:30px; "><img src="'. get_template_directory_uri() . '/screenshot.jpg" width="250" height="200" /></div>

	<div class="welcome-panel-content">

	<h1>'.wp_get_theme().' WordPress theme!</h1>

	<p class="about-text"> '.wp_get_theme().' is a premium WordPress theme. This is a WordPress 3+ ready theme built on the bootstrap 3 framework. </p>
	<div class="changelog ">
		<h3>Required plugins </h3>
		<p>The theme often requires few plugins to work the way it is originally intented to. You will find a notification on the admin panel prompting you to install the required plugins. Please install and activate the plugins.  </p>
		<ol>
			<li><a href="http://wordpress.org/extend/plugins/options-framework/">Options framework</a></li>
		</ol>
		</div>
	</div>
	</div>

		';


}
