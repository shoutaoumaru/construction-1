<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEWS/single｜建設テンプレート </title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
</head>

<body>
  <div id="main-wrapper" class="animsition news-single">
    <header id="header" class="p-header">
      <div class="logo clip-js3 top">
        <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
        </a>
      </div>
      <!-- /.logo -->
      <div class="l-menu-sp-button clip-js3 top"><i></i><i></i><i></i></div>
      <!-- /.l-menu-sp-button -->
      <?php get_template_part('includes/c-header'); ?>      
      <!-- /.l-action-sp__buttons -->
    </header>
    <!-- /.p-header -->
    <section class="c-news-sl">
      <div class="c-container">
        <ul class="c-news-sl__list">
          <li class="c-news-sl__block">
            <div class="c-news-sl__tit">
              <p class="c-txt-md"><?php the_title(); ?></p>
              <span class="c-news-sl__date"><?php echo get_the_date(); ?></span>
            </div>
            <div class="c-news-sl__contents">
              <p><?php the_content(); ?></p>
            </div>
          </li>

        </ul>
        <div class="c-news-sl__link">
          <a class="more-link animsition-link" class="animsition" href=" <?php echo esc_url( home_url('/news')); ?>"><span
              class="readmore">一覧へ戻る</span></a>
        </div>
      </div>
    </section>
    <!-- /.news-top -->
    <div class="first-wrapper">
      <footer class="p-footer">
        
        <div class="p-footer__wrap">
          <div class="p-footer__label">
            <h2 class="p-footer__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
            </h2>  
          </div>
          <div class="p-open-time">
            <nav class="p-footer__nav">
              <ul>
                <li><a href=" <?php echo esc_url( home_url('/')); ?>" class="animsition-link m-button-arrow-l">ホーム</a></li>
                <li><a href=" <?php echo esc_url( home_url('/business')); ?>" class="animsition-link m-button-arrow-l">事業内容</a></li>
                <li><a href=" <?php echo esc_url( home_url('/conpany')); ?>" class="animsition-link m-button-arrow-l">会社情報</a></li>
                <li><a href=" <?php echo esc_url( home_url('/news')); ?>" class="animsition-link m-button-arrow-l">ニュース</a></li>
                <li><a href=" <?php echo esc_url( home_url('/recruit')); ?>" class="animsition-link m-button-arrow-l">採用情報</a></li>
              </ul>
            </nav>    
          </div>
        </div>

        <div class="p-footer__wrap">
          <address>
            <p class="c-txt-sm">
              〒812-0011<br>福岡県福岡市博多区博多駅前3-27-25-9F
            </p>
            <p class="c-txt-sm">
              <span>Google Map</span>
            </p>
          </address>
          <div>
            <p class="c-txt-sm">TEL：0120-123-456</p>
            <p class="c-txt-sm">FAX：0120-123-789</p>
          </div>
        </div>
        <!-- /.p-open-time -->
        <div class="p-footer__copyright">
          Copyright © 株式会社 Riv建設 All Rights Reserved.
        </div>
      </footer>
    </div>
    <!-- /.p-footer -->
    <div class="l-menu-sp u-hidden-wide">
      <div class="l-menu-sp__inner">
        <nav class="l-menu-sp__nav">
          <ul>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/business')); ?>">事業内容</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/conpany')); ?>">会社情報</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">ニュース</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
          </ul>
          <div class="reserve-btn-wrap">
            <div class="reserve-btn-tel">
              <h4>お電話はこちら</h4>
              <div class="reserve-btn">
                <a href="tel:092-686-7954"><span>092-686-7954</span></a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- /.l-menu-sp -->
  </div>
  <!-- .superwrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
</body>

</html>