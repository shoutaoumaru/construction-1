<!DOCTYPE html>
<html lang="ja">

<head>
  <title>NEWS/single｜建設テンプレート </title>
  <?php get_header(); ?>

</head>

<body>
  <div id="main-wrapper" class="animsition news-single">
    <header id="header" class="p-header">
      <div class="logo">
        <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
        </a>
      </div>
      <!-- /.logo -->
      <div class="l-menu-sp-button"><i></i><i></i><i></i></div>
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
    <!-- /.news-sl -->
    <?php get_footer(); ?>
  </div>
  <!-- .superwrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
</body>

</html>