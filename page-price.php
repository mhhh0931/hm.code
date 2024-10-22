<!-- 固定ページ：priceページ -->
<!-- 管理画面より、slug名「about」で固定ページを投稿 -->
<?php get_header();?>
<main>
<section id="price">
        <h2 class="price__title">Price</h2>
        <p class="price__subtitle">-制作費-</p>

        <div class="price__list">
            <div class="price__item">
                <h3 class="price__item--title">
                    Webサイト/LPの制作
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/21367.png" alt="">
                <div class="price__item--content">
                    <p class="price__item--content--left">
                        Wordpressによるオリジナルテーマや既存テーマを用いてコーポレートサイト、ランディングページの制作を行います。お客様からヒアリングした情報を元に目的に沿ったWebサイト制作を心がけます。
                    </p>
                    <ul class="price__item--content--right">
                        <li class="price__item--list">
                            <p>トップページ</p>
                            <p>¥30,000～</p>
                        </li>
                        <li class="price__item--list">
                            <p>下層ページ</p>
                            <p>¥10,000～</p>
                        </li>
                        <li class="price__item--list">
                            <p>ランディングページ</p>
                            <p>¥50,000～</p>
                        </li>
                    </ul>
                </div>

                <div class="price__item">
                    <h3 class="price__item--title">
                        コーディング
                    </h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/17567 1.png" alt="">
                    <div class="price__item--content">
                        <p class="price__item--content--left">
                            ご用意いただいたデザインを確認しながら、コーディングを行います。
                            また、お客様がスムーズに利用できる設計や、仕様になるようなWebサイト作りを行います。                            
                        <ul class="price__item--content--right">
                            <li class="price__item--list">
                                <p>トップページ</p>
                                <p>¥20,000～</p>
                            </li>
                            <li class="price__item--list">
                                <p>下層ページ</p>
                                <p>¥10,000～</p>
                            </li>
                            <li class="price__item--list">
                                <p>Wordpress化</p>
                                <p>¥20,000～</p>
                            </li>
                        </ul>
                    </div>

                    <div class="price__item">
                        <h3 class="price__item--title">
                            Webデザイン
                        </h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/17623 1.png" alt="">
                        <div class="price__item--content">
                            <p class="price__item--content--left">
                                お客様よりヒアリングした内容に合わせ、Webサイトの目的、意図に沿ったデザインを作成します。また視認性や、ユーザビリティを意識したデザインを提案します。
                            <ul class="price__item--content--right">
                                <li class="price__item--list">
                                    <p>トップページ</p>
                                    <p>¥20,000～</p>
                                </li>
                                <li class="price__item--list">
                                    <p>下層ページ</p>
                                    <p>¥10,000～</p>
                                </li>
                                <li class="price__item--list">
                                    <p>ランディングページ</p>
                                    <p>¥20,000～</p>
                                </li>
                            </ul>
                        </div>

            </div>
           </section>
            <section id="flow">
                <div class="flow__wapper">
                    <h2 class="flow__title">Flow</h2>
                      <p class="flow__subtitle">-制作の流れ-</p>

                
                    <div class="flow__list">
                        <div class="flow__item--img">
                             <div class="flow__item--circle">
                                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/price/11213 1.png" alt="">
                             </div>
                         </div>
                         <div class="flow__item--text">
                             <h3 class="flow__item--title">1.お問い合わせ</h3>
                             <p class="flow__item--content">まずはフォームよりお気軽にお問い合わせください。</p>
                         </div>
                    </div>
                    <div class="flow__list">
                         <div class="flow__item--img">
                             <div class="flow__item--circle">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/price/16774 1.png" alt="">
                              </div>
                          </div>
                
                        <div class="flow__item--text">
                            <h3 class="flow__item--title">2.ヒアリング</h3>
                            <p class="flow__item--content">お客さまの現状や課題、ご要望についてヒアリングさせて頂きます。</p>
                       </div>
                     </div>

                    <div class="flow__list">
                        <div class="flow__item--img">
                            <div class="flow__item--circle">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/price/21339 1.png" alt="">
                             </div>
                         </div>
               
                       <div class="flow__item--text">
                           <h3 class="flow__item--title">3.お見積りのご提示・打ち合わせ</h3>
                           <p class="flow__item--content">ヒアリング内容をもとにサイトの設計イメージや掲載内容、<br>ボリューム感をお見積り書と共にご提示いたします。
                            <br>メールによる打ち合わせの他に、zoomやお電話による打ち合わせも可能です。
                            </p>
                      </div>
                    </div>

                    <div class="flow__list">
                        <div class="flow__item--img">
                            <div class="flow__item--circle">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/price/17567 3.png" alt="">
                             </div>
                         </div>
               
                       <div class="flow__item--text">
                           <h3 class="flow__item--title">4.制作</h3>
                           <p class="flow__item--content">デザインに沿って、デザイン・コーディングをしていきます。
                            <br>それぞれのフェーズで都度進捗度合いをお伝えし、確認、修正を行なっていきます。
                            </p>
                      </div>
                    </div>

                    <div class="flow__list">
                        <div class="flow__item--img">
                            <div class="flow__item--circle">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/price/16230 (1) 1.png" alt="">
                             </div>
                         </div>
               
                       <div class="flow__item--text">
                           <h3 class="flow__item--title">5.納品・確認</h3>
                           <p class="flow__item--content">最終確認・修正作業をすべて完了させたら、本番サーバーにアップし、<br>Webサイトを公開・納品となります。<br>ファイルでの納品も可能です。
                            </p>
                      </div>
                    </div>

                    <div class="flow__list">
                        <div class="flow__item--img">
                            <div class="flow__item--circle">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pages/price/16780 (1) 1.png" alt="">
                             </div>
                         </div>
               
                       <div class="flow__item--text">
                           <h3 class="flow__item--title">6.保守・運用</h3>
                           <p class="flow__item--content">保守・運用をご希望の場合は、打ち合わせ時にお知らせください。<br>責任を持ってサポートさせていただきます。
                            </p>
                      </div>
                    </div>
                </div>
            </div>
            </section>
        
</main>

<?php get_footer(); ?>