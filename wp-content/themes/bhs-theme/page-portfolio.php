<?php
/*
  Template Name: Page Portfolio Grid Template
 */
?>
<?php get_header(); ?>

  <div class="container">
     <div class="row">

      <?php
        $args = array(
          'post_type' => 'portfolio'
        );
        $the_query = new WP_Query( $args );
      ?>

      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="col-xs-12 col-sm-3 portfolio-piece">
       <?php
         // grab the id of the thumbnail
         $thumbnail_id = get_post_thumbnail_id();
         // grab the url of the thumbnail
         $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
       ?>
        <!-- dynamically create images -->
        <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"></a></p>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      </div>
       <?php $portfolio_count = $the_query->current_post + 1; ?>
      <?php if ( $portfolio_count % 4 === 0): ?>
    </div>
    <div class="row">
    <?php endif; ?>

      <?php endwhile; endif; ?>

    </div><!-- END .row -->

<?php get_footer(); ?>
