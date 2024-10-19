<!-- 固定ページ：実績一覧ページ -->
<!-- 管理画面より、slug名「works」で固定ページを投稿 -->
<!-- 実装の参考：https://shogo-log.com/setup-pagenation/ -->
 <?php get_header();?>
 <main>
<section id="list">
    <h2 class="list__title">Works</h2>
    <p class="list__subtitle">-実績-</p>

    <ul class="list__content">
        <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
                <li class="list__content--item">
            <?php get_template_part('template-parts/loop','works');?>
                </li>
                <?php endwhile;?>
                <?php endif; ?>
            

</section>
 </main>

 <?php get_footer(); ?>