<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vlife-theme
 */

get_header();
?>

<!-- ===============  main ============== -->
<main class="content">
  <div id="js-loader" class="loader">
    <div class="loader-content">
      <div class="loader-logo">
        <img src="<?php print get_template_directory_uri(); ?>/assets/img/shared/animation_logo.png" alt="一度きりの人生を、価値ある人生に。" width="255" height="140" loading="lazy">
      </div>
      <div class="textanime js-textanime">一度きりの人生を、価値ある人生に。</div>
    </div>
  </div>
  <!-- /.js-loader -->
  <div class="sec-mv">
    <div class="mv-img-blk">
      <div class="js-mv-img mv-img mv-img01" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
      </div>
      <div class="js-mv-img mv-img mv-img02" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
      </div>
      <div class="js-mv-img mv-img mv-img03" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
      </div>
    </div>
    <h1 class="mv-txt"  data-aos="fade-up" data-aos-delay="7500" data-aos-duration="1500">
        全ての人が安心して<br>
        <span class="txt-highlight">医療・介護・保育</span>を<br>
        受けられる社会へ
    </h1>
    <div class="mv-sm-txt" data-aos="fade-up" data-aos-delay="7500" data-aos-duration="1500">
      <p>
      超少子高齢化社会が進む日本で、医療・介護・保育人材の不足は深刻な問題です。<br>
      私たちは医療・介護・保育を支える人たちが抱える課題解決の支援を通じて、<br>
      誰もが安心して医療・介護・保育を受けられる社会の実現に貢献します。
      </p>
    </div>
  </div>
  <!-- /.mv-sec -->
  <section class="sec-about" data-aos="fade-up">
    <div class="about-inner">
      <h2 class="sec-ttl">
        <span class="eng-ttl">About us</span>
        私たちについて
      </h2>
      <h3 class="about-sub-ttl">一度きりの人生、価値ある人生に<br>相手の立場になって深く考える
      </h3>
      <div class="cmn-txt">
      一度きりの人生、価値ある人生に<br>VALUABLE LIFEは「相手の立場になって深く考える」をモットーにサービスを提供します。<br>「少子高齢化社会に対して適した人材の紹介をすることで人々の生活の質を向上し、社会に貢献し続ける」事で存在価値を見出します。
      </div>
      <a href="<?php bloginfo('url'); ?>/aboutus/" class="btn-theme01 btn-center"><span class="btn-theme01-arrow"></span> 私たちについてへ</a>
    </div>
  </section> 
  <!-- /.sec-about -->
  <section class="sec-service" data-aos="fade-up">
    <div class="inner">
      <h2 class="sec-ttl">
        <span class="eng-ttl">service</span>
        事業内容
      </h2>
      <p class="cmn-txt">
        私たちVALUABLE LIFEでは、看護・介護・保育に特化した人材紹介サービスを展開しております。
      </p>
      <ul class="service-list js-slider">
        <li class="service-item">
          <div class="service-img">
            <img src="<?php print get_template_directory_uri(); ?>/assets/img/top/service_img01.png" alt="ナカムラ看護" width="320" height="194" loading="lazy">
          </div>
          <div class="service-info">
            <h3 class="service-info-ttl">看護師人材紹介</h3>
            <p class="intro-txt">
            「ナカムラ看護」は、看護業界に特化した人材紹介サービスです。<br>施設種類や診療科目、働き方など将来のビジョンに合わせて専任のキャリアアドバイザーが紹介します。</p>
          </div>
        </li>
        <li class="service-item">
          <div class="service-img">
            <img src="<?php print get_template_directory_uri(); ?>/assets/img/top/service_img02.png" alt="ナカムラ介護" width="320" height="194" loading="lazy">
            <div class="corner-img">
              <img src="<?php print get_template_directory_uri(); ?>/assets/img/top/service_nakamurakaigo_img.png" alt="ナカムラ介護" width="53" height="61" loading="lazy">
            </div>
          </div>
          <div class="service-info">
            <h3 class="service-info-ttl">介護士人材紹介</h3>
            <p class="intro-txt">
          「ナカムラ介護」は、介護福祉士、ケアマネージャー、社会福祉士など、福祉・介護従事者のための転職支援サービスです。<br>現場のリアルな情報はもちろん、入社後のキャリア相談などのアフターフォローまで丁寧にサポートします。</p>
          </div>
        </li>
        <li class="service-item">
          <div class="service-img">
            <img src="<?php print get_template_directory_uri(); ?>/assets/img/top/service_img03.png" alt="ナカムラ保育" width="320" height="194" loading="lazy">
          </div>
          <div class="service-info">
            <h3 class="service-info-ttl">保育士人材紹介</h3>
            <p class="intro-txt">
          「ナカムラ保育」は、保育業界に特化した人材紹介サービスです。保育園を利用中のママ、パパ、保育士経験者のキャリアアドバイザーが、ご希望をもとに全国の保育園やこども園とマッチングします。</p>
          </div>
        </li>
      </ul> <!-- .service-list -->
    </div>
    <div class="service-bg-blk"></div>
  </section> 
  <!-- /.sec-service -->
  <section class="sec-top-msg" data-aos="fade-up">
    <div class="inner">
      <h2 class="sec-ttl">
        <span class="eng-ttl">Top Message</span>
        トップメッセージ
      </h2>
      <div class="top-msg-img">
        <img src="<?php print get_template_directory_uri(); ?>/assets/img/top/top_msg_img01.jpg" alt="医療福祉業界において、 価値ある人材に価値ある人生を" width="999" height="373" loading="lazy">
      </div>
      <div class="caption-txt">
        <span>医療福祉業界において、</span> <br>
        <span>価値ある人材に価値ある人生を</span>
      </div>
      <p class="cmn-txt">
      VALUABLE LIFE（バリュアブル ライフ）＝価値ある人生 <br class="s-pc">一度きりの人生を価値ある人生にすべく起業をしました。
      </p>
      <a href="#" class="btn-theme01"> <span class="btn-theme01-arrow"></span>トップメッセージへ </a>
    </div>
  </section> 
  <!-- /.sec-top-msg -->
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
  <section class="sec-news" data-aos="fade-up">
    <div class="inner">
      <h2 class="sec-ttl"><span class="eng-ttl">News</span>
        お知らせ</h2>
      <div class="news-content">
        <ul class="news-list">
          <li class="news-tile"><span class="news-date">2022.10.25</span>
            <a href="#">ここにお知らせの見出しタイトルが入ります</a>
          </li>
          <li class="news-tile"><span class="news-date">2022.10.25</span>
            <a href="#">ここにお知らせの見出しタイトルが入ります</a>
          </li>
          <li class="news-tile"><span class="news-date">2022.10.25</span>
            <a href="#">ここにお知らせの見出しタイトルが入ります</a>
          </li>
        </ul>
        <a href="" class="btn-theme01"><span class="btn-theme01-arrow"></span>お知らせ一覧へ</a>
      </div>
    </div>
  </section> 
  <!-- /.sec-news -->
</main>

<?php
get_footer();
