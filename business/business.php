<?php
 /* Template Name: business
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>事業内容 | 建設テンプレート1</title>
  <?php get_header(); ?>

</head>

<body>
  <div class="first-wrapper animsition">
    <?php get_template_part('includes/c-header'); ?>      
    <div class="first-contents">
      <div id="c-topview" class="c-topview">
        <div class="c-topview__inner">
          <div class="c-topview__img">
            <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/business/business.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- /.c-topview -->
      <div class="fs-message">
        <div class="c-container appear up">
          <h2 class="c-head01 item">
            <span>BUSINESS</span>
            <p>事業内容について</p>
          </h2>
          <div class="fa-text item">
            <p class="c-txt-sm">
              大規模な現場の鉄骨・解体工事から、一般住宅の水まわりの設備のトラブル・電気設備工事など、様々なご要望にお応えできるのが私たちの強みです。
            </p>
          </div>
        </div>
        
      </div>
      <!-- /.fs-message -->
      <div class="fs-promise">
        <div class="fs-promise__inner">
          
          <div class="fs-promise__block appear up">
            <div class="fs-promise__img cover-slide">
              <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/business/business-1.jpg" alt="">
            </div>
            <div class="fs-promise__desc item">
              <h3 class="num-tit">
                <i>1</i>
                <span>鉄骨工事</span>
              </h3>
              <div class="description">
                <p class="c-txt-sm">
                  鍛冶工事や溶接工事から現場での組み立てまで、鉄骨に関する施工をワンストップで手掛けます。同じ企業が手掛けることで質が高まるうえに、コストカットも可能です。
                </p>
              </div>
            </div>
          </div>
          <div class="fs-promise__block appear up">
            <div class="fs-promise__img cover-slide">
              <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/business/business-2.jpg" alt="">
            </div>
            <div class="fs-promise__desc item">
              <h3 class="num-tit">
                <i>2</i>
                <span>給水工事</span>
              </h3>
              <div class="description">
                <p class="c-txt-sm">
                  屋外の道路の排水管から建物の敷地内までつなぐ「給水管引込工事」と、各家庭の蛇口までをつなげる「屋内配管工事」の両方を手掛けます。水まわりの設備のトラブルにも対応できますので、お気軽にご相談ください。
                </p>
              </div>
            </div>
          </div>
          <div class="fs-promise__block appear up">
            <div class="fs-promise__img cover-slide">
              <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/business/business-3.jpg" alt="">
            </div>
            <div class="fs-promise__desc item">
              <h3 class="num-tit">
                <i>3</i>
                <span>電気工事</span>
              </h3>
              <div class="description">
                <p class="c-txt-sm">
                  ビルやマンション、店舗などの電気設備をトータルで手掛けます。コンセントやスイッチの増設や照明設備の取り替え、設置、分電盤の点検、LED化など個人宅の電気設備工事もお任せ下さい。
                </p>
              </div>
            </div>
          </div>
          <div class="fs-promise__block appear up">
            <div class="fs-promise__img cover-slide">
              <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/business/business-4.jpg" alt="">
            </div>
            <div class="fs-promise__desc item">
              <h3 class="num-tit">
                <i>4</i>
                <span>解体工事</span>
              </h3>
              <div class="description">
                <p class="c-txt-sm">
                  プラントや施設、鉄骨鉄筋コンクリート、鉄骨造の解体工事に対応可能です。専門性が高い施工も30年以上の業歴を生かして確実に手掛けますので、ぜひ相談ください。
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?php get_footer(); ?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
</body>

</html>