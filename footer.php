<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vlife-theme
 */

?>
<?php if ( ! is_home() ) { ?>
  <div class="info-blk" data-aos="fade-up">
    <a href="#" class="info-item">
      <div class="company-profile child">
        <div class="info-inner">
          <h2 class="info-ttl"><span class="eng-ttl">Company</span>会社概要</h2>
          <p class="info-txt">
            VALUABLE LIFEの会社概要、<br>
            アクセス情報などについてご案内します。
          </p>
          <div class="btn-theme01"><span class="btn-theme01-arrow"></span>会社概要へ</div>
        </div>
      </div>
    </a>
    <a href="#" class="info-item">
      <div class="recruit-info child">
        <div class="info-inner">
          <h2 class="info-ttl"><span class="eng-ttl">recruit</span>採用情報</h2>
          <p class="info-txt">
            一人ひとりの価値を高め、<br class="s-pc">
            人生のサポートをしたいメンバーを募集しています。
          </p>
          <div class="btn-theme01"><span class="btn-theme01-arrow"></span>採用情報へ</div>
        </div>
      </div>
    </a>
  </div> 
  <!-- /.info-blk -->
<?php } ?>
  <section class="sec-contact-blk" data-aos="fade-up">
    <h2 class="sec-ttl"><span class="eng-ttl">Contact</span>
      お問い合わせ</h2>
    <p class="cmn-txt">VALUABLE LIFEへの各種お問い合わせは<br class="s-sp">こちらからお願いします。</p>
    <div class="btn-blk">
      <a href="<?php bloginfo('url'); ?>/recruiter_contact/" class="btn btn-theme02 btn-line"><span class="hover-line">採用ご担当者様はこちらから</span><span class="btn-theme02-arrow"></span></a>
      <a href="<?php bloginfo('url'); ?>/worker_contact/" class="btn btn-theme02 btn-line"><span class="hover-line">求職者様お問い合わせ</span><span class="btn-theme02-arrow"></span></a>
    </div>
  </section>
  <!-- /.sec-contact-blk -->
  <div class="social-media-blk" data-aos="fade-up">
    <div class="inner">
      <h3 class="ttl">公式SNSアカウント</h3>
      <p class="cmn-txt">VALUABLE LIFEからの最新情報を<br class="s-sp">発信しております。</p>
      <div class="social-link">
        <div class="twitter social-app">
          <a href="#">
            <img src="<?php print get_template_directory_uri(); ?>/assets/img/icon/twitter_icn.png" alt="twitter" width="37" height="30" loading="lazy">
          </a>
        </div>
        <div class="facebook social-app">
          <a href="#">
            <img src="<?php print get_template_directory_uri(); ?>/assets/img/icon/facebook_icn.png" alt="facebook" width="34" height="33" loading="lazy">
          </a>
        </div>
        <div class="line social-app">
          <a href="#">
            <img src="<?php print get_template_directory_uri(); ?>/assets/img/icon/line_icn.png" alt="line" width="36" height="36" loading="lazy">
          </a>
        </div>
        <div class="instagram social-app">
          <a href="#">
            <img src="<?php print get_template_directory_uri(); ?>/assets/img/icon/instagram_icn.png" alt="instagram" width="40" height="40" loading="lazy">
          </a>
        </div>
      </div> <!-- /.social-link -->
    </div>
  </div>
  <!-- /.social-media-blk -->
  <!-- =============== footer ============== -->
  <footer class="footer">
    <div class="ft-blk" data-aos="fade-up">
      <div class="ft-inner">
        <a href="<?php bloginfo('url'); ?>/" class="footer-logo">
          <img src="<?php print get_template_directory_uri(); ?>/assets/img/shared/ft_logo.png" alt="VALUABLE LIFE" width="320" height="53" loading="lazy">
        </a>
        <ul class="footer-menu">
          <li><a href="<?php bloginfo('url'); ?>/aboutus/">私たちについて</a></li>
          <li><a href="<?php bloginfo('url'); ?>/#service">事業内容</a></li>
          <li><a href="<?php bloginfo('url'); ?>/topmessage/">トップメッセージ</a></li>
          <li><a href="<?php bloginfo('url'); ?>/company/">会社概要</a></li>
          <li><a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a></li>
          <li><a href="<?php bloginfo('url'); ?>/news/">お知らせ</a></li>
        </ul>
        <div class="ft-btn-blk">
          <a href="<?php bloginfo('url'); ?>/recruiter_contact/"  class="btn btn-theme03 btn-line"><span class="hover-line">採用ご担当者様はこちらから</span><span class="btn-theme03-arrow"></span></a>
          <a href="<?php bloginfo('url'); ?>/worker_contact/"  class="btn btn-theme03 contact-btn btn-line"><span class="hover-line">求職者様お問い合わせ</span><span class="btn-theme03-arrow"></span></a>
        </div>
        <div class="copyright">
          Copyright &copy; VALUABLE LIFE Co., Ltd.<br class="s-sp"> All Rights Reserved.
        </div>
      </div>
    </div>
  </footer>
  <!-- ./footer -->
  <?php wp_footer(); ?>
  <!-- js -->
  <script src='<?php print get_template_directory_uri(); ?>/assets/js/library/jquery-ui.min.js'></script>
  <script src="<?php print get_template_directory_uri(); ?>/assets/js/library/slick.min.js"></script>
  <script src="<?php print get_template_directory_uri(); ?>/assets/js/library/aos.js"></script>
  <script src="<?php print get_template_directory_uri(); ?>/assets/js/share.js"></script>

</body>
</html>
