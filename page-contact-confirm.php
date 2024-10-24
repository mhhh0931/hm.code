<?php get_header();?>

<main>
    <section id="contact__page">
        <div class="contact__wapper">
        <h2 class="contact__title">Contact</h2>
        <p class="contact__subtitle">-<?php the_title(); ?>-</p>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>