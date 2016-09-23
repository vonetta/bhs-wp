
<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="container">
    <div class="row">
      <div class="col-md-9">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- tbs class for headers -->
          <div class="page-header">
            <!-- the_title() is WP function that shows the title of the post -->
            <h1><?php the_title(); ?> ("from single.php")</h1>
            <?php
              $thumbnail_id = get_post_thumbnail_id();
              $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
              $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
            ?>
            <p class="featured-image">
              <img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>">

            </p>

          </div>
          <!-- WP function that outputs post content -->
          <?php the_content(); ?>
          <p><em>By <?php the_author(); ?>
               on <?php echo the_time('l, F jS, Y'); ?>
               in <?php the_category( ', ' ); ?>
               <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></em>
            </p>
            <hr>
            <?php comments_template(); ?>
        <?php endwhile; else: ?>
           <!-- we run this else if there is no content -->
          <div class="page-header">
            <h1>Wups!</h1>
          </div>

          <p>Looks like we have no content for this page?</p>

        <?php endif; ?>
      </div>

       <?php get_sidebar( 'blog' ); ?>

     <?php get_footer(); ?>
