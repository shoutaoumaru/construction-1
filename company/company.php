<?php
 /* Template Name: company
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>会社情報 | 建設テンプレート1</title>
  <?php get_header(); ?>

</head>

<body>
  <div class="staff-wrapper animsition">
    <?php get_template_part('includes/c-header'); ?>      
    <div class="staff-contents">
      <div id="c-topview" class="c-topview">
        <div class="c-topview__inner">
          <div class="c-topview__img">
            <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/company/company.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="l-content" id="content">
        <div class="c-container">
          
          <!-- /st-message -->
          <div class="st-staff company">
            <div class="st-staff__inner appear up">
              <div class="heading-group item">
                <h2 class="heading-en">MESSAGE</h2>
                <h3 class="heading-normal">代表者メッセージ</h3>
              </div>
              <div class="st-staff__block item">
                <figure class="doctor__photo staff__photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/company/president.jpg">
                </figure>
                <div class="st-staff__profile">
                  <div class="st-staff__name">
                    <h3>代表者</h3>
                    <h4>利部 翔太</h4>
                  </div>
                  <div class="st-staff__item">
                    <p class="c-txt-sm">株式会社Riv建設の代表・利部です。弊社はありがたいことに、あらゆるお客様にご依頼をいただきながら成長してきました。
                      創業当時は、ミスやトラブルもありましたが、その都度まじめに受け止めて解決してきた結果、今があると思います。</p>

                    <p class="c-txt-sm">今後も、技術を高めながらお客様に貢献することが目標です。</p>
                  </div>
                </div>
              </div>

              <div class="recruit-wrapper animsition">
                <div class="contents-recruit">
                <section class="recruit-sec is-bottom">
                  <div class="heading-group item">
                    <h2 class="heading-en">COMPANY</h2>
                    <h3 class="heading-normal">会社情報</h3>
                  </div>
                  <div class="c-table01">
                    <table>
                      <tbody>
                        <tr>
                          <th>社名</th>
                          <td>株式会社Riv建設</td>
                        </tr>
                        <tr>
                          <th>代表</th>
                          <td>利部 翔太</td>
                        </tr>
                        <tr>
                          <th>所在地</th>
                          <td>〒812-0011 <br class="u-view-sp">福岡県福岡市博多区博多駅前3-27-25-9F</td>
                        </tr>
                        <tr>
                          <th>TEL</th>
                          <td><a href="tel:092-686-7954">092-686-7954</a></td>
                        </tr>
                        <tr>
                          <th>資本金</th>
                          <td>5,000,000円</td>
                        </tr>
                        <tr>
                          <th>従業員数</th>
                          <td>10名/常用下請け15名 合計25名</td>
                        </tr>
                        <tr>
                          <th>事業内容</th>
                          <td>電気工事・給水工事・解体工事・修理工事・その他</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                </div>
              </div>
              
            </div>
          </div>

          <nav class="btn-category appear up">
            <ul class="item">
              <li><a href=" <?php echo esc_url( home_url('/business')); ?>"><span class="btn-category__first"></span><i>事業内容</i></a></li>
              <li><a href="/ <?php echo esc_url( home_url('/company')); ?>"><span class="btn-category__care"></span><i>会社情報</i></a></li>
              <li><a href=" <?php echo esc_url( home_url('/recruit')); ?>"><span class="btn-category__staff"></span><i>採用情報</i></a></li>
              <li class="u-hidden-pc"><a href=" <?php echo esc_url( home_url('/news')); ?>"><span class="btn-category__faq"></span><i>ニュース</i></a>
              </li>
            </ul>
          </nav>
          <nav class="btn-topicpath">
            <ul>
              <li><a href="/">TOP</a></li>
              <li>会社情報</li>
            </ul>
          </nav>
        </div>
      </div>
      
    </div>
    <!-- ./staff-contents -->
    <?php get_footer(); ?>
  </div>
  <!-- /.staff-wrapper -->
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