<?php get_header(); ?>

  <div class="content-container clear">
    <!-- <div class="row"> -->
      <div class="col-md-12">
        <div class="page-header">
           <!-- gives us the name of the page itself -->
            <h1><?php wp_title(''); ?></h1>
        </div>

         <?php

            $args = array(
              'post_type'     => 'post',
              'category_name' => 'featured'
            );
            $the_query = new WP_Query( $args );
          ?>

         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
           <!-- Indicators -->
           <ol class="carousel-indicators">

             <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


               <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>"></li>

               <?php endwhile; endif; ?>
           </ol>

           <?php rewind_posts(); ?>
           <!-- Wrapper for slides -->
           <div class="carousel-inner" role="listbox">
             <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

               <div class="item <?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>">
            <?php
               // grab the id of the thumbnail
              $thumbnail_id = get_post_thumbnail_id();
              echo $thumbnail_id;
               // grab the url of the thumbnail
               $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
              // grab the meta of the thumbnail
              $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
                ?>
               <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>"  alt="<?php the_title(); ?> featured image"></a>
                 <div class="carousel-caption"><?php the_title(); ?></div>
               </div>
               <!-- END .item -->
             <?php endwhile; endif; ?>
           </div>
           <!-- END .carousel-inner -->

           <!-- Controls -->
           <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
           </a>
           <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
           </a>
         </div>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <!-- date() only shows date for post on that day, time() function better here -->
            <!-- add name in users section of Dashboard to offer better name display -->
            <p><em>By <?php the_author(); ?>
               on <?php echo the_time('l, F jS, Y'); ?>
               in <?php the_category( ', ' ); ?>
               <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></em>
            </p>

            <?php the_excerpt(); ?>
            <hr>
          </article>
          <!-- WP function that outputs post content -->


        <?php endwhile; else: ?>
           <!-- we run this else if there is no content -->
          <div class="page-header">
            <h1>Wups!</h1>
          </div>

          <p>Looks like we have no content for this page?</p>

        <?php endif; ?>
      </div>


</div>
    </div><!-- END .row -->

<?php get_footer(); ?>
