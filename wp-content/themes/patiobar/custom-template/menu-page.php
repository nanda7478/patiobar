<?php
/*
 Display Template Name: Menu Page
*/
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('banner_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="table">
 <div id="post-<?php the_ID(); ?>" class="tab-cell">
 <h1 class="big_heading">
  <?php the_title();?>
 </h1>
</div>
</div>
</div>
<?php endwhile;?>

<div class="container">
<div class="tabss">
	<ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
		<li class="nav-item">
			<a class="nav-link menusss">MENU</a>
		</li>
        <li class="nav-item">
			<a href="#raw-bar" class="nav-link active" data-toggle="tab" role="tab" aria-controls="raw-bar">Raw Bar</a>
		</li>
		<li class="nav-item">
		<a href="#snacks" class="nav-link" data-toggle="tab" role="tab" aria-controls="snacks">Snacks</a>
		</li>
		<li class="nav-item">
		<a href="#salads" class="nav-link" data-toggle="tab" role="tab" aria-controls="salads">Salads</a>
		</li>
		<li class="nav-item">
	    <a href="#baskets" class="nav-link" data-toggle="tab" role="tab" aria-controls="baskets">Baskets</a>
		</li>
		<li class="nav-item">
	    <a href="#fired-pizza" class="nav-link" data-toggle="tab" role="tab" aria-controls="fired-pizza">Wood Fired Pizza</a>
		</li>
		<li class="nav-item">
	    <a href="#burgers-sandwiches" class="nav-link" data-toggle="tab" role="tab" aria-controls="burgers-sandwiches">Burgers & Sandwiches</a>
		</li>
		<li class="nav-item">
	    <a href="#sides" class="nav-link" data-toggle="tab" role="tab" aria-controls="sides">Sides</a>
		</li>
		<li class="nav-item">
	    <a href="#children-menu" class="nav-link" data-toggle="tab" role="tab" aria-controls="children-menu">Children’s Menu</a>
		</li>
		<li class="nav-item">
	    <a href="#drinks-specials" class="nav-link" data-toggle="tab" role="tab" aria-controls="drinks-specials">Drinks & Specials</a>
		</li>
     
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#raw-bar" data-toggle="tab">Raw Bar</a>
            <a class="dropdown-item" href="#snacks" data-toggle="tab">Snacks</a>
            <a class="dropdown-item" href="#salads" data-toggle="tab">Salads</a>
            <a class="dropdown-item" href="#baskets" data-toggle="tab">Baskets</a>
            <a class="dropdown-item" href="#fired-pizza" data-toggle="tab">Wood Fired Pizza</a>
            <a class="dropdown-item" href="#burgers-sandwiches" data-toggle="tab">Burgers & Sandwiche</a>
            <a class="dropdown-item" href="#sides" data-toggle="tab">Sides</a>
            <a class="dropdown-item" href="#children-menu" data-toggle="tab">Children’s Menu</a>
            <a class="dropdown-item" href="#drinks-specials" data-toggle="tab">Drinks & Specials</a>
          </div>

  </li> 



	</ul>
	<div class="tab-content">
		<div class="tab-pane fade show active" id="raw-bar" role="tabpanel">
		 <?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'raw-bar'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="raw-bar-content">
             <?php the_content();?>
			</div>
			<?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
		</div><!-- raw-bar-menu -->

		<div class="tab-pane fade" id="snacks" role="tabpanel">
			<?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'snacks'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="snacks-content">
             <?php the_content();?>
			</div>
			<?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
		</div><!-- snacks menu -->


		<div class="tab-pane fade" id="salads" role="tabpanel">
			<?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'salads'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="snacks-content">
             <?php the_content();?>
			</div>
			<?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
		</div><!-- salads menu -->


		<div class="tab-pane fade" id="baskets" role="tabpanel">
			<?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'baskets'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="baskets-content">
             <?php the_content();?>
			</div>
			<?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
		</div><!-- basket menu -->



        <div class="tab-pane fade" id="fired-pizza" role="tabpanel">
        	<?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'wood-fried-pizza'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="wood-fried-pizza-content">
             <?php the_content();?>
			</div>
			<?php endwhile; ?>
       <?php wp_reset_postdata(); ?>

        </div><!-- fired pizza menu -->


        <div class="tab-pane fade" id="burgers-sandwiches" role="tabpanel">
        	<?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'burgers-sandwiches'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="burgers-sandwiches-content">
             <?php the_content();?>
			</div>
			<?php endwhile; ?>
       <?php wp_reset_postdata(); ?>

        </div><!-- burgers-sandwiches menu -->


        <div class="tab-pane fade" id="sides" role="tabpanel">
        	<?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'sides'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="sides-content">
             <?php the_content();?>
			</div>
			<?php endwhile; ?>
       <?php wp_reset_postdata(); ?>

        </div><!-- sides menu -->

        <div class="tab-pane fade" id="children-menu" role="tabpanel">
        	<?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'childrens-menu'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="childrens-menu-content">
             <?php the_content();?>
			</div>
			<?php endwhile; ?>
       <?php wp_reset_postdata(); ?>

        </div><!-- children-menu -->

        <div class="tab-pane fade" id="drinks-specials" role="tabpanel">
        	<?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'drinks-specials'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="drinks-specials-content">
             <?php the_content();?>
			</div>
			<?php endwhile; ?>
       <?php wp_reset_postdata(); ?>

        </div><!-- drinks-specials menu -->



	</div>
</div>
</div><!-- container-->

<?php
get_footer();
?>