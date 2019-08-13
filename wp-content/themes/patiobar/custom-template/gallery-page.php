<?php
  /*
   Display Template Name: Gallery Page
  */
  $type  = (isset($_GET['type']) && (in_array($_GET['type'], ['image' ,'video'])))?$_GET['type']:'both';
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
 	<div class="gallery-page-section">
 		<div class="row">
 			<div class="col-lg-12 text-center">

<div class="main-imgs">
    <div id="big-image">
    
    </div>
<div id="gallery-image-title"></div>
</div>


<div class="small-images">
<?php         
 while( have_rows('gallery_images') ): the_row();            
$image1 = get_sub_field('images'); ?>
<?php if($image1) { ?>
   <?php if(in_array($type, ['both' , 'image' ])){ ?> 
   <div class="sss">  <a href="javascript:void(0);" data-href="<?php echo $image1['url']; ?>"  data-type="img"  data-test11="<?php the_sub_field('title');?>" >
    <img src="<?php echo $image1['url']; ?>">
   
    </a>
    </div>
  <?php }} else { ?>
   <?php if(in_array($type, ['both' , 'video' ])){ ?> 
   <div class="sss"> 
   <a href="javascript:void(0);" data-href="<?php the_sub_field('gallery_video');?>" data-type="video" class="video-1" data-test11="<?php the_sub_field('title');?>"><img src="<?php echo site_url();?>/wp-content/uploads/2018/07/img_patiobar_gallery_featuredimage.jpg" alt=""/></a>
   </div>
<?php }} ?>
<?php        
 endwhile; 
 ?>
</div>


 	</div>
 	</div>
 	</div>






</div>
 	

<?php
get_footer();
?>
<style type="text/css">
	.small-images img {
  width: 20%;
}
</style>
<script type="text/javascript">
	$(function(){
    load_default();
    function load_default(){
      var href = $('.small-images a:first').data("href");
      var type = $('.small-images a:first').data('type');
       var test11 = $('.small-images a:first').data('test11');
    
      if(href && type && test11){
        change_gallery(href , type , test11);
      }
    }
    $(".small-images a").click(function(e){
        var href = $(this).data("href");
        var type = $(this).data('type');
         var test111 = $(this).data('test11');

        
        change_gallery(href , type ,test111);
    });

    function change_gallery(href , type , test111){
          $design  = ' <img src="'+href+'">';
          if(type  ==  'video'){
            $design  = ' <iframe width="100%" height="624" src="'+href+'?autoplay=1" frameborder="0" allowfullscreen></iframe>';
          }

          $title = test111 ;
          $("#big-image").html($design);
          $("#gallery-image-title").html($title);
          

    }
});
</script>
