// Your JavaScript code goes here
$(function () {
  //Menu
  function checkWindowWidth() {
    if (window.innerWidth > 768) {
      $("body").removeClass("open");
      $(".menu").removeClass("open");
      $(".header .nav-list").removeClass("open");
      $(".header .menu-wrapper").removeClass("open");
    }
  }
  window.addEventListener("resize", checkWindowWidth);
  window.addEventListener("load", checkWindowWidth);

  $(".menu").click(() => {
    $(".menu").toggleClass("open");
    $(".header .nav-list").toggleClass("open");
    $(".header .menu-wrapper").toggleClass("open");
    $("body").toggleClass("open");
  });

  //NavItem Click
  $(".header .nav-list li a").click(() => {
    $(".menu").removeClass("open");
    $(".header .nav-list").removeClass("open");
    $(".header .menu-wrapper").removeClass("open");
    $("body").removeClass("open");
  });

  //Slider
  // $(".slider").slick({
  //   variableWidth: true,
  //   centerMode: true,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   prevArrow: $(".slick-prevv"),
  //   nextArrow: $(".slick-nextt"),
  // });

  //Accordian
  $(".faq-ttl").click(function () {
    $(this).siblings(".faq-body").slideToggle();
    $(this).toggleClass("active");
  });

  //Top Button
  $(window).scroll(function () {
    const faqSec = $(".faq-sec");
    const scrollPosition = $(window).scrollTop();
    const faqSecOffset = faqSec.offset().top;

    if (scrollPosition <= 500) {
      $(".pagetop").addClass("d-none");
    } else {
      $(".pagetop").removeClass("d-none");
    }

    if ($(window).width() <= 768) {
      if (scrollPosition >= faqSecOffset + 200) {
        $(".scrolltop").addClass("pos");
      } else {
        $(".scrolltop").removeClass("pos");
      }
    } else {
      if (scrollPosition >= faqSecOffset) {
        $(".scrolltop").addClass("pos");
      } else {
        $(".scrolltop").removeClass("pos");
      }
    }
  });

  //To Top Click
  $(".pagetop").click(() => {
    window.scrollTo(0, 0);
  });

  function inputReset() {
    // Normal Contact Input Box
    $("#input-company_name").val("");
    $("#input-name").val("");
    $("#input-email").val("");
    $("#input-phno").val("");
    $("#input-content_inquiry").val("");

    // Modal Contact Input Box
    $("#input-company_name_modal").val("");
    $("#input-name_modal").val("");
    $("#input-email_modal").val("");
    $("#input-phno_modal").val("");
    $("#input-content_inquiry_modal").val("");

    // Modal Doc Input Box
    $("#input-company_name_modal_doc").val("");
    $("#input-email_modal_doc").val("");
    $("#input-agree_modal_doc").prop("checked", false);
  }

  //Modal Contact
  $(".btn.contact").click(() => {
    $(".modal-overlay").toggleClass("show");
    $(".modal-box").toggleClass("show");
    $("body").addClass("open");
  });

  //Modal Document
  // $(".btn.document").click(() => {
  //   $(".modal-overlay").toggleClass("show");
  //   $(".modal-box-doc").toggleClass("show");
  //   $("body").addClass("open");
  // });

  $(".header .header-black").click(()=> {
    $(".modal-overlay").toggleClass("show");
    // $(".modal-box-doc").toggleClass("show");
    $(".modal-box").toggleClass("show");
    $("body").addClass("open");
  })

  //Modal Overlay
  $(".modal-overlay").click(() => {
    $(".modal-overlay").removeClass("show");
    $(".modal-box").removeClass("show");
    $(".modal-box-thanks").removeClass("show");
    // $(".modal-box-doc").removeClass("show");
    // $(".modal-box-doc-thanks").removeClass("show");
    $("body").removeClass("open");
    $(".menu").removeClass("open");
    $(".header .nav-list").removeClass("open");
    $(".header .menu-wrapper").removeClass("open");
    inputReset();
    sessionStorage.clear();
  });

  //Modal Close Button
  $(".modal-close").click(() => {
    $(".modal-overlay").removeClass("show");
    $(".modal-box").removeClass("show");
    $(".modal-box-thanks").removeClass("show");
    // $(".modal-box-doc").removeClass("show");
    // $(".modal-box-doc-thanks").removeClass("show");
    $("body").removeClass("open");
    $(".menu").removeClass("open");
    $(".header .nav-list").removeClass("open");
    $(".header .menu-wrapper").removeClass("open");
    inputReset();
    sessionStorage.clear();
  });
});

(function ($) {
  $(".fun-sec .fcard .f-ttl")?.matchHeight();
})(jQuery);


// First Loading

//テキストのカウントアップ+バーの設定
var bar = new ProgressBar.Line(splash_text, {//id名を指定
    easing: 'easeInOut',//アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
    duration: 1000,//時間指定(1000＝1秒)
    strokeWidth: 0.2,//進捗ゲージの太さ
    color: 'var(--primary-orange)',//進捗ゲージのカラー
    trailWidth: 0.2,//ゲージベースの線の太さ
    trailColor: 'var(--primary-pink)',//ゲージベースの線のカラー
    text: {//テキストの形状を直接指定       
      style: {//天地中央に配置
        position: 'absolute',
        left: '50%',
        top: '50%',
        padding: '0',
        margin: '-30px 0 0 0',//バーより上に配置
        transform:'translate(-50%,-50%)',
        'font-size':'3rem',
        color: 'var(--primary-orange)',
      },
      autoStyleContainer: false //自動付与のスタイルを切る
    },
    step: function(state, bar) {
      bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
    }
  });
  
  //アニメーションスタート
  bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
    $("#splash_text").fadeOut(10);//フェイドアウトでローディングテキストを削除
    $(".loader_cover-up").addClass("coveranime");//カバーが上に上がるクラス追加
    $(".loader_cover-down").addClass("coveranime");//カバーが下に下がるクラス追加
    $("#splash").fadeOut();//#splashエリアをフェードアウト
  });