<?php

/**
 * cssやjsを読み込む
 * https://www.at-freak.jp/column/wordpress_css/
 * https://web-creates.com/code/wordpress-head-js-css/
*/
function enqueue_scripts() {
  // SplideのCSSとJSを読み込む
  wp_enqueue_style(
      'splide-css',
      'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css'
  );

  wp_enqueue_script(
      'splide-js',
      'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js',
      array('jquery'),
      null,
      true // フッターで読み込む
  );

  // 共通ファイルを読み込み
  wp_enqueue_style(
      'global',
      get_template_directory_uri().'/assets/styles/global.css',
      array('splide-css'), // 'splide-css'を依存関係として指定
      '',
      'all'
  );

  // front-pageページのみ読み込むファイル
  if (((is_front_page() && is_home()) || (is_front_page() && !is_home())) && !is_paged()) {
      wp_enqueue_style(
          'front-page',
          get_template_directory_uri().'/assets/styles/front-page.css',
          array('global')
      );
  }

  // 特定の固定ページのみ読み込むファイル
  if (is_page('works')) {
      wp_enqueue_style(
          'works',
          get_template_directory_uri().'/assets/styles/works.css',
          array('global')
      );
  }

  // 通常の投稿のシングルページにだけ適用したい処理
  if (is_single()) {
      wp_enqueue_style(
          'single',
          get_template_directory_uri().'/assets/styles/single.css',
          array('global')
      );
  }

  // メインJSの読み込み
  wp_enqueue_script(
      'main-js',
      get_stylesheet_directory_uri() . '/assets/js/main.js',
      array('splide-js'), // 'splide-js'を依存関係として指定
      '',
      true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/**
 * アイキャッチ画像を使用可能にする
*/
add_theme_support('post-thumbnails');