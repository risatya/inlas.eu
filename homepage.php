<?php

get_header(); ?>
<div class="container"><!--
<div class="section-wide">
	<div class="row">
	<div class="section-title col-12">
		<h2> Latest Projects</h2>
		<p>Few of the latest portfolio items </p>
	</div>
	<div class="boxitems">
		 <?php
		 $portcat =ft_of_get_option('fabthemes_portfolio');
		 $query = new WP_Query( array( 'cat' =>$portcat,'posts_per_page' =>4 ) );
		 if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();	?>

		 <div class="col-sm-3 col-6 portbox">

		 <?php
			$thumb = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
			$image = aq_resize( $img_url, 750, 500, true ); //resize & crop the image
		 ?>

		 <?php if($image) : ?>
			<div class="hthumb">

			 	<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $image ?>"/></a>
		 	</div>
		 <?php endif; ?>

		 <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

		 </div>

		 <?php endwhile; endif; ?>

	</div>

	</div>
</div>

<div class="section-wide sec">
	<div class="row">
	<div class="section-title col-12">
		<h2> Latest Articles</h2>
		<p>Latest posts from the blog </p>
	</div>

	<div class="boxitems">
		 <?php
		 $port_cat =ft_of_get_option('fabthemes_portfolio');
		 $query = new WP_Query( array( 'cat' => -$port_cat,'posts_per_page' =>4 ) );
		 if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();	?>

		 <div class="col-sm-3 col-6 postbox">

		 <?php
			$thumb = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
			$image = aq_resize( $img_url, 750, 500, true ); //resize & crop the image
		 ?>

		 <?php if($image) : ?>
		 	<div class="hthumb">

			 	<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $image ?>"/></a>
		 	</div>

		 <?php endif; ?>

		 <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
		 <div class="hometa"> <?php web2feel_posted_on(); ?> </div>


		  <?php the_excerpt(); ?>
		 </div>

		 <?php endwhile; endif; ?>

	</div>

	</div>
</div>-->

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
<div class="col-sm-2 homewidget">
			</div>
			<div class="col-sm-8">
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
			<div class="col-sm-2 homewidget">
			</div>
</div>
</div>

<?php get_footer(); ?>
