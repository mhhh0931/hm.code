<!-- 固定ページ：実績一覧ページ -->
<!-- 管理画面より、slug名「works」で固定ページを投稿 -->
<!-- 実装の参考：https://shogo-log.com/setup-pagenation/ -->
 <?php get_header();?>
 <main>
<section id="list">
    <h2 class="list__title">Works</h2>
    <p class="list__subtitle">-実績-</p>

    <ul class="list__content">
        <?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 $the_query = new WP_Query( array(
     'post_status' => 'publish',
     'paged' => $paged,
     'posts_per_page' => 4, // 表示件数
     'orderby'     => 'date',
     'order' => 'DESC',
     'post_type' => 'works'
 ) );
  
  
 if ($the_query->have_posts()) :?><?php
    while ($the_query->have_posts()) : $the_query->the_post();?>
    <li class="list__content--item">
        <a href="<?php echo get_permalink(); ?>">
        <?php the_title(); ?>
        </a>
//コンテンツ
<?php endwhile; ?>
<?php endif; ?>
<!-- pagenation -->
<div class="pagenation">
<?php 
if ($the_query->max_num_pages > 1) {
    echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%/',
        'current' => max(1, $paged),
        'mid_size' => 1,
        'total' => $the_query->max_num_pages
    ));
}
wp_reset_postdata();?>
</div><!-- /pagenation -->
            

</section>
 </main>

 <?php get_footer(); ?>