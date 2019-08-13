<?php
/*
 Display Template Name: Contact Us
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
<div class="contact-page-section">
  <div class="row">
  <?php
  if( have_rows('contact_flexible_content') ): 
    while ( have_rows('contact_flexible_content') ) : the_row();
    if( get_row_layout() == 'contact_form' ):
     ?>
   <div class="col-md-7"> 
   	<div class="contact-form">
    <?php the_sub_field('contact_form_text');?>
   	</div>
   </div>
   <?php
 endif;
endwhile;
endif;
  ?>

  
   <div class="col-md-5 con-add">
   <?php
  if( have_rows('contact_flexible_content') ): 
    while ( have_rows('contact_flexible_content') ) : the_row();
    if( get_row_layout() == 'contect_text_box' ):
     ?>
   	<div class="address-section-one">
    <?php the_sub_field('text_box_one');?>
    <hr />
   	</div>
   	<?php
 endif;
endwhile;
endif;
  ?>

  <?php
  if( have_rows('contact_flexible_content') ): 
    while ( have_rows('contact_flexible_content') ) : the_row();
    if( get_row_layout() == 'contect_text_box' ):
     ?>
   	<div class="address-section-two">
    <?php the_sub_field('text_box_two');?>
    <hr />
   	</div>
   	<?php
 endif;
endwhile;
endif;
  ?>

  <?php
  if( have_rows('contact_flexible_content') ): 
    while ( have_rows('contact_flexible_content') ) : the_row();
    if( get_row_layout() == 'contect_text_box' ):
     ?>
   	<div class="address-section-three">
    <?php the_sub_field('text_box_three');?>
    
   	</div>
   	<?php
 endif;
endwhile;
endif;
  ?>
  <a class="btn-2" href="<?php echo site_url();?>/menus/" role="button">View Menu</a>
   </div>

   
  </div>
</div>
</div>



<?php
get_footer();
?>