<?php

/*
	Template Name: Available Dogs
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
          <!-- WYSIWYG content -->
          <?php the_content(); ?>


          <?php

            /*
            * Loop through avilable dogs
            */

            if(get_field('dogs')): ?>
              <div class="pup-profiles">
                <?php while(the_repeater_field('dogs')): ?>
                  <div class="pup-profile-content clearfix">
                  <img class="pup-image" src="<?php the_sub_field('avatar'); ?>" alt="<?php the_sub_field('name'); ?>">
                <div class="pup-description">
                  <h2><?php the_sub_field('name') ?></h2>
                  <p><?php the_sub_field('description') ?></p>
                  </div>
                  <div class="pup-details">
                  <p><span>Breed:</span> <?php the_sub_field('breed') ?></p>
                  <p><span>Age:</span> <?php the_sub_field('age') ?></p>
                  <p><span>Gender:</span> <?php the_sub_field('gender') ?></p>
                  <p><span>I Arrived On:</span> <?php the_sub_field('date_of_arrival') ?></p>
                  <p><span>I am:</span> <?php the_sub_field('good_with_kids') ?></p> 
                  <p><span>I am:</span> <?php the_sub_field('other_animals') ?></p>
                  </div>
                  </div>
                <?php endwhile; ?>
              </div>
              <div class="download-button">
               <a class="download" href="adoptionapplication.pdf" download="">ADOPTION FORM</a>
              </div>
             <?php endif; ?>


        </div>
      </div>
    </div> <!-- /.main -->


    <?php endwhile; // end the loop?>

<?php get_footer(); ?>
