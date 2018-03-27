<?php

$args = array('category_name' => 'web-design',
              'order' => 'ASC'
             );
$category_posts = new WP_Query($args);

if($category_posts->have_posts()) :
while($category_posts->have_posts()) :
$category_posts->the_post();
?>

<li class="skills__list__item"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>


<?php
endwhile;
else:
?>

Oops, there are no posts.

<?php
endif;
?>
