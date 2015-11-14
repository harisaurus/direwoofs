<?php

/*
	Template Name: Home Page Template
*/

get_header();  ?>

<div class="main">
  <div class="hero">
    <!-- <h1>Dire Woofs</h1> -->
    <img class="hero-brand" src="<?php bloginfo('template_url'); ?>/images/avatar.png" alt="Dire Woofs Logo" />
  </div>

  <div class="section section--aboutus">
    <div class="container">
      <h2 class="sectionTitle">About Us</h2>

      <div class="grid grid--middle grid--wide u-spacer40">
        <div class="grid__item one-half">
          <p>
            Dire Woofs Dog Rescue was born from hearts wanting to help dogs in dire need, and specifically  high-risk dogs who are moments away from being euthanised, or are vulnerable to abuse. Dire Woofs is a virtual organization, no physical space to house rescued dog, and so we rely entirely on a community of committed fosters who open their hearts and homes to our dogs. More fosters means more saved dogs, and therefore Dire Woof fosters are an integral part of our operation.
          </p>
        </div>
        <div class="grid__item one-half">
          <img src="<?php bloginfo('template_url'); ?>/images/dog-playing.jpg" alt="" />
        </div>
      </div>

      <div class="grid grid--middle grid--wide">
        <div class="grid__item one-half">
          <img src="<?php bloginfo('template_url'); ?>/images/o-dog.jpg" alt="" />
        </div>
        <div class="grid__item one-half">
          <p>
            That said, we’re always on the lookout for individuals to join our pack. If you’re up for taking care of a four-legged friend, temporarily or permanently (‘foster fails’, its known to happen!), please reach out. Foster and Adoption applications are available on this site. Note: All applications are thoroughly screened, including reference checks and home visits.
          </p>
        </div>
      </div>
    </div> <!-- /.container -->
  </div>
</div> <!-- /.main -->

<?php get_footer(); ?>
