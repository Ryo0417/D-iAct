jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $(".c-pagetop");
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1165) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on("click", 'a[href*="#"]', function () {
    let time = 400;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  });

  // ハンバーガーメニュー
  $(".js-hamburger").on("click", function () {
    if ($(".js-hamburger").hasClass("is-active")) {
      if ($(window).width() >= 768) {
        $(".p-header-nav").fadeIn();
      }
      $(".js-nav-menu-pc").fadeOut();
      $(".swiper").fadeIn();
      $(".js-hamburger").removeClass("is-active");
      $("body").css("overflow-y", "scroll");
    } else {
      $(".p-header-nav").fadeOut();
      // $(".swiper").fadeOut();
      $(".js-nav-menu-pc").fadeIn();
      $(".js-hamburger").addClass("is-active");
      $("body").css("overflow-y", "hidden"); // 本文の縦スクロールを無効
    }
  });

  //ページ遷移時にドロワーを閉じる
  $(".js-nav-menu-pc a").on("click", function () {
    $(".js-hamburger").removeClass("is-active");
    $(".js-nav-menu-pc").fadeOut();
    $("body").css("overflow-y", "scroll");
  });

  // swiper(プログレスバー)
  var bar = document.querySelector(".progressbar_in");
  var speed = 4000;
  window.onload = function () {
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      autoplay: {
        delay: speed,
        disableOnInteraction: false,
      },
      on: {
        slideChangeTransitionStart: function () {
          (bar.style.transitionDuration = "0s"),
            (bar.style.transform = "scaleX(0)");
        },
        slideChangeTransitionEnd: function () {
          (bar.style.transitionDuration = speed + "ms"),
            (bar.style.transform = "scaleX(1)");
        },
      },
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true,
      },
    });
  };

  // アコーディオン
  $(function () {
    // 最初のコンテンツは表示
    $(".p-accordion__content--first").css("display", "flex");
    // 最初の矢印は開いた時の状態に
    $(".p-accordion__item--first .js-accordion-title").addClass("open");
    // タイトルをクリックすると
    $(".js-accordion-title").on("click", function () {
      // クリックした次の要素を開閉
      $(this).next().slideToggle(300);
      // タイトルにopenクラスを付け外しして矢印の向きを変更
      $(this).toggleClass("open", 300);
    });
  });

  // aos
  AOS.init();
});
