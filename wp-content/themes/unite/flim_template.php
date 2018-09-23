<?php
/*
Template Name: Film
 */
?>

<?php
get_header();

$testimonials = new WP_Query( array(
  'post_type' => 'flims',
  'post_status' => 'publish',
  'posts_per_page' => '10',
) );


if( $testimonials->have_posts() ) :
?>
<div class="container">
  
    <?php
      while( $testimonials->have_posts() ) :
        $testimonials->the_post();
        ?>
        <div class="row">
          <div class="col-md-4"><?php the_post_thumbnail( 'medium' );  ?></div>
          <div class="col-md-8">
            <div style="font-size: 20px;">
              <a href="<?php the_permalink() ?>"><strong><?php the_title(); ?></strong></a>
            </div>
            <div>
              <p><?php the_content(); ?></p>
              <p><span style="font-weight: bold;">Ticket Price:</span> <i>$<?php the_field('ticket_price'); ?></i></p>
              <p><span style="font-weight: bold;">Release Date:</span> <?php the_field('release_date'); ?></p>
            </div>
          </div>
        </div>
          <hr>
          <div class="navigation"><p><?php posts_nav_link(); ?></p></div>

        <?php
      endwhile;
      wp_reset_postdata();
    ?>
 
  </div>
<?php
else :
  esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
endif;
get_footer();
?>