<?php get_header(); ?>
<div class="content-container clear">
          <div class="col-md-9">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- tbs class for headers -->
          <div class="page-header">
            <!-- the_title() is WP function that shows the title of the post -->
            <h1><?php the_title(); ?></h1>
          </div>
          <!-- WP function that outputs post content -->
          <?php the_content(); ?>

        <?php endwhile; else: ?>
           <!-- we run this else if there is no content -->
          <div class="page-header">
            <h1>Wups!</h1>
          </div>

          <p>Looks like we have no content for this page?</p>

        <?php endif; ?>
      </div>
      <div class="col-md-3">
        <!-- this will be our sidebar so we rename the heading -->
        <?php get_sidebar(); ?>
   </div>

   <!--widgets-->
        <div class="row">
  <div class="col-md-4">
      <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
  </div>
  <div class="col-md-4">
    <?php if ( dynamic_sidebar( 'front-center' ) ); ?>
 </div>
  <div class="col-md-4">
    <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
  </div>
   </div>

<?php get_footer(); ?>
