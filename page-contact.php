<!-- 固定ページ：お問い合わせページを実装する場合に使用 -->
<!-- 管理画面より、slug名「contact」で固定ページを投稿 -->
<!-- 実装の参考：https://wp-master.club/view-contact-form7 -->

<?php get_header('custom');?>

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