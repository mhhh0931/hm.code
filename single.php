<!-- 通常投稿の個別ページ -->
<!-- 主にポートフォリオの個別詳細ページを実装 -->
<?php get_header(); ?>
<main>
    <section id="detail">
        <h2 class="detail__title">Works</h2>
        <p class="detail__subtitle">-実績-</p>

        <div class="detail__list">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
        
                <div class="detail__img">
                <?php
                $pic = get_field('img'); // 'img'はACFで設定したフィールド名
                if ($pic) { // 値が存在する場合のみ処理
                    $pic_url = $pic['url'];
                    echo '<img src="' . esc_url($pic_url) . '" alt="画像">';
                } else {
                    echo '<p>画像が設定されていません。</p>'; // 値がない場合のメッセージ
                }
                ?>
            　　　　<a href="">
                　　<p class="detail__text">サイトを見る</p>
            　　　　</a>
        　　　　　</div>
        
        　　　　　　<dl class="detail__content">
        　　　　　　    <dt class="detail__content--title">サイト名</dt>
        　　　　　　    <dd class="detail__content--text"><?php the_field('name') ;?></dd>
        　　　　　　    <dt class="detail__content--title">コンセプト</dt>
        　　　　　　    <dd class="detail__content--text"><?php the_field('concept'); ?></dd>
        　　　　　　    <dt class="detail__content--title">使用言語</dt>
        　　　　　　    <dd class="detail__content--text"><?php the_field('tool');?></dd>
    　　　　　　　　　</dl>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

        <button class="detail__button">一覧に戻る</button>

 

    </section>
</main>

<?php get_footer(); ?>