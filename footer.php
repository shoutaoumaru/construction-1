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
    <!-- /.footer -->
    <div class="l-menu-sp u-hidden-wide">
      <div class="l-menu-sp__inner">
        <nav class="l-menu-sp__nav">
          <ul>
            <li><a class="animsition-link" href="/">ホーム</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/business')); ?>">事業内容</a></li>
            <li><a class="animsition-link" href=" <?php echo esc_url( home_url('/company')); ?>">会社情報</a></li>
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

  <?php wp_footer(); ?>