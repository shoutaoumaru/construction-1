<!DOCTYPE html>
<html lang="ja">

<head>
  <title>ニュース｜建設テンプレート1</title>
  <?php get_header(); ?>
</head>

<body>
  <div id="main-wrapper" class="animsition">
    <?php get_template_part('includes/c-header'); ?>      
    <section class="c-news">
      <div class="c-topview">
        <div class="c-topview__inner">
          <div class="c-topview__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/news.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="c-container">
        <h2 class="c-news__title">
          <p class="contents-title">NEWS</p>
          <p class="contents-subtitle">お知らせ</p>
        </h2>
        <ul class="c-news__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
           <li class="c-news__item">
              <a href="<?php the_permalink() ;?>" class="c-news__link animsition-link">
                <span class="c-news__date"><?php echo get_the_date(); ?></span>
                <p class="c-news__tit"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
       <!-- pagenesion -->
       <?php if( function_exists ("the_pagination") ) the_pagination(); ?>
      </div>
    </section>
    <!-- /.news-top -->
    <?php get_footer(); ?>
  </div>
  <!-- /.main-wrapper -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
</body>

</html>