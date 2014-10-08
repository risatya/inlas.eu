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

get_header(); ?>
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

<script type="text/javascript">
$(document).ready(function(){
    $("#myTab a").click(function(e){
    	e.preventDefault();
    	$(this).tab('show');
    });
});
</script>
<style type="text/css">

</style>

<?php
	$text1 = ft_of_get_option('welcome_text');
	$text2 = ft_of_get_option('service_text');
	$text3 = ft_of_get_option('about_text');
	$text4 = ft_of_get_option('privacy_text');
	$title1 = ft_of_get_option('welcome_text_title');
	$title2 = ft_of_get_option('service_text_title');
	$title3 = ft_of_get_option('about_text_title');
	$title4 = ft_of_get_option('privacy_text_title');

?>
<div class="row">
<div class="col-sm-3 homewidget">
			</div>
			<div class="col-sm-6">
				<div class="tab-content">
				<div id="sectionA" class="tab-pane fade in active">
					<div id="heading"></div>
					<center><h2><?php echo ($title1); ?></h2></center>
					<div class="garisbawah"></div>
					<p><?php echo ($text1); ?></p>
				</div>
				<div id="sectionB" class="tab-pane fade">
					<div id="heading"></div>
				<center><h2><?php echo ($title2); ?></h2></center>
				<div class="garisbawah"></div>
					<p><?php echo ($text2); ?></p>
				</div>
				<div id="sectionC" class="tab-pane fade">
					<div id="heading"></div>
				<center><h2><?php echo ($title3); ?></h2></center>
				<div class="garisbawah"></div>
					<p><?php echo ($text3); ?></p>
				</div>
				<div id="sectionD" class="tab-pane fade">
					<div id="heading"></div>
				<center><h2>Contact</h2></center>
					<p><?php echo do_shortcode('[contact-form-7 id="13" title="Contact form 1"]')?><p>
					<div style="clear:both;"></div>
				<div class="garisbawah"></div>
				</div>
				<div id="sectionE" class="tab-pane fade">
					<div id="heading"></div>
				<center><h2><?php echo ($title4); ?></h2></center>
				<div class="garisbawah"></div>
					<p><?php echo ($text4); ?></p>
				</div>
				<p><?php //contact form ?></p>
				<div id="section_footer">
				</div>
			</div>
			</div>
			<div class="col-sm-3 homewidget">
			</div>
</div>
</div>

<?php get_footer(); ?>
