<?php
/*
 Display Template Name: Home Page
*/
get_header();

?>

<div class="patiobar_slider">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <?php
              $z = 0;            
              while( have_rows('home_slider') ): the_row();            
              $image = get_sub_field( 'home_slider_image' ); ?>
             <?php $image1 = get_sub_field( 'home_slider_logo_image' ); ?>
          <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>" style="background-image:url(<?php echo $image['url']; ?>);">
            <div class="container carousel-caption-table">
              <div class="carousel-caption-table-cell text-center">
               <div class="banner-header-logo">
                <img src="<?php echo $image1['url']; ?>">
                </div>
                <h1 class="big_heading"><?php the_sub_field('home_slider_title');?></h1>
                <!-- <a class="btn btn-lg btn-primary small_outline_btn outline_btn_hover" href="<?php the_sub_field('button_url');?>" role="button"><?php the_sub_field('button_title');?></a> -->
              </div>
            </div>
          </div>
       <?php
        $z++;           
        endwhile; 
        ?>

        </div>
      </div>
      
      <div class="drop_arrow">
 

<a href="#menu-section"><img src="<?php echo site_url();?>/wp-content/uploads/2018/07/banner_drop_arrow.png"></a>

<ul class="more-info">
 
 <li class="manasquan-inlet">
 <a href="https://www.tides.info/?command=view&location=Manasquan+Inlet%2C+USCG+Station%2C+New+Jersey">Manasquan Inlet Tide Chart</a>
 </li>
 <li class="sunset">
<?php dynamic_sidebar('sidebar-4');?>
 </li>
 <li class="direction-lan">
 -74.040592W, 40.10195N
 </li>
</ul>
</div>

</div>


 

<div id="menu-section" class="home-menu-section">
<?php
  if( have_rows('home_menu_flexible_section') ): 
    while ( have_rows('home_menu_flexible_section') ) : the_row();
    if( get_row_layout() == 'home_menu_image_and_title' ):
     ?>
   <?php $image3 = get_sub_field('menu_banner_image', 'full'); ?>
<div class="auick_resource" style="background-image:url(<?php echo $image3['url'];?>);">

 <div class="icon-title-button">
 <h2 class="white_heading"><a href="<?php the_sub_field('menu_title_url');?>"><?php the_sub_field('menu_title');?></a></h2>

 </div>
</div>

<?php
 endif;
endwhile;
endif;
  ?>
</div>

<div id="entertainment-section" class="home-entertainment-section">
<?php
  if( have_rows('home_entertainment_flexible_section') ): 
    while ( have_rows('home_entertainment_flexible_section') ) : the_row();
    if( get_row_layout() == 'home_entertainment_image_and_title' ):
     ?>
   <?php $image = get_sub_field('entertainment_image', 'full'); ?>
<div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
 
 <div class="container">
 <div class="icon-title-button">
 <h2 class="white_heading"><a href="<?php the_sub_field('entertainment_title_url');?>"><?php the_sub_field('entertainment_title');?></a></h2>
  </div>
 </div>
</div>

<?php
 endif;
endwhile;
endif;
  ?>
</div>

<div class="direction-photo-video-section">
<div class="row">

  <?php
  if( have_rows('home_direction_flexible_section') ): 
    while ( have_rows('home_direction_flexible_section') ) : the_row();
    if( get_row_layout() == 'home_direction_image_and_title' ):
     ?>
   <?php $image = get_sub_field('direction_inner_image', 'full'); ?>
<div class="col-sm-4">
<div id="direction-image" class="market_expertise_image" style="background-image:url(<?php echo $image['url'];?>);">
 
 <div class="market_expertise_content_section table">
 <div class="tab-cell"> <a href="<?php the_sub_field('direction_title_url');?>"><?php the_sub_field('direction_title');?></a> </div>
  </div>
 
</div>
 </div>
<?php
 endif;
endwhile;
endif;
  ?>

<?php
  if( have_rows('home_photo_flexible_section') ): 
    while ( have_rows('home_photo_flexible_section') ) : the_row();
    if( get_row_layout() == 'home_photo_image_and_title' ):
     ?>
   <?php $image = get_sub_field('photo_inner_image', 'full'); ?>
<div class="col-sm-4">
<div id="photo-box" class="market_expertise_image" style="background-image:url(<?php echo $image['url'];?>);">
 
 <div class="market_expertise_content_section table">
 <div class="tab-cell"><a href="<?php the_sub_field('photo_title_url');?>"><?php the_sub_field('photo_title');?></a> </div>
  </div>
 
</div>
 </div>
<?php
 endif;
endwhile;
endif;
  ?>

 <?php
  if( have_rows('home_video_flexible_section') ): 
    while ( have_rows('home_video_flexible_section') ) : the_row();
    if( get_row_layout() == 'home_photo_image_and_title' ):
     ?>
   <?php $image = get_sub_field('video_image', 'full'); ?>
<div class="col-sm-4">
<div id="video-box-image" class="market_expertise_image" style="background-image:url(<?php echo $image['url'];?>);">
 
 <div class="market_expertise_content_section table">
 <div class="tab-cell"><a href="<?php the_sub_field('video_title_url');?>"><?php the_sub_field('video_title');?></a> </div>
  </div>
 
</div>
 </div>
<?php
 endif;
endwhile;
endif;
  ?>


</div>


  
</div>



<div id="newsletter-section" class="home-newsletter-section">
<?php
  if( have_rows('newsletter_flexible_section') ): 
    while ( have_rows('newsletter_flexible_section') ) : the_row();
    if( get_row_layout() == 'newsletter_image_and_form' ):
     ?>
   <?php $image = get_sub_field('newsletter_image', 'full'); ?>
<div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
 
 <div class="container">
 <div class="newsletter-form-section">
<?php the_sub_field('newsletter_form');?>
  </div>
 </div>
</div>

<?php
 endif;
endwhile;
endif;
  ?>
</div>


<?php
get_footer();
?>