<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>D-iAct</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet" />
  <!-- adobe fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/nfk4taq.css" />
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <!-- aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</head>

<body>
  <header id="home" class="p-header">
    <div class="p-header__left">
      <div class="p-header__left-inner">
        <div class="p-header__left-wrapper">
          <h1 class="p-header__logo">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="" />
            </a>
          </h1>
          <nav class="p-header__nav p-header-nav">
            <ul class="p-header-nav__items">
              <li class="p-header-nav__item">
                <a href="#about">about</a>
              </li>
              <li class="p-header-nav__item">
                <a href="#product">product</a>
              </li>
              <li class="p-header-nav__item">
                <a href="#scene">scene</a>
              </li>
              <li class="p-header-nav__item">
                <a href="#spec">spec</a>
              </li>
              <li class="p-header-nav__item">
                <a href="#voice">voice</a>
              </li>
              <li class="p-header-nav__item">
                <a href="#qa">q&a</a>
              </li>
              <li class="p-header-nav__item">
                <a href="#contact">contact</a>
              </li>
            </ul>
          </nav>
          <!-- ハンバーガーメニュー -->
          <div class="p-header__hamburger-menu p-hamburger js-nav-menu-pc">
            <nav class="p-hamburger__menu">
              <div class="p-hamburger__wrapper">
                <div class="p-hamburger__menu-left">
                  <a href="#home">home</a>
                  <a href="#about">about</a>
                  <a href="#product">product</a>
                  <a href="#scene">scene</a>
                  <a href="#spec">spec</a>
                </div>
                <div class="p-hamburger__menu-right">
                  <a href="#voice">voice</a>
                  <a href="#qa">q&a</a>
                  <a href="#contact">contact</a>
                </div>
              </div>
              <figure class="p-hamburger__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/hamburger-image.jpg" alt="">
              </figure>
            </nav>
            <div class="p-hamburger__reception">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/hamburger-reception.svg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- /p-header__left-inner -->
    </div>
    <!-- /p-header__left -->
    <!-- ハンバーガーボタン -->
    <div class="p-header__right">
      <button class="p-header__hamburger c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    <!-- p-header__right -->
  </header>

  <!-- mv -->
  <main>
    <div class="p-mv p-mv__pc">
      <div class="p-mv__left">
        <span>Enrich<br />every day with</span>
        <figure class="p-mv__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-logo.svg" alt="" />
        </figure>
        <h2 class="p-mv__head">D-iA.ctで毎日を豊かに。</h2>
      </div>
      <div class="p-mv__right">
        <div class="p-mv__video">
          <video id="video" webkit-playsinline="" playsinline="" muted="" autoplay="" loop="" src="<?php echo get_template_directory_uri(); ?>/images/video/sunlight.mp4">
          </video>
        </div>
      </div>
      <!-- /p-mv__right -->
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv1-pc.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv2-pc.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv3-pc.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv4-pc.png" alt="" />
          </div>
        </div>
      </div>
      <!-- /swiper -->
      <div class="swiper-pagination"></div>
      <div class="progressbar"><span class="progressbar_in"></span></div>
    </div>

    <!-- 無限スライダー -->
    <div class="p-animation-roop">
      <div class="p-animation-roop__wrapper1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-text1.svg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-text1.svg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-text1.svg" alt="" />
      </div>
      <div class="p-animation-roop__wrapper2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-text2.svg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-text2.svg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-text2.svg" alt="" />
      </div>
    </div>

    <!-- about -->
    <section id="about" class="p-about l-about" data-aos="fade-up">
      <div class="p-about__video-wrapper">
        <video id="video2" class="p-about__video" webkit-playsinline="" playsinline="" muted="" autoplay="" loop="" src="<?php echo get_template_directory_uri(); ?>/images/video/water.mp4"></video>
        <span>
          美しい髪で<br />
          自信と若々しさを<br />
          手に入れる
        </span>
      </div>
      <div class="p-about__inner l-inner">
        <p class="p-about__text" data-aos="fade-up">
          ヘアアイロンは髪の毛をまっすぐにするだけでなく、カールやウェーブを作ることもできます。<br />
          自分の好みや場面に応じたスタイルを自由自在に作り出せます。<br />
          <br />
          自宅でサロンのような仕上がりになることができます。<br />
          自分でスタイリングをすることができるため、外出先に行く前に、<br />
          自分の好みに合わせて髪型を整えることができます。
        </p>
      </div>
    </section>

    <!-- product -->
    <section id="product" class="p-product" data-aos="fade-up">
      <h2 class="p-product__head" data-aos="fade-up">product<span>商品情報</span></h2>
      <div class="p-product__inner">
        <div class="p-product__wrapper">
          <div class="p-product__left">
            <h3 class="p-product__name" data-aos="fade-up">
              hair iron<span>簡単・手軽に思い通りの<br>スタイリングを</span>
            </h3>
            <figure class="p-product__img-sub" data-aos="fade-up">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/product2.png" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/product3.png" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/product4.png" alt="" />
            </figure>
          </div>
          <div class="p-product__right">
            <figure class="p-product__img-main" data-aos="fade-up">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/product1.png" alt="" />
            </figure>
            <figure class="p-product__img-float u-desktop" data-aos="fade-up">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/product5.png" alt="" />
            </figure>
          </div>
        </div>
        <!-- /p-product__wrapper -->
        <h3 class="p-product__benefit" data-aos="fade-up">
          benefit<span>簡単・手軽に<br />思い通りのスタイリングを</span>
        </h3>
        <p class="p-product__desc" data-aos="fade-up">
          ヘアアイロンは髪の毛をまっすぐにするだけでなく、カールやウェーブを作ることもできます。<br />
          自分の好みや場面に応じたスタイルを自由自在に作り出せます。自宅でサロンのような仕上がりになることができます。<br />
          自分でスタイリングをすることができるため、外出先に行く前に、<br />
          自分の好みに合わせて髪型を整えることができます。
        </p>
      </div>
    </section>

    <!-- 特徴 -->
    <section class="p-feature" data-aos="fade-up">
      <div class="p-feature__inner">
        <h2 class="p-feature__head" data-aos="fade-up">特徴</h2>
        <div class="p-feature__wrapper">
          <ul class="p-feature__items">
            <li class="p-feature__item" data-aos="fade-up">
              <figure class="p-feature__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/feature1.png" alt="特徴1" />
              </figure>
              <h3 class="p-feature__title">50℃〜220℃で設定可能</h3>
              <p class="p-feature__text">
                温度設定スイッチでお好きな温度に簡単に調整可能です。
              </p>
            </li>
            <li class="p-feature__item" data-aos="fade-up">
              <figure class="p-feature__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/feature2.png" alt="特徴2" />
              </figure>
              <h3 class="p-feature__title">マイナスイオン</h3>
              <p class="p-feature__text">
                マイナスイオンが髪表面をコーティングするため、髪をいたわりながら、なめらかでツヤのある髪にセットできます。
              </p>
            </li>
            <li class="p-feature__item" data-aos="fade-up">
              <figure class="p-feature__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/feature3.png" alt="特徴3" />
              </figure>
              <h3 class="p-feature__title">デジタル表示</h3>
              <p class="p-feature__text">
                デジタル表示により一目瞭然で温度確認が可能です。
              </p>
            </li>
            <li class="p-feature__item" data-aos="fade-up">
              <figure class="p-feature__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/feature4.png" alt="特徴4" />
              </figure>
              <h3 class="p-feature__title">立ち上がり時間</h3>
              <p class="p-feature__text">
                電源を入れてから約50秒で180℃までスピーディーに到達。朝の忙しいスタイリング時間の短縮に繋がります。
              </p>
            </li>
            <li class="p-feature__item" data-aos="fade-up">
              <figure class="p-feature__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/feature5.png" alt="特徴5" />
              </figure>
              <h3 class="p-feature__title">オートオフ機能</h3>
              <p class="p-feature__text">
                電源を入れてから、約30分後に自動で電源がOFFになる安心設計です。
              </p>
            </li>
            <li class="p-feature__item" data-aos="fade-up">
              <figure class="p-feature__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/feature6.png" alt="特徴6" />
              </figure>
              <h3 class="p-feature__title">セラミックコーティング</h3>
              <span>プレート</span>
              <p class="p-feature__text">
                熱伝導率が高く、髪すべりもなめらかです。熱しやすく冷めにくいため、ムラなく仕上がりやすいのが特徴。また、耐久性が高く丈夫なので、長く使用できます。
              </p>
            </li>
            <li class="p-feature__item" data-aos="fade-up">
              <figure class="p-feature__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/feature7.png" alt="特徴7" />
              </figure>
              <h3 class="p-feature__title">海外対応</h3>
              <p class="p-feature__text">
                100V〜240V対応です。対応電圧内の国では変圧器なしでご利用いただけます。
                ※変換プラグ、変換アダプターは別途必要となります。
              </p>
            </li>
            <li class="p-feature__item" data-aos="fade-up">
              <figure class="p-feature__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/feature8.png" alt="特徴8" />
              </figure>
              <h3 class="p-feature__title">360°回転式コード</h3>
              <p class="p-feature__text">
                使用中のコードのもつれや絡まりを防ぎます。
              </p>
            </li>
            <li class="p-feature__item" data-aos="fade-up">
              <figure class="p-feature__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/feature9.png" alt="特徴9" />
              </figure>
              <h3 class="p-feature__title">専用耐熱ポーチ</h3>
              <p class="p-feature__text">
                持ち運び、収納に便利な専用ポーチ付きです。 ※耐熱温度150℃
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- point -->
    <section class="p-point">
      <div class="p-point__inner">
        <div class="p-point__wrapper">
          <div class="p-point__content-bg p-point__content-bg1 p-point__content-bg--odd">
            <div class="p-point__content p-point__content--odd" data-aos="fade-up">
              <div class="p-point__body">
                <span class="p-point__number">POINT 01</span>
                <h2 class="p-point__head">
                  たった1回すべらせるだけで<br />
                  ツヤめくストレートが<br />
                  夜まで続く
                </h2>
                <p class="p-point__text">
                  「3D
                  FITプレート」が髪をしっかりとらえ、1回すべらせるだけで効率的にストレート。<br />
                  髪にムラなく効率的に熱を伝えて、毛先まで逃さずしっかりキャッチするから、ツヤめくストレートが夜まで続く。
                </p>
              </div>
              <figure class="p-point__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/point1-main.jpg" alt="" />
              </figure>
            </div>
            <!-- /.p-point__content -->
          </div>
          <ul class="p-point__introduction1" data-aos="fade-up">
            <li class="p-point__introduction1-item">
              <figure class="p-point__introduction1-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/point1-sub1.jpg" alt="" />
              </figure>
              <p class="p-point__introduction1-text">
                効率的に熱を伝える<br>「高出力ヒーター」
              </p>
            </li>
            <li class="p-point__introduction1-item">
              <figure class="p-point__introduction1-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/point1-sub2.jpg" alt="" />
              </figure>
              <p class="p-point__introduction1-text">
                髪にムラなく熱を伝える<br class="u-mobile">「温度均一プレート」
              </p>
            </li>
            <li class="p-point__introduction1-item">
              <figure class="p-point__introduction1-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/point1-sub3.jpg" alt="" />
              </figure>
              <p class="p-point__introduction1-text">
                根元から毛先まで3D FIT
              </p>
            </li>
          </ul>

          <div class="p-point__content-bg p-point__content-bg2 p-point__content-bg--even">
            <div class="p-point__content p-point__content--even" data-aos="fade-up">
              <div class="p-point__body">
                <span class="p-point__number">POINT 02</span>
                <h2 class="p-point__head">摩擦を低減し、髪が傷みにくい</h2>
                <p class="p-point__text">
                  セラミックコーティングプレートで髪のひっかかりを抑え、摩擦によるキューティクルの損傷を防ぐ。<br />
                  そのほかにも、髪に効率よく熱を伝える、髪のツヤ感UP、しっとり感、毛先のまとまり感、などの効果もあります。
                </p>
              </div>
              <figure class="p-point__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/point2-main.jpg" alt="" />
              </figure>
            </div>
            <!-- /.p-point__content -->
          </div>
          <div class="p-point__introduction2-inner l-inner">
            <div class="p-point__introduction2-head" data-aos="fade-up">
              セラミックコーティングプレート
            </div>
            <ul class="p-point__introduction2" data-aos="fade-up">
              <li class="p-point__introduction2-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/ceramic1.svg" alt="髪に効率よく
                熱を伝える" />
              </li>
              <li class="p-point__introduction2-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/ceramic2.svg" alt="髪のツヤ感" />
              </li>
              <li class="p-point__introduction2-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/ceramic3.svg" alt="しっとり感" />
              </li>
              <li class="p-point__introduction2-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/ceramic4.svg" alt="毛先の
                まとまり感" />
              </li>
            </ul>
            <figure class="p-point__introduction2-reception">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/point-ceramic.svg" alt="" />
            </figure>
          </div>

          <div class="p-point__content-bg p-point__content-bg3 p-point__content-bg--odd">
            <div class="p-point__content p-point__content--odd">
              <div class="p-point__body" data-aos="fade-up">
                <span class="p-point__number">POINT 03</span>
                <h2 class="p-point__head">自動温度制御システム</h2>
                <p class="p-point__text">
                  NTCサーミスタにより、1秒間に100回温度測定し、<br />
                  設定温度を一定に保ちます。
                </p>
              </div>
              <figure class="p-point__img" data-aos="fade-up">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/point3-main.jpg" alt="" />
              </figure>
            </div>
            <!-- /.p-point__content -->
          </div>

          <div class="p-point__content-bg p-point__content-bg4 p-point__content-bg--even">
            <div class="p-point__content p-point__content--even">
              <div class="p-point__body" data-aos="fade-up">
                <span class="p-point__number">POINT 04</span>
                <h2 class="p-point__head">
                  専用耐熱ポーチで<br />
                  どこでも持ち運び可能。
                </h2>
                <p class="p-point__text">
                  持ち運び、収納に便利な専用ポーチ付きです。<br />
                  ※耐熱温度150°
                </p>
              </div>
              <figure class="p-point__img" data-aos="fade-up">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/point4-main.jpg" alt="" />
              </figure>
            </div>
            <!-- /.p-point__content -->
          </div>
        </div>
        <!-- /.p-point__wrapper -->
      </div>
    </section>

    <section class="p-heatup">
      <div class="p-heatup__inner l-inner">
        <h2 class="p-heatup__head" data-aos="fade-up">
          heat up<span>ヒートアップ約50秒（約180 ℃）</span>
        </h2>
        <p class="p-heatup__desc1" data-aos="fade-up">
          約50秒でプレートが約180℃に温まります。セットに使える温度までの到達が早いので忙しい時も素早くセットが完了します。<br />
          1回すべらせるだけで、キレイなストレートが完成。
        </p>
      </div>
      <!-- /.l-inner -->
      <div class="p-heatup__content" data-aos="fade-up">
        <div class="p-heatup__body">
          <span class="p-heatup__heading u-desktop">Heat up</span>
          <p class="p-heatup__desc">
            最高温度は「220 ℃」<br />
            10℃刻みで温度調節が<br />
            可能（18段階）
          </p>
        </div>
        <figure class="p-heatup__content-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/heatup1.png" alt="" />
        </figure>
      </div>
      <!-- /.p-heatup__content -->
      <div class="p-heatup__inner l-inner">
        <figure class="p-heatup__temperature-img" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/heatup2.png" alt="" />
        </figure>
        <div class="p-heatup__temperature" data-aos="fade-up">最高設定温度は「220 ℃」</div>
        <p class="p-heatup__temperature-desc" data-aos="fade-up">
          髪の状態に合わせて温度を選べます。傷みが気になる方は低めの温度で、くせが気になる方は高めの温度で。
        </p>
      </div>
      <!-- /.l-inner -->
    </section>

    <!-- carry -->
    <section class="p-carry">
      <div class="p-carry__inner l-inner">
        <h2 class="p-carry__head" data-aos="fade-up">
          ＼持ち運びも便利／<span>スリム＆コンパクトで使いやすい</span>
        </h2>
        <ul class="p-carry__items" data-aos="fade-up">
          <li class="p-carry__item">
            <figure class="p-carry__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/carry1.jpg" alt="" />
            </figure>
            <h3 class="p-carry__feature">スリムな形状</h3>
            <p class="p-carry__text">
              先端部がスリムなので、根元への挿入がしやすい。
            </p>
          </li>
          <li class="p-carry__item">
            <figure class="p-carry__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/carry2.jpg" alt="" />
            </figure>
            <h3 class="p-carry__feature">手になじむグリップ</h3>
            <p class="p-carry__text">
              手にフィットしやすい形状だから髪を挟みやすく、伸ばしやすい。
            </p>
          </li>
          <li class="p-carry__item">
            <figure class="p-carry__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/carry3.jpg" alt="" />
            </figure>
            <h3 class="p-carry__feature">360°回転式コード</h3>
            <p class="p-carry__text">
              使用中もコードが絡まりにくい。ストレスなくスタイリングができる。
            </p>
          </li>
        </ul>
      </div>
    </section>

    <!-- scene -->
    <section id="scene" class="p-scene">
      <div class="p-scene__inner l-inner">
        <h2 class="p-scene__head" data-aos="fade-up">scene<span>おすすめの使⽤シーン</span></h2>
        <p class="p-scene__subHead" data-aos="fade-up">
          お出かけ前、朝起きた後など使い分けはあなた次第。シーンや好みに合わせた使い⽅で快適なヘアスタイリングを。
        </p>
        <ul class="p-scene__items">
          <li class="p-scene__item" data-aos="fade-up">
            <figure class="p-scene__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/scene1.jpg" alt="" />
            </figure>
            <h3 class="p-scene__title">
              お出かけや仕事前の自由なスタイリング
            </h3>
            <p class="p-scene__text">
              マルチに使えるプレートサイズなので、抜け感のあるお洒落な外ハネアレンジ、ニュアンスアレンジでこなれ感アップが可能です。ショートヘアや前髪も自由にスタイリングできます。
            </p>
          </li>
          <li class="p-scene__item" data-aos="fade-up">
            <figure class="p-scene__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/scene2.jpg" alt="" />
            </figure>
            <h3 class="p-scene__title">
              手早くナチュラルなアレンジをしたい方に
            </h3>
            <p class="p-scene__text">
              一度に多くの毛束を挟めるので、手早くアレンジしたい方や、ざっくりこなれスタイルが簡単にできます。ヘアアイロン初心者の方にもおすすめです。
            </p>
          </li>
          <li class="p-scene__item" data-aos="fade-up">
            <figure class="p-scene__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/scene3.jpg" alt="" />
            </figure>
            <h3 class="p-scene__title">
              立ち上がりを意識したセンター分けパート
            </h3>
            <p class="p-scene__text">
              一見難しそうな男性のセンター分けパートも、自由にスタイリングで再現できます。今までの自分から印象を変えてみたい男性にもおすすめです。
            </p>
          </li>
          <li class="p-scene__item" data-aos="fade-up">
            <figure class="p-scene__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/scene4.jpg" alt="" />
            </figure>
            <h3 class="p-scene__title">パーマ風の王道マッシュ</h3>
            <p class="p-scene__text">
              男女ともに人気の、パーマがかかったような王道マッシュヘアも再現可能です。一度に挟める毛束の量を調整しやすいのでお好みのカール感を出すことができます。
            </p>
          </li>
        </ul>
      </div>
      <div class="p-scene__animation" data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/scene-text.svg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/scene-text.svg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/scene-text.svg" alt="" />
      </div>
    </section>

    <section id="spec" class="p-spec">
      <div class="p-spec__inner l-inner">
        <h2 class="p-spec__head" data-aos="fade-up">spec<span>製品仕様</span></h2>
        <div class="p-spec__content">
          <div class="p-spec__body">
            <dl class="p-spec__items" data-aos="fade-up">
              <dt>重量</dt>
              <dd>約332g（コード含む）</dd>
            </dl>
            <dl class="p-spec__items" data-aos="fade-up">
              <dt>消費電力</dt>
              <dd>40W</dd>
            </dl>
            <dl class="p-spec__items" data-aos="fade-up">
              <dt>コードの長さ</dt>
              <dd>約1.7m</dd>
            </dl>
            <dl class="p-spec__items" data-aos="fade-up">
              <dt>サイズ(幅×奥行×高さ)</dt>
              <dd>270mm×38mm×30mm</dd>
            </dl>
            <dl class="p-spec__items" data-aos="fade-up">
              <dt>最高設定温度</dt>
              <dd>220℃</dd>
            </dl>
            <dl class="p-spec__items" data-aos="fade-up">
              <dt>設定可能温度</dt>
              <dd>50℃～220°(18段階)</dd>
            </dl>
          </div>
          <figure class="p-spec__img" data-aos="fade-up">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/spec.png" alt="" />
          </figure>
        </div>
      </div>
      <figure class="p-spec__reception u-desktop">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/spec-text.svg" alt="" />
      </figure>
    </section>

    <!-- safety -->
    <section class="p-safety">
      <div class="p-safety__inner l-inner">
        <h2 class="p-safety__head" data-aos="fade-up">safety<span>安全性に関して</span></h2>
        <p class="p-safety__subHead" data-aos="fade-up">
          「D-iA.ct」では工場出荷前に全品検査を行い、<br />
          過電流保護機能・オートオフ機能・温度調整にブレがないことを<br />
          確認しています。
        </p>
        <figure class="p-safety__img" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/safety.jpg" alt="" />
        </figure>
      </div>
      <div class="p-safety__reception u-desktop" data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/safety-text.svg" alt="" />
      </div>
    </section>

    <!-- how to use -->
    <section class="p-use">
      <div class="p-use__inner l-inner">
        <h2 class="p-use__head" data-aos="fade-up">How to use<span>D-iA.ctの使い方</span></h2>
        <p class="p-use__subHead" data-aos="fade-up">
          熱いプレートが外側に出ていないから、初めての方でも安心して使えます。
        </p>
        <figure class="p-use__img1 u-mobile" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/use1-sp.jpg" alt="D-iA.ctの使い方" />
        </figure>
        <figure class="p-use__img2 u-mobile" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/use2-sp.jpg" alt="D-iA.ctの使い方" />
        </figure>
        <figure class="p-use__img3 u-mobile" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/use3-sp.jpg" alt="D-iA.ctの使い方" />
        </figure>
        <figure class="p-use__img u-desktop" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/use.png" alt="D-iA.ctの使い方" />
        </figure>
      </div>
      <figure class="p-use__reception u-desktop" data-aos="fade-up">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/use-text.svg" alt="" />
      </figure>
    </section>

    <!-- voice -->
    <section id="voice" class="p-voice">
      <div class="p-voice__inner l-inner">
        <h2 class="p-voice__head" data-aos="fade-up">voice<span>使用者のお声</span></h2>
        <div class="p-voice__wrapper">
          <div class="p-voice__content p-voice__content--odd" data-aos="fade-up">
            <span class="p-voice__reception u-desktop">VOICE 01</span>
            <figure class="p-voice__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/voice1.jpg" alt="" />
              <p class="p-voice__attribute">20代女性 ｜ 会社員</p>
            </figure>
            <div class="p-voice__body">
              <p class="p-voice__text">
                プレートのすべりが良いので摩擦によるダメージを抑えながらストレートにする事ができます。<br />
                側面が丸くなっているので、ストレートスタイルだけでなく、毛先のカールやウェーブ巻きにもぴったり。<br />
                温まるスピードが早いのも時間のない朝などに嬉しいですね。持ちやすいデザインで機能もシンプルなので、
                ストレートアイロン初心者の方でも簡単に使う事ができます。<br />
                この価格でこの機能ならコストパフォーマンスに優れた商品だと思います。
              </p>
            </div>
          </div>

          <div class="p-voice__content p-voice__content--even" data-aos="fade-up">
            <span class="p-voice__reception u-desktop">VOICE 02</span>
            <figure class="p-voice__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/voice2.jpg" alt="" />
              <p class="p-voice__attribute">20代女性 ｜ 美容師</p>
            </figure>
            <div class="p-voice__body">
              <p class="p-voice__text">
                プレートのサイズが小さめなので小回りがきいてとても使いやすいです!<br />
                特に髪の短い方や、 前髪などの顔周りにおすすめです。<br />
                根元から挟めるので、ボリュームを出したい頭頂部にも良いですね。<br />
                耐熱ポーチが付いており、軽いので持ち運びにも適しています!<br />
                男女問わず、 幅広い年齢層の方に使っていただけると思います。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 保証 -->
    <section class="p-assurance">
      <div class="p-assurance__inner">
        <span class="p-assurance__subHead" data-aos="fade-up">＼万が一の故障のため／</span>
        <h2 class="p-assurance__head" data-aos="fade-up">1年間のメーカー保証</h2>
        <figure class="p-assurance__img" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/assurance.jpg" alt="" />
        </figure>
        <h3 class="p-assurance__title" data-aos="fade-up">
          D-iA.ctでは、 1年間のメーカー保証期間を設けております。
        </h3>
        <p class="p-assurance__text" data-aos="fade-up">
          <span>【ご注意】</span>
          保証の対象は、正規販売店にてご購入いただいた商品に限ります。<br>
          転売品や個人間の売買にて購入された商品は、保証の対象外となります。<br>
          また、正規販売店による購入証明(保証書・レシート)がない場合も、保証の対象外とさせていただきます。<br>
          ※交換品の発送は日本国内に限ります。
        </p>
      </div>
    </section>

    <!-- faq -->
    <section id="qa" class="p-faq">
      <div class="p-faq__inner">
        <div class="p-faq__wrapper">
          <h2 class="p-faq__head" data-aos="fade-up">faq<span>よくあるご質問</span></h2>
          <div class="p-faq__container">
            <div class="p-faq__content p-accordion">
              <div class="p-accordion__container">
                <div class="p-accordion__item p-accordion__item--first">
                  <div class="p-accordion__title js-accordion-title" data-aos="fade-up">
                    <span>Q.</span>
                    <h3>ヘアカラーをした直後に使用しても大丈夫ですか?</h3>
                  </div>
                  <!--/.p-accordion-title-->
                  <div class="p-accordion__content p-accordion__content--first">
                    <span>A.</span>
                    <p>
                      ヘアカラー剤の色素や成分がプレート部分に付着すると、故障の原因にもなります。目安としては2~3日後からご使用いただくことをお勧めいたします。ヘアマニキュア等でカラーをした際は、
                      シャンプーで十分に洗い流し、 乾いた髪にご使用ください。
                    </p>
                  </div>
                </div>
                <!-- /.p-accordion-item -->
              </div>
              <!-- /.accordion-container -->
            </div>

            <div class="p-faq__content p-accordion">
              <div class="p-accordion__container">
                <div class="p-accordion__item">
                  <div class="p-accordion__title js-accordion-title" data-aos="fade-up">
                    <span>Q.</span>
                    <h3>プレートに隙間が空いている気がします。</h3>
                  </div>
                  <!--/.p-accordion-title-->
                  <div class="p-accordion__content">
                    <span>A.</span>
                    <p>
                      髪へのダメージを軽減するために、
                      クッションプレートを用いています。
                      プレートがバネのように上下に動き、髪の毛を強く挟みすぎるのを防ぎます。
                    </p>
                  </div>
                </div>
                <!-- /.p-accordion-item -->
              </div>
              <!-- /.accordion-container -->
            </div>

            <div class="p-faq__content p-accordion">
              <div class="p-accordion__container">
                <div class="p-accordion__item">
                  <div class="p-accordion__title js-accordion-title" data-aos="fade-up">
                    <span>Q.</span>
                    <h3>縮毛矯正をしているのですが、使用しても大丈夫ですか?</h3>
                  </div>
                  <!--/.p-accordion-title-->
                  <div class="p-accordion__content">
                    <span>A.</span>
                    <p>
                      縮毛矯正直後の髪は薬剤が定着していなかったり、見た目には見えないダメージを受けている可能性がございます。その状態でご使用いただくと、癖がついてしまったり、毛髪に通常以上の負担がかかり傷んでしまうことが考えられます。お手入れした髪をキレイに長持ちさせていただくために、
                      縮毛矯正後は髪の状態にあわせてご使用の判断をお願いいたします。
                    </p>
                  </div>
                </div>
                <!-- /.p-accordion-item -->
              </div>
              <!-- /.accordion-container -->
            </div>
          </div>
        </div>
        <!-- /.p-faq__wrapper -->
      </div>
    </section>

    <!-- contact -->
    <div id="contact" class="p-contact">
      <div class="p-contact__inner">
        <div class="p-contact__content">
          <div class="p-contact__left" data-aos="fade-up">
            <span>contact</span>
            <h2>お問い合わせ</h2>
            <p>ご質問、ご相談等気軽にお問い合わせください！</p>
          </div>
          <div class="p-contact__right" data-aos="fade-up">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/mail.svg" alt="" />
            </figure>
            <h2>メールアドレス</h2>
            <p>info@top-cosme.co.jp</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="p-footer">
    <div class="p-footer__inner">
      <div class="p-footer__wrapper" data-aos="fade-up">
        <div class="p-footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer-logo.svg" alt="">
        </div>
        <nav class="p-footer__nav">
          <ul class="p-footer__items">
            <li class="p-footer__item">
              <a href="#about">concept</a>
            </li>
            <li class="p-footer__item">
              <a href="#product">product</a>
            </li>
            <li class="p-footer__item">
              <a href="#scene">scene</a>
            </li>
            <li class="p-footer__item">
              <a href="#qa">q&a</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="p-footer__copyright">COPYRIGHT &copy; D-iA.ct ALL RIGHTS RESERVED.</div>
    </div>
    <!-- ページトップ -->
    <div class="c-pagetop">
      <a href="#"></a>
    </div>
  </footer>
</body>

</html>