<?php

/*
	Template Name: Volunteer, No Sidebar
*/

get_header();  ?>

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class="main">
      <div class="section section--titleSection">
        <div class="container">
          <h2><?php the_title(); ?></h2>
        </div> <!-- /.container -->
      </div>

      <div class="section section--content">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="volunteer-content">
        <p>If you're interesting in volunteering with Dire Woofs please fill out our form below and send it to us at <a href="mailto:volunteer@direwoofs.com">volunteer@direwoofs.com</a></p>
      </div>
              <div class="download-button">
                <a class="download" href="volunteerapplication.pdf" download="">VOLUNTEER FORM</a>
              </div>
    </div> <!-- /.main -->


    <?php endwhile; // end the loop?>

<?php get_footer(); ?>
