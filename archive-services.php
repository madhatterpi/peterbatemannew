
<section class="banner"
  style="
  background-image: url('<?= get_template_directory_uri(); ?>/dist/images//hero/services-ba.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  ">
  <div class="banner__overlay"></div>
  <img src="<?php echo $url ?>" />
  <div class="banner__text">
  	<h1 class="banner__header">Services</h1>
  	<div class="banner__subheader">Let me do the nerdy bits</div>
  </div>
</section>
<?php get_template_part('templates/page', 'services'); ?>
<?php get_template_part('templates/page', 'review'); ?>
<?php get_template_part('templates/page', 'get-started'); ?>
