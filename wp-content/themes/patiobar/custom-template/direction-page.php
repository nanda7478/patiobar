<?php
/*
 Display Template Name: Directions Page
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
<div class="directions-page-section">
  <div class="row">
  <?php
  if( have_rows('direction_page_content') ): 
    while ( have_rows('direction_page_content') ) : the_row();
    if( get_row_layout() == 'content_and_map' ):
     ?>
   <div class="col-lg-7"> 
   	<div class="direction-map-content">
    <?php the_sub_field('content');?>
   	</div>
   </div>
   <?php
 endif;
endwhile;
endif;
  ?>

   <?php
  if( have_rows('direction_page_content') ): 
    while ( have_rows('direction_page_content') ) : the_row();
    if( get_row_layout() == 'content_and_map' ):
     ?>
 <?php $image = get_sub_field( 'map_image' ); ?>
   <div class="col-lg-5">
   	<div class="direction-map">
    <a href="https://www.google.com/maps/place/Jack+Baker's+Wharfside/@40.101949,-74.040612,15z/data=!4m5!3m4!1s0x0:0x462c8f13ee8cfb3b!8m2!3d40.101949!4d-74.040612" target="_blank">
   	<img src="<?php echo $image['url']; ?>">
    <?php the_sub_field('map_section');?>
    </a>
   	</div>
   </div>
<?php
 endif;
endwhile;
endif;
  ?>
   
  </div>
</div>
</div>

<?php
get_footer();
?>