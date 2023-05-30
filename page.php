<?php get_header(); ?>
<div id="decor-post1"></div>
<div id="decor-post2"></div>
<div id = "content-post">
<?php 
    if(have_posts()): 
        while(have_posts()) : 
            the_post();
			if (has_post_thumbnail()) {
              echo "<div id='thumbnail'>";
              echo the_post_thumbnail('on-post-thumbnail');
              echo "</div>";
            }
			?>
			<h2 id= "title-post"><?php the_title(); ?></h2>
			<div id="decor-post3"></div>
            <img id="vr-glass" src="https://res.cloudinary.com/dndidjvfj/images/v1665508944/vr_glasses/vr_glasses.png?_i=AA" alt="vr">
            <?php 
			the_content();
        endwhile; 
    endif; 
?>
    <div id="decor-post4"></div>
    <div id="decor-post5"></div>
    <div id="decor-post6"></div>
</div>
<?php get_footer(); ?>