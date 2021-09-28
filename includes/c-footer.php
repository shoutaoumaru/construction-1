      <nav class="btn-category appear up">
        <ul class="item">
          <li><a href=" <?php echo esc_url( home_url('/business')); ?>"><span class="btn-category__first"></span><i>事業内容</i></a></li>
          <li><a href=" <?php echo esc_url( home_url('/company')); ?>"><span class="btn-category__care"></span><i>会社情報</i></a></li>
          <li><a href=" <?php echo esc_url( home_url('/recruit')); ?>"><span class="btn-category__staff"></span><i>採用情報</i></a></li>
          <li class="u-hidden-pc"><a href=" <?php echo esc_url( home_url('/news')); ?>"><span class="btn-category__faq"></span><i>ニュース</i></a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.l-content -->
    <footer class="p-footer">
      <div class="p-footer__wrap">
        <div class="p-footer__label">
          <h2 class="p-footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
          </h2>
        </div>
        <nav class="p-footer__nav">
          <ul>
            <li><a href="/" class="animsition-link m-button-arrow-l">ホーム</a></li>
            <li><a href=" <?php echo esc_url( home_url('/business')); ?>" class="animsition-link m-button-arrow-l">事業内容</a></li>
            <li><a href=" <?php echo esc_url( home_url('/company')); ?>" class="animsition-link m-button-arrow-l">会社情報</a></li>
            <li><a href=" <?php echo esc_url( home_url('/news')); ?>" class="animsition-link m-button-arrow-l">ニュース</a></li>
            <li><a href=" <?php echo esc_url( home_url('/recruit')); ?>" class="animsition-link m-button-arrow-l">採用情報</a></li>
          </ul>
        </nav>
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