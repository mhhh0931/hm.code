<?php

/**
 * CSSやJSを読み込む
 */
function enqueue_scripts()
{
    // 共通ファイルを読み込み
    wp_enqueue_style(
        'global', // globalという名前を設定
        get_template_directory_uri().'/assets/styles/global.css', // パス
        array('splide-css'), // splide-cssを先に読み込む
        '',
        'all'
    );

    // front-pageページのみ読み込むファイル
    if (((is_front_page() && is_home()) || (is_front_page() && !is_home())) && !is_paged()) {
        wp_enqueue_style(
            'front-page', // front-pageという名前を設定
            get_template_directory_uri().'/assets/styles/front-page.css', // パス
            array('global')// global.cssより後に読み込む
        );
    }

    // 特定の固定ページ（slug: works）のみ読み込むファイル
    if (is_page('works')) {
        wp_enqueue_style(
            'works', // worksという名前を設定
            get_template_directory_uri().'/assets/styles/works.css', // パス
            array('global') // global.cssより後に読み込む
        );
    }

    if (is_page('price')) {
      wp_enqueue_style(
          'price', // priceという名前を設定
          get_template_directory_uri().'/assets/styles/price.css', // パス
          array('global') // global.cssより後に読み込む
      );
  }

  if (is_page('contact')) {
    wp_enqueue_style(
        'contact', 
        get_template_directory_uri().'/assets/styles/contact.css', // パス
        array('global') // global.cssより後に読み込む
    );
}
if (is_page('contact-confirm')) {
    wp_enqueue_style(
        'contact', 
        get_template_directory_uri().'/assets/styles/contact-confirm.css', // パス
        array('global') // global.cssより後に読み込む
    );
}

if (is_page('contact-thanks')) {
    wp_enqueue_style(
        'contact', 
        get_template_directory_uri().'/assets/styles/contact.css', // パス
        array('global') // global.cssより後に読み込む
    );
}


    // 通常の投稿のシングルページにだけ適用したい処理
    if (is_single()) {
        wp_enqueue_style(
            'single', // singleという名前を設定
            get_template_directory_uri().'/assets/styles/single.css', // パス
            array('global') // global.cssより後に読み込む
        );
    }

    // JSの読み込み
    wp_enqueue_script(
        'main-js', 
        get_stylesheet_directory_uri() . '/assets/js/main.js', 
        array('splide-js'), // splide-jsを依存関係として追加
        '', 
        true // フッターで読み込む
    );

     // JSの読み込み
     wp_enqueue_script(
      'main-js', 
      get_stylesheet_directory_uri() . '/assets/js/page.js', 
      array('splide-js'), // splide-jsを依存関係として追加
      '', 
      true // フッターで読み込む
  );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/**
 * SplideのCSSとJSを読み込む
 */
function splide_scripts() {
    // SplideのCSS
    wp_enqueue_style(
        'splide-css',
        'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css'
    );

    // SplideのJavaScript
    wp_enqueue_script(
        'splide-js',
        'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js',
        array('jquery'), // jQueryを依存関係として指定
        null,
        true // フッターで読み込む
    );
}
add_action('wp_enqueue_scripts', 'splide_scripts');

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');