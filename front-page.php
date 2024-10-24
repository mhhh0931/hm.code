<!-- トップページを読み込む -->
<!-- index.phpにも同じ内容を書くことを推奨 -->
<!-- 主にトップページとして実装 -->
<?php get_header(); ?>
<main>
        <section class="mainvisual">
            <div class="mainvisual__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/mainvisual.png" alt="">
                <div class="mainvisual__text">
                    <h2 class="mainvisual__title">hm.code</h2>
                    <p class="mainvisual__p">Portfolio-site</p>
                </div>
            </div>
        </section> 

        <section id="works">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/9161 1.png" alt="">
            <h2 class="works__title">Works</h2>
            <p class="works__subtitle">-実績-</p>

            
            <div class="splide" aria-label="Splideの基本的なHTML">

                <div class="splide__track">
                  <ul class="splide__list">
                  <?php if( have_posts() ): ?>
　                    <?php while( have_posts() ) : the_post() ?>
                         <li class="splide__slide">
                             <a href="<?php the_permalink();?>">
                                 <?php echo the_post_thumbnail(); ?>
                                 <p><?php the_title();?></p>
                                </a>
　　
                            </li>
　                    <?php endwhile; ?>
                    <?php endif; ?>
                    
                  </ul>
                </div>
                <ul class="splide__pagination"></ul>
                </div>
                <button class="works__button">View More</button>
              </section>
        
              <section id="service">
                <div class="service__wapper">
                    <div class="service__main">
                　　<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/15349.png" alt="">
                    <h2 class="service__title">Service</h2>
                    <p class="service__subtitle">-できること-</p>
                    </div>
                    
                    <div class="service__list">
                        <div class="service__item">
                            <h3 class="service__item--title">Webサイト/LPの制作</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/21367.png" alt="">
                            <p class="service__item--text">Wordpressによるオリジナルテーマや既存テーマを用いてコーポレートサイト、ランディングページの制作を行います。お客様からヒアリングした情報を元に目的に沿ったWebサイト制作を心がけます。</p>
                        </div>
                        <div class="service__item fade1">
                            <h3 class="service__item--title">コーディング</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/17567 1.png" alt="">
                            <p class="service__item--text">ご用意いただいたデザインを確認しながら、コーディングを行います。
                                また、お客様がスムーズに利用できる設計や、仕様になるようなWebサイト作りを行います。
                                </p>
                        </div>
                        <div class="service__item fade2">
                            <h3 class="service__item--title">Webデザイン</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/17623 1.png" alt="">
                            <p class="service__item--text">お客様よりヒアリングした内容に合わせ、Webサイトの目的、意図に沿ったデザインを作成します。
                                また視認性や、ユーザビリティを意識したデザインを提案します。
                                </p>
                        </div>
                    </div>
                    </div>
                    <button class="service__button">View More</button>
                </section>

                <section id="about">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/20101.png" alt="">
                    <h2 class="about__title">About</h2>
                    <p class="about__subtitle">-私について-</p>

                    <div class="about__list">
                        <div class="about__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/xAfAcoSOFv87ODc1727616888_1727616895.png" alt="">
                        </div>
                        <div class="about__item">
                            <h3 class="about__name">
                                <span class="about__color">H</span>itomi<span class="about__color"> M</span>urakami
                            </h3>
                            <p class="about__text">
                                看護師として病院から施設まで、様々な場所と環境で経験を積みました。人との関わりや寄り添う気持ちを大切に仕事を行ってきました。
                            </p>
                            <p class="about__text">
                                医療現場で培った経験を活かし、お客様の課題に寄り添い、目標達成できるサイト作りを心がけています。
                            </p>
                        </div>
                    </div>
                </section>

                <?php get_template_part('template-parts/contact'); ?>
<?php get_footer(); ?>
                