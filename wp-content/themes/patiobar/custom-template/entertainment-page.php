<?php
/*
  Display Template Name: Entertainment Page
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

 

<div class="entertainment-page-section">
   <div class="container">

   <?php
    $entertainments_category = get_terms( 'entertainments_category' );
    ?>
<?php
    foreach ( $entertainments_category as $member_group_term ) {
    $member_group_query = new WP_Query( array(
        'post_type' => 'entertainments',
        'posts_per_page' => -1,
        'meta_type' => 'NUMERIC', 
        'orderby'   => 'meta_value',
        'meta_key'  => 'music_date',
        'order'     => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'entertainments_category',
                'field' => 'slug',
                'terms' => array( $member_group_term->slug ),
                'operator' => 'IN'
            )
        )
    ) );
    ?>
   <h2 class="heading2 text-center" style="font-weight: bold;font-size: 34px;"> <?php the_field('many_market');?> <?php echo $member_group_term->name; ?></h2>
<div class="entertainment-grid">

  <div class="row">
   <?php $args = array(
           'post_type' => 'entertainments' ,
           'order' => 'ASC' ,
           'posts_per_page' => 6,
        
            ); ?>
           

           
           <?php
      while ( $member_group_query->have_posts() ) : $member_group_query->the_post(); ?>
					<div class="col-md-4 col-sm-6 iteams">

			
					<?php
			if ( has_post_thumbnail() ) {
         $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />'; 
           }
          }
          else{

            echo '<img class="img-responsive flsd"  src="http://demosrvr.com/wp/patiobar/wp-content/uploads/2018/07/img_patiobar_entertainment_thenerds.jpg" />'; 
          }
         ?>
		
		<div class="caption">
		<h4>
        <?php the_title();?>
        </h4>
		<div class="music-date">
    <?php 
    $music_date1 = get_field('music_date');
   $arr = explode('/', $music_date1);
  echo $newDate = $arr[0].'/'.$arr[1];

     ?>
      
    </div>
		<div class="music-time"><?php the_field('music_time');?></div>

		</div>
		</div>
       <?php endwhile; ?>
       
       <?php wp_reset_postdata(); ?>
  </div>


  </div>
<?php
}
?>



  </div>
 
 </div>

 

<?php
get_footer();
?>