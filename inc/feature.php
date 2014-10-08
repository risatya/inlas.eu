<?php
/**
 * The template for displaying all pages.
 *
  Template name:Portfolio
  
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package web2feel
 */
?>
<div class="row">
		<ul class="slides">
		<div id="headertopp" class="header-posisi" style="top: -40px;">
						<span class="one" style="font-family:'Times New Roman', Times, serif;font-style:italic;font-size:16px;font-weight:bold;">Help is our motto</span>
						<span id="established" style="font-family:'Times New Roman', Times, serif;font-style:italic;font-size:16px;font-weight:bold">A good counsel is worth than a good lawsuit</span><hr>
					<div><?php echo do_shortcode('[GTranslate]')?></div>
		</div>
		    <li class="hilang">
				<img width="100%" class="grayscale" src="<?php echo get_template_directory_uri(); ?>/images/main-bg.jpeg"/>
			<li>
		</ul>
</div>
<div class="fwidgets">
	<div class="container">
		<div class="row">
			<div class="col-sm-2 homewidget">
			</div>
			<div class="col-sm-2 homewidget">
				<h3><a data-toggle="tab" href="#sectionA">Home</a></h3>
			</div>
			<div class="col-sm-2 homewidget">
				<h3><a data-toggle="tab" href="#sectionB">Service</a></h3>
			</div>
			<div class="col-sm-2 homewidget">
				<h3><a data-toggle="tab" href="#sectionC">About Us</a></h3>
			</div>
			<div class="col-sm-2 homewidget">
				<h3><a data-toggle="tab" href="#sectionD">Contact</a></h3>
			</div>
			<div class="col-sm-2 homewidget">
			</div>
		</div>
	</div>
</div>
