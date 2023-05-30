<?php get_header(); ?>
<div id="decor-post1"></div>
<div id="decor-post2"></div>
<div id = "content-post" class='post'>
<?php 
    if(have_posts()): 
        while(have_posts()) : 
            the_post();
			?>
				<!-- <a href="https://jakartafilmweek.com/">
					<img src="https://res.cloudinary.com/dndidjvfj/images/v1665547958/Web-Banner-Community-tanpa-kotak-04/Web-Banner-Community-tanpa-kotak-04.png?_i=AA" alt="JFW" style="margin-top: -60px; z-index: 1; margin-bottom: 25px; max-height: 200px">
				</a> -->
			<?php
			if (has_post_thumbnail()) {
              echo "<div id='thumbnail' class='post'>";
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
    <div id="comment-post">
        <img id="tulis" src="https://res.cloudinary.com/dndidjvfj/images/v1665508939/feather/feather.png?_i=AA" alt="tulis"><?php
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
?>
	</div>
	<script>
      	let pesan = document.createElement("img");
        pesan.setAttribute("src", "https://res.cloudinary.com/dndidjvfj/images/v1665509144/visi/visi.png?_i=AA");
        pesan.setAttribute("alt", "pesan");
        pesan.setAttribute("id", "pesan");
        document.querySelector(".comment-form-comment").appendChild(pesan);
	</script>
</div>
<?php get_footer(); ?>