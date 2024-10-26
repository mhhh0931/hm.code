<!-- ヘッダーパーツ -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <title><?php bloginfo();?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">  
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/Simple Minimalist Circle Typography Business Logo 1.png">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header__content">

            <h1 class="logo-title">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Hm.code</a>
            </h1>

            <div class="hamburger">
                <span></span> 
                <span></span>
                <span></span>
            </div>
            <nav class="navigation">
                <ul class="navigation__list">
                    <li  class="navigation__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                    <li  class="navigation__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/works">Works</a></li>
                    <li  class="navigation__item"><a href="#service">Service</a></li>
                    <li  class="navigation__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price">Price</a></li>
                    <li  class="navigation__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icons8-インスタグラム-48 (2) 1.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icons8-github-24.png" alt=""></a></li>
                </ul>
            </nav>
            <nav class="hamburger__navigation">
                <ul class="hamburger__navigation--list">
                    <li  class="hamburger__navigation--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                    <li  class="hamburger__navigation--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/works">Works</a></li>
                    <li  class="hamburger__navigation--item"><a href="#">Service</a></li>
                    <li  class="hamburger__navigation--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/price">Price</a></li>
                    <li  class="hamburger__navigation--item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icons8-インスタグラム-48 (2) 1.png" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icons8-github-24.png" alt=""></a></li>
                </ul>
            </nav>
        </div>

         
    </header>