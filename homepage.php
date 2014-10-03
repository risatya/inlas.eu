<?php
/**
 * Template name:Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package web2feel
 */
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

		 <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
		 
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

		 <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
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
	.bs-example{
		margin: 20px;
	}
</style>
<div class="row">
<div class="bs-example">
<center>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#sectionA">Section A</a></li>
        <li><a data-toggle="tab" href="#sectionB">Section B</a></li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#dropdown1">Dropdown1</a></li>
                <li><a data-toggle="tab" href="#dropdown2">Dropdown2</a></li>
            </ul>
        </li>
    </ul>
</center>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
            <h3>Section A</h3>
            <p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Section B</h3>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        <div id="dropdown1" class="tab-pane fade">
            <h3>Dropdown 1</h3>
            <p>WInteger convallis, nulla in sollicitudin placerat, ligula enim auctor lectus, in mollis diam dolor at lorem. Sed bibendum nibh sit amet dictum feugiat. Vivamus arcu sem, cursus a feugiat ut, iaculis at erat. Donec vehicula at ligula vitae venenatis. Sed nunc nulla, vehicula non porttitor in, pharetra et dolor. Fusce nec velit velit. Pellentesque consectetur eros.</p>
        </div>
        <div id="dropdown2" class="tab-pane fade">
            <h3>Dropdown 2</h3>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis dis parturient.</p>
        </div>
    </div>
</div>
</div>
</div>

<?php get_footer(); ?>
