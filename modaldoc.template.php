<?php
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
  require_once(dirname(__FILE__) . '/form/lib/functions.php');
  require_once(dirname(__FILE__) . '/form-modal/lib/functions.php');
  http_status(404);
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ラクハブ | 物流業・運送業をDX化、効率化する配車システム</title>
  <meta name="description" content="ラクハブは物流業・運送業の中小企業向けの配車システムです。配車表作成、請求書発行、ドライバーの労務管理、荷主ごとやドライバーごとの売上把握ができる経営分析、帳票作成、車検・車両管理など、多彩な機能を一つのシステムで実現できます。業務効率化・DX化はカスタマイズ対応可能で使いやすいラクハブにおまかせください。" />
  <meta name="format-detection" content="telephone=no" />

  <!-- favicon/webclipicon -->
  <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="./assets/img/favicon.ico" />

  <!-- ogp -->
  <meta property="og:site_name" content="ラクハブ | 物流業・運送業をDX化、効率化する配車システム" />
  <meta property="og:url" content="URL" />
  <meta property="og:type" content="website or article" />
  <meta property="og:title" content="ラクハブ | 物流業・運送業をDX化、効率化する配車システム" />
  <meta property="og:description" content="ラクハブは物流業・運送業の中小企業向けの配車システムです。配車表作成、請求書発行、ドライバーの労務管理、荷主ごとやドライバーごとの売上把握ができる経営分析、帳票作成、車検・車両管理など、多彩な機能を一つのシステムで実現できます。業務効率化・DX化はカスタマイズ対応可能で使いやすいラクハブにおまかせください。" />
  <meta property="og:image" content="./assets/img/ogp.png" />
  <meta property="og:locale" content="ja_JP" />
  <meta name="twitter:card" content="ラクハブ | 物流業・運送業をDX化、効率化する配車システム" />
  <meta name="twitter:description" content="ラクハブは物流業・運送業の中小企業向けの配車システムです。配車表作成、請求書発行、ドライバーの労務管理、荷主ごとやドライバーごとの売上把握ができる経営分析、帳票作成、車検・車両管理など、多彩な機能を一つのシステムで実現できます。業務効率化・DX化はカスタマイズ対応可能で使いやすいラクハブにおまかせください。" />
  <meta name="twitter:image:src" content="./assets/img/ogp.png" />

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" />

  <!-- css -->
  <link rel="stylesheet" href="./assets/css/slick.css" />
  <link rel="stylesheet" href="./assets/css/slick-theme.css" />
  <link rel="stylesheet" href="./assets/css/import.css" />

  <!-- js -->
  <script src="./assets/js/jquery-3.7.1.min.js" defer></script>
  <script src="./assets/js/jquery.matchHeight.js" defer></script>
  <script src="./assets/js/slick.min.js" defer></script>
  <script src="./assets/js/common.js" defer></script>
  <script src="./assets/js/validate.js" defer></script>
  <script src="./assets/js/validate-contact.js" defer></script>
  <script src="./assets/js/validate-doc.js" defer></script>
  <script>
    // fot-udkakugo-large-pr6n & Hiragino Kaku Gothic ProN W3
    (function(d) {
      var config = {
          kitId: "wyw8tir",
          scriptTimeout: 3000,
          async: true,
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = "https://use.typekit.net/" + config.kitId + ".js";
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || (a && a != "complete" && a != "loaded")) return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config);
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s);
    })(document);
    (function(d) {
      var config = {
          kitId: "wyw8tir",
          scriptTimeout: 3000,
          async: true,
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = "https://use.typekit.net/" + config.kitId + ".js";
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || (a && a != "complete" && a != "loaded")) return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config);
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s);
    })(document);
  </script>
</head>

<body class="open">
  <div class="free-month">
    <div class="txt">
      <div class="noti-txt">
        <p><span>10</span>社限定</p>
      </div>今なら<span class="free-month-num">1</span>年間無料でお試し可能！
    </div>
  </div>
  <header class="header">
    <div class="main-container">
      <div class="row">
        <div class="header-white">
          <h1 class="logo">
            <a href="/">
              <img src="./assets/img/logo.png" alt="ラクハブ" />
            </a>
          </h1>
          <div class="menu-wrapper">
            <ul class="nav-list">
              <li>
                <a href="#main">トップ</a>
              </li>
              <li>
                <a href="#op">特徴</a>
              </li>
              <li>
                <a href="#reason">中小企業向けの理由</a>
              </li>
              <li>
                <a href="#fun">機能</a>
              </li>
              <li>
                <a href="#voice">利用者の声</a>
              </li>
              <li>
                <a href="#faq">よくある質問</a>
              </li>
            </ul>
            <div class="sp">
              <div class="contact-box">
                <div class="box">
                  <h3 class="ttl">お気軽にお問い合わせください！</h3>
                  <div class="inner">
                    <div class="inner-row">
                      <div class="ph-box">
                        <div class="row">
                          <div class="ph-icon">
                            <img src="./assets/img/ph_icon.png" alt="電話番号の画像" />
                          </div>
                          <a href="tel:048-657-8683">048-657-8683</a>
                        </div>
                        <p class="time">受付時間 平日 10:00〜17:00<br />(土日・祝日を除く)</p>
                      </div>
                      <div class="btn-gp">
                        <div class="row">
                          <div class="btn document">資料<br />ダウンロード</div>
                          <div class="btn contact">お問い合わせ</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="menu">
            <div class="menu-btn"></div>
          </div>
        </div>
        <div class="header-black">
          <div class="row">
            <p>資料ダウンロード</p>
            <div class="img">
              <img src="./assets/img/circle_arrow.png" alt="arrowの画像" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main id="main">
    <div class="contents-block">
      <div class="mv-sec">
        <div class="mv-container">
          <div class="top-block">
            <div class="one">
              <div class="txt1"><span class="orange">物流業・運送業</span>の<span class="black">中小企業</span>の<span class="black">皆様！</span></div>
              <div class="txt2">
                <p>アナログ（紙）を使っていてDX化できていない…</p>
                <br />
                <p>属人化していて引き継ぎが大変…</p>
              </div>
              <div class="txt3">
                ラクハブ「1つ」で<br />
                業務をラクに効率化！
              </div>
              <div class="txt4">
                <img src="./assets/img/txt4.png" alt="txt4の画像" />
              </div>
            </div>
            <div class="two">
              <div class="btn-gp">
                <div class="row">
                  <div class="btn document">資料<br />ダウンロード</div>
                  <div class="btn contact">お問い合わせ</div>
                </div>
              </div>
            </div>
            <div class="three">
              <div class="mv-img">
                <img src="./assets/img/mv_img.png" alt="mvの画像" />
              </div>
              <p class="img-txt">ラクハブ イメージキャラクター <br /><span>タケシ</span>くん</p>
            </div>
          </div>
          <div class="solve-block">
            <div class="ttl-block">
              <h2 class="ttl">
                ラクハブ1つで<span><img src="./assets/img/solve_img.png" alt="solveの画像" /></span>っと解決！
              </h2>
            </div>
            <div class="list">
              <div class="item">
                <p>配車表作成</p>
              </div>
              <div class="item">
                <p>請求書発行</p>
              </div>
              <div class="item">
                <p>労務管理<span>※法令に合わせた注意喚起機能付</span></p>
              </div>
              <div class="item">
                <p>経営分析<span>※車両・荷主ごとの売上管理・分析</span></p>
              </div>
              <div class="item">
                <p>配車関連帳票作成</p>
              </div>
              <div class="item">
                <p>データ引き継ぎ<br />簡単</p>
              </div>
              <div class="item">
                <p>個別カスタマイズ<br />可能</p>
              </div>
              <div class="item soon">
                <p>車両管理<span>※車検・点検スケジュール管理</span></p>
              </div>
            </div>
            <div class="feature-txt">
              <p>その他、<span class="orange">随時機能追加予定</span></p>
            </div>
            <p class="idea-txt">
              こんな機能があったらいいながあれば<br />
              ぜひご連絡ください！
            </p>
          </div>
          <div class="contact-box">
            <div class="box">
              <h3 class="ttl">お気軽にお問い合わせください！</h3>
              <div class="inner">
                <div class="inner-row">
                  <div class="ph-box">
                    <div class="row">
                      <div class="ph-icon">
                        <img src="./assets/img/ph_icon.png" alt="電話番号の画像" />
                      </div>
                      <a href="tel:048-657-8683">048-657-8683</a>
                    </div>
                    <p class="time">受付時間 平日 10:00〜17:00<br />(土日・祝日を除く)</p>
                  </div>
                  <div class="btn-gp">
                    <div class="row">
                      <div class="btn document">資料<br />ダウンロード</div>
                      <div class="btn contact">お問い合わせ</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <span class="anchor op" id="op"></span>
      <section class="op-sec">
        <div class="container">
          <h2 class="sec-ttl">
            <div class="ttl-img">
              <img src="./assets/img/sec_ttl.png" alt="タイトルの画像" />
            </div>
            運行管理業務のお悩み解決します
          </h2>
          <p class="content-txt">
            ラクハブは、あらゆる<br /><span class="orange">運行管理業務に関するデータの一元管理</span>を<br />
            可能にする運行管理システムです。
          </p>
          <div class="card-list">
            <div class="card">
              <h3 class="ttl">これまで</h3>
              <h4 class="sub-ttl">
                アナログ（紙）で作業していて<br />
                デジタル化できていない
              </h4>
              <div class="card-img">
                <img src="./assets/img/op_img01.png" alt="運行管理業務のお悩み解決01の画像" />
              </div>
              <div class="para">
                <p>紙で保存していると紛失のリスクがある</p>
                <p>集計や、月次・年度での比較が大変</p>
              </div>
            </div>
            <div class="card">
              <h3 class="ttl">ラクハブを使うと</h3>
              <h4 class="sub-ttl">
                あらゆる情報をデジタル化！<br />
                確認したいデータをすぐ閲覧できる
              </h4>
              <div class="card-img">
                <img src="./assets/img/op_img02.png" alt="運行管理業務のお悩み解決02の画像" />
              </div>
              <div class="para">
                <p>データ化することで紙の書類の管理が一切 不要！</p>
                <p>希望の期間で自動集計、比較ができる</p>
              </div>
            </div>
            <div class="card">
              <h3 class="ttl">これまで</h3>
              <h4 class="sub-ttl">
                たくさんのアプリ・システムを使っていて<br />
                煩雑になっている
              </h4>
              <div class="card-img">
                <img src="./assets/img/op_img03.png" alt="運行管理業務のお悩み解決03の画像" />
              </div>
              <div class="para">
                <p>たくさんの画面を開くので作業効率が悪い</p>
                <p>システム間の連携ができず結局アナログ作 業に</p>
              </div>
            </div>
            <div class="card">
              <h3 class="ttl">ラクハブを使うと</h3>
              <h4 class="sub-ttl">
                あらゆるアプリ・システムを一まとめに！<br />
                本来の業務に集中できる
              </h4>
              <div class="card-img">
                <img src="./assets/img/op_img04.png" alt="運行管理業務のお悩み解決04の画像" />
              </div>
              <div class="para">
                <p>作業毎に複数のアプリやシステムを開く必要がない</p>
                <p>ラクハブを開けば仕事ができるので作業効率アップ！</p>
              </div>
            </div>
            <div class="card">
              <h3 class="ttl">これまで</h3>
              <h4 class="sub-ttl">属人化していて、<br />退職や休職時にスムーズに引き継げない</h4>
              <div class="card-img">
                <img src="./assets/img/op_img05.png" alt="運行管理業務のお悩み解決05の画像" />
              </div>
              <div class="para">
                <p>業務の停滞リスクを伴う・業務効率の低下を招く</p>
                <p>適切な評価ができず従業員内で不平等が生まれる</p>
              </div>
            </div>
            <div class="card">
              <h3 class="ttl">ラクハブを使うと</h3>
              <h4 class="sub-ttl">作業が属人化せず、<br />退職や休職に強い組織が作れる！</h4>
              <div class="card-img">
                <img src="./assets/img/op_img06.png" alt="運行管理業務のお悩み解決06の画像" />
              </div>
              <div class="para">
                <p>ノウハウの共有ができるようになる</p>
                <p>業務の品質が上がり、社内連携しやすくなる</p>
              </div>
            </div>
            <div class="card">
              <h3 class="ttl">これまで</h3>
              <h4 class="sub-ttl">売上・社員の動き・車両について<br />リアルタイムで把握できていない</h4>
              <div class="card-img">
                <img src="./assets/img/op_img07.png" alt="運行管理業務のお悩み解決07の画像" />
              </div>
              <div class="para">
                <p>車両・荷主ごとの売上管理・分析に時間がかかる</p>
                <p>ドライバー毎の売り上げがわかりにくい</p>
              </div>
            </div>
            <div class="card">
              <h3 class="ttl">ラクハブを使うと</h3>
              <h4 class="sub-ttl">データ化することで<br />リアルタイムで把握できるようになる</h4>
              <div class="card-img">
                <img src="./assets/img/op_img08.png" alt="運行管理業務のお悩み解決08の画像" />
              </div>
              <div class="para">
                <p>労務管理がラクに！</p>
                <p>ドライバー毎の売り上げがわかりモチベアップ！</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="moreover-sec">
        <div class="container">
          <div class="moreover">
            <div class="inner-box">
              <div class="inner-row">
                <div class="inner-col">
                  <div class="more-txt">
                    <p>その他、随時機能追加予定</p>
                  </div>
                  <div class="para">
                    <p><span class="orange">運行管理業務に関するお悩み</span>は<br />ラクハブにお任せください。</p>
                    <p>
                      <span class="orange">企業の経営者様や、運行管理部門の<br />管理者様をサポートします！</span>
                    </p>
                  </div>
                </div>
                <div class="inner-col">
                  <div class="img">
                    <img src="./assets/img/computer_img01.png" alt="コンピューター01の画像" />
                  </div>
                </div>
              </div>
            </div>
            <div class="contact-box">
              <div class="box">
                <h3 class="ttl">お気軽にお問い合わせください！</h3>
                <div class="inner">
                  <div class="inner-row">
                    <div class="ph-box">
                      <div class="row">
                        <div class="ph-icon">
                          <img src="./assets/img/ph_icon.png" alt="電話番号の画像" />
                        </div>
                        <a href="tel:048-657-8683">048-657-8683</a>
                      </div>
                      <p class="time">受付時間 平日 10:00〜17:00<br />(土日・祝日を除く)</p>
                    </div>
                    <div class="btn-gp">
                      <div class="row">
                        <div class="btn document">資料<br />ダウンロード</div>
                        <div class="btn contact">お問い合わせ</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <span class="anchor reason" id="reason"></span>
      <section class="reason-sec">
        <div class="container">
          <h2 class="sec-ttl">
            <div class="ttl-img">
              <img src="./assets/img/sec_ttl.png" alt="タイトルの画像" />
            </div>
            なぜ中小企業向けなのか
          </h2>
          <div class="re01-block">
            <h3 class="blk-ttl">
              <div class="ttl-img">
                <img src="./assets/img/reason_img01.png" alt="reason01の画像" class="pc" />
                <img src="./assets/img/reasonsp_img01.png" alt="reasonsp01の画像" class="sp" />
              </div>
              <div class="txt">ラクハブは運送会社が作成した<br class="sp" /><span class="orange">運行管理システム</span></div>
            </h3>
            <div class="blk-inner">
              <div class="row">
                <div class="left-col">
                  <p>ラクハブは、実際に運送業・物流業を営む中小企業の監修のもとに開発した運行管理システムです。<br />配車表の作成だけではなく、請求書の発行や売上データの分析、法規制に則った労務管理など業務に必要な機能がまるっと搭載された多機能システムとなっております。<br />実際に使っていただきながらヒアリングを重ね、アップデートしてきました。<br />運送業・物流業の中小企業の実務に沿った、使いやすく、痒いところに手の届くシステムとなっております。</p>
                </div>
                <div class="right-col">
                  <div class="img">
                    <img src="./assets/img/reason_img03.png" alt="reason01コンピューターの画像" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="re02-block">
            <h3 class="blk-ttl">
              <div class="ttl-img">
                <img src="./assets/img/reason_img02.png" alt="reason02の画像" class="pc" />
                <img src="./assets/img/reasonsp_img02.png" alt="reasonsp02の画像" class="sp" />
              </div>
              <div class="txt"><span class="orange">3つの観点</span>で<br class="sp" /><span class="orange">ローコストでデジタル化</span>を実現！</div>
            </h3>
            <div class="card-row">
              <div class="card-col one">
                <h4 class="card-ttl">他社比較でローコスト</h4>
                <div class="card-body">
                  <div class="img">
                    <img src="./assets/img/reason_img07.png" alt="reason07の画像" />
                  </div>
                  <p class="txt">ラクハブの使いやすさを実際に使って感じていただきたいので<span>10社限定で1年間無料のキャンペーンを実施</span>しています。費用追加なしでお試しいただけるので、コストを気にせず現在お使いのシステムと並行して試してみることができます。</p>
                </div>
              </div>
              <div class="card-col two">
                <h4 class="card-ttl">「1つ」で色々できるので、総額がローコスト</h4>
                <div class="card-body">
                  <div class="img">
                    <img src="./assets/img/reason_img08.png" alt="reason08の画像" />
                  </div>
                </div>
              </div>
              <div class="card-col three">
                <h4 class="card-ttl">自社開発と比べてローコスト</h4>
                <div class="card-body">
                  <p class="txt">独自のシステムを開発する場合、数百万円〜数千万円の開発コストや時間、専門的知識を持った人材の確保など、なかなかハードルが高いのが現状です。<br />開発後もSEを抱えていないと運用や機能追加のたびにコストがかかってしまいます。<br />中小企業の実務に必要な機能を網羅したラクハブを使えば、<span class="orange">ローコストでデジタル化</span>が実現できます。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <span class="anchor fun" id="fun"></span>
      <section class="fun-sec">
        <div class="container">
          <h2 class="sec-ttl">
            <div class="ttl-img">
              <img src="./assets/img/sec_ttl01.png" alt="タイトル01の画像" />
            </div>
            豊富な機能のご紹介
          </h2>
          <p class="content-txt">運行管理業務に必要な機能をラクハブ1つで解決！<br /><span class="orange">経理・勤怠管理</span>のほかに<br /><span class="orange">経営の見える化</span>までサポートします。</p>
          <div class="fcard-list">
            <div class="fcard">
              <div class="fcard-inner">
                <div class="img">
                  <img src="./assets/img/fun_img01.png" alt="配車表作成の画像" />
                </div>
                <h3 class="f-ttl">配車表作成</h3>
                <div class="f-para">
                  <p>リアルタイムに運行状況を把握でき、空き車両が一目瞭然になるため、効率的な稼働を実現できます。<br />また、自車と傭車を分けて表示もでき、ルーティン案件の登録もできるので、配車担当者の作業効率がアップします。</p>
                </div>
              </div>
            </div>
            <div class="fcard">
              <div class="fcard-inner">
                <div class="img">
                  <img src="./assets/img/fun_img02.png" alt="請求書発行の画像" />
                </div>
                <h3 class="f-ttl">請求書発行</h3>
                <div class="f-para">
                  <p>他の請求書発行システムを使わず、ラクハブで完結できます。<br />請求書の記載ミスや請求漏れをなくし、発行に掛かる工数の削減にもつながります。請求書のフォーマットは適格請求書にも対応しています。</p>
                </div>
              </div>
            </div>
            <div class="fcard">
              <div class="fcard-inner">
                <div class="img">
                  <img src="./assets/img/fun_img03.png" alt="労務管理の画像" />
                </div>
                <h3 class="f-ttl">労務管理<span>（法令に合わせた注意喚起付）</span></h3>
                <div class="f-para">
                  <p>勤務管理表、シフト表を作成・編集・出力することができます。<br />社員の労働時間を一覧で俯瞰でき、日々の労働時間、残業や休日などの管理が楽に行えるので、労務管理にかかる時間を短縮できます。<br />法令を遵守できているかどうかシステムがチェックしてくれる法規制チェック機能も搭載しています。</p>
                </div>
              </div>
            </div>
            <div class="fcard">
              <div class="fcard-inner">
                <div class="img">
                  <img src="./assets/img/fun_img04.png" alt="経営分析の画像" />
                </div>
                <h3 class="f-ttl">経営分析<span>（車両・荷主ごとの売上管理・分析）</span></h3>
                <div class="f-para">
                  <p>車両・荷主ごとの売り上げ・案件数が一覧化できます。<br />傭車の事前手配や、売り上げの予想を立てる際に役立ちます。</p>
                </div>
              </div>
            </div>
            <div class="fcard">
              <div class="fcard-inner">
                <div class="img">
                  <img src="./assets/img/fun_img06.png" alt="配車関連帳票作成の画像" />
                </div>
                <h3 class="f-ttl">配車関連帳票作成</h3>
                <div class="f-para">
                  <p>リアルタイムに更新される配車状況を共有し、簡単に自動集計して出力できる帳票出力機能です。<br />帳票の作成が楽に行えるので、配車担当の業務効率がアップします。</p>
                </div>
              </div>
            </div>
            <div class="fcard">
              <div class="fcard-inner">
                <div class="img">
                  <img src="./assets/img/fun_img07.png" alt="データ引き継ぎ簡単の画像" />
                </div>
                <h3 class="f-ttl">データ引き継ぎ簡単</h3>
                <div class="f-para">
                <p>ラクハブにログインするだけでリアルタイムで最新の情報が共有できるので、担当者の引き継ぎの際にも共有漏れが起きることがありません。<br />過去のデータも遡って確認できるため、データの紛失のリスクもありません。<br />他のシステムやエクセルでの管理からラクハブに移行する際にもデータインポート機能を使うことで楽に移行ができます。</p>
                </div>
              </div>
            </div>
            <div class="fcard">
              <div class="fcard-inner">
                <div class="img">
                  <img src="./assets/img/fun_img08.png" alt="個別カスタマイズ可能の画像" />
                </div>
                <h3 class="f-ttl">個別カスタマイズ可能</h3>
                <div class="f-para">
                <p>「こういう機能がほしい」「こういう使い方がしたい」というご要望がありましたらお問い合わせください。<br />お客様の商習慣に合わせた使いやすいシステムになるよう個別カスタマイズ対応します。</p>
                </div>
              </div>
            </div>
            <div class="fcard soon">
              <div class="fcard-inner">
                <div class="img">
                  <img src="./assets/img/fun_img05.png" alt="車両管理の画像" />
                </div>
                <h3 class="f-ttl">車両管理<span>（車検・点検スケジュール管理）</span></h3>
                <div class="f-para">
                <p>車検の予定、修理履歴、燃料の履歴、保険、リース期間など車両管理に必要な情報をデジタルに一元管理できます。<br />スケジュールが一目瞭然になるため、点検漏れや更新漏れがなくなり、余裕を持った車両管理ができるようになります。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="moreover-sec bot">
        <div class="container">
          <div class="moreover">
            <div class="inner-box">
              <div class="inner-row">
                <div class="inner-col">
                  <div class="more-txt">
                    <p>その他、随時機能追加予定</p>
                  </div>
                  <div class="para">
                    <p><span class="orange">運行管理業務に関するお悩み</span>は<br />ラクハブにお任せください。</p>
                    <p>
                      <span class="orange">企業の経営者様や、運行管理部門の<br />管理者様をサポートします！</span>
                    </p>
                  </div>
                </div>
                <div class="inner-col">
                  <div class="img">
                    <img src="./assets/img/computer_img01.png" alt="コンピューター01の画像" />
                  </div>
                </div>
              </div>
            </div>
            <div class="contact-box">
              <div class="box">
                <h3 class="ttl">お気軽にお問い合わせください！</h3>
                <div class="inner">
                  <div class="inner-row">
                    <div class="ph-box">
                      <div class="row">
                        <div class="ph-icon">
                          <img src="./assets/img/ph_icon.png" alt="電話番号の画像" />
                        </div>
                        <a href="tel:048-657-8683">048-657-8683</a>
                      </div>
                      <p class="time">受付時間 平日 10:00〜17:00<br />(土日・祝日を除く)</p>
                    </div>
                    <div class="btn-gp">
                      <div class="row">
                        <div class="btn document">資料<br />ダウンロード</div>
                        <div class="btn contact">お問い合わせ</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <span class="anchor voice" id="voice"></span>
      <section class="voice-sec">
        <div class="">
          <h2 class="sec-ttl">
            <div class="ttl-img">
              <img src="./assets/img/sec_ttl02.png" alt="タイトル02の画像" />
            </div>
            ご利用いただいた企業様の声
          </h2>
          <div class="slider-blk">
            <div class="slider">
              <div class="card">
                <div class="card-wrapper">
                  <h3 class="label">USER’s VOICE 01</h3>
                  <div class="card-inner">
                    <div class="top">
                      <h4 class="ttl">配車に関する特別な知見が無くても、触ってみたら感覚的にできてしまうようなイメージを受けました。</h4>
                      <h5 class="company">株式会社しんけん 様</h5>
                      <div class="img">
                        <div class="logo">
                          <img src="./assets/img/company.png" alt="企業ロゴの画像" />
                        </div>
                      </div>
                    </div>
                    <div class="que-blk">
                      <h6 class="ques">サービス内容について</h6>
                      <p class="txt">諸データの見える化により、いつ・だれが・どの輸送先に向かうのかが一目瞭然となり、安全・確実な輸送体制の構築を支える裏付けとして機能しています。<br>経験や知識の有無問わず誰でもこのシステムを使えば配車組ができるという感覚があったのが好印象でした。<br>データを取り込めば1分2分でいったん配車が完成し、あとそれを手直しするだけで15分、早ければ10分で完成しています。</p>
                    </div>
                    <div class="que-blk">
                      <h6 class="ques">サポートについて</h6>
                      <p class="txt">サポートの対応スピードは本当に早かったです。メールで質問を送ると、すぐに電話が来て驚きました。1時間後、2時間後にメールで回答が来るのが普通かと思っていましたので、有難く感じています。<br>スムーズなシステム運用にはサポートも欠かせないと感じていました。導入後は、納得のいく結果が出るまでしっかりと、御社のサポート担当と細かい入力データの設定を行えたことも満足しています。<br>ソフトウェアとしての評価ポイントは計算能力ですが、法人さんとしてサポート体制がしっかりしているなといった印象もありますので、この点も高く評価しています。</p>
                    </div>
                    <ul class="ttl-list">
                      <li>一般貨物・地場配送</li>
                      <li>車両台数：62台</li>
                      <li>従業員数：74名</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-container">
              <div class="slider-buttons">
                <button type="button" class="slick-prevv"></button>
                <button type="button" class="slick-nextt"></button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <span class="anchor faq" id="faq"></span>
      <section class="faq-sec">
        <div class="container">
          <h2 class="sec-ttl">よくあるご質問</h2>
          <div class="faq-list">
            <div class="faq-card">
              <div class="faq-inner">
                <h3 class="faq-ttl">料金体系はどのようなものがありますか？</h3>
                <div class="faq-body">
                  <p>ラクハブは月額18,000円（税抜）で全ての機能をお使いいただけます。ドライバー数や車両台数での金額変動はありません。さらに、ラクハブの使いやすさを実際に使って感じていただきたいので10社限定で1年間無料のキャンペーンを実施しています。</p>
                </div>
              </div>
            </div>
            <div class="faq-card">
              <div class="faq-inner">
                <h3 class="faq-ttl">利用開始・導入までにどのぐらい時間がかかりますか？</h3>
                <div class="faq-body">
                  <p>ご利用申請後、手続きが完了したらご利用開始いただけます。（当日〜数日くらいでご利用開始いただけます。）ユーザーやドライバー、支店・営業所などのデータの登録をご自身でされる場合は利用開始当日からすぐご利用いただけます。データ登録をラクハブサポートチームにご依頼される場合は利用対象となる支店・営業所の数やユーザー数・ドライバー数にもよりますが、当日〜数日程度で初期設定を完了できるケースがほとんどです。</p>
                </div>
              </div>
            </div>
            <div class="faq-card">
              <div class="faq-inner">
                <h3 class="faq-ttl">導入後のサポート体制はどうなってますか？</h3>
                <div class="faq-body">
                  <p>ラクハブ内のメッセージ機能から改善要望やご質問を手軽に送っていただけます。また、運送業・物流業界の実務に精通している専門のサポートチームがおりますのでご安心ください。</p>
                </div>
              </div>
            </div>
            <div class="faq-card">
              <div class="faq-inner">
                <h3 class="faq-ttl">配車決定後の変更は簡単にできますか？</h3>
                <div class="faq-body">
                  <p>パソコンのマウス操作だけで、配車の登録が可能なシステムとなっていますので、簡単に配車変更を行えます。</p>
                </div>
              </div>
            </div>
            <div class="faq-card">
              <div class="faq-inner">
                <h3 class="faq-ttl">労務管理はどのようなことができますか？</h3>
                <div class="faq-body">
                  <p>勤務管理表、シフト表の作成・閲覧・出力はもちろんのこと、法令を遵守できているかどうかが一目でわかる「法規制チェック」機能があります。</p>
                </div>
              </div>
            </div>
            <div class="faq-card">
              <div class="faq-inner">
                <h3 class="faq-ttl">ラクハブで発行する請求書はインボイス対応していますか？</h3>
                <div class="faq-body">
                  <p>対応しています。適格請求書対応のフォーマットで請求書の作成・発行ができるシステムとなっております。</p>
                </div>
              </div>
            </div>
            <div class="faq-card">
              <div class="faq-inner">
                <h3 class="faq-ttl">カスタマイズは可能ですか？</h3>
                <div class="faq-body">
                  <p>可能です。ご要望の機能や使い方をご相談いただきましたら個別カスタマイズ対応いたします。</p>
                </div>
              </div>
            </div>
            <div class="faq-contact">
              <div class="contact-box">
                <div class="box">
                  <h3 class="ttl">お気軽にお問い合わせください！</h3>
                  <div class="inner">
                    <div class="inner-row">
                      <div class="ph-box">
                        <div class="row">
                          <div class="ph-icon">
                            <img src="./assets/img/ph_icon.png" alt="電話番号の画像" />
                          </div>
                          <a href="tel:048-657-8683">048-657-8683</a>
                        </div>
                        <p class="time">受付時間 平日 10:00〜17:00<br />(土日・祝日を除く)</p>
                      </div>
                      <div class="btn-gp">
                        <div class="row">
                          <div class="btn document">資料<br />ダウンロード</div>
                          <div class="btn contact">お問い合わせ</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer>
        <div class="container">
          <div class="footer-blk">
            <div class="footer-logo">
              <img src="./assets/img/footer_logo.png" alt="フッターのロゴ" />
            </div>
            <ul class="footer-nav">
              <li>
                <a href="#main">トップ</a>
              </li>
              <li>
                <a href="#op">特徴</a>
              </li>
              <li>
                <a href="#reason">中小企業向けの理由</a>
              </li>
              <li>
                <a href="#fun">機能</a>
              </li>
              <li>
                <a href="#voice">利用者の声</a>
              </li>
              <li>
                <a href="#faq">よくある質問</a>
              </li>
            </ul>
            <div class="footer-txt">
              <a href="#">
                <p class="desc">特定商法に基づく表記</p>
              </a>
              <p class="copyright">© Sponsaru, Inc.</p>
            </div>
          </div>
        </div>
      </footer>
      <div class="scrolltop">
        <a href="javascript:void(0);" class="pagetop d-none"></a>
      </div>
    </div>
    <div class="contact-block">
      <div class="form">
        <div class="inner">
          <form method="post" action="" name="inquiry_form">
            <div class="row">
              <?php $name = 'company_name'; ?>
              <label for="input-<?php echo h($name); ?>">会社名</label><span class="require">必須</span>
              <input type="text" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>">
              <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
            </div>
            <div class="row">
              <?php $name = 'name'; ?>
              <label for="input-<?php echo h($name); ?>">お名前</label><span class="require">必須</span>
              <input type="text" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>">
              <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
            </div>
            <div class="row">
              <?php $name = 'phno'; ?>
              <label for="input-<?php echo h($name); ?>">電話番号</label><span class="require">必須</span>
              <input type="text" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>">
              <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
            </div>
            <div class="row">
              <?php $name = 'email'; ?>
              <label for="input-<?php echo h($name); ?>">メール</label><span class="require">必須</span>
              <input type="text" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>">
              <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
            </div>
            <div class="row">
              <?php $name = 'content_inquiry'; ?>
              <label for="input-<?php echo h($name); ?>">お問い合わせ内容</label><span class="require">必須</span>
              <textarea rows="10" cols="10" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>"></textarea>
              <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
            </div>
            <div class="row">
              <p class="info-txt">本フォームへの送信をもって個人情報の取り扱いに同意します</p>
            </div>
            <div class="submit-btn" id="contact-submit">送信する</div>
            <input type="hidden" name="mode" value="submit" />
          </form>
        </div>
      </div>
    </div>

    <div class="modal-overlay show"></div>
    <div class="modal-box">
      <div class="modal-wrapper">
        <div class="modal-close"></div>
        <h5 class="ttl">お問い合わせ</h5>
        <div class="contact-block">
          <div class="form">
            <div class="inner">
              <form method="post" action="" name="inquiry_form_modal">
                <div class="row">
                  <?php $name = 'company_name_modal'; ?>
                  <label for="input-<?php echo h($name); ?>">会社名</label><span class="require">必須</span>
                  <input type="text" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>">
                  <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
                </div>
                <div class="row">
                  <?php $name = 'name_modal'; ?>
                  <label for="input-<?php echo h($name); ?>">お名前</label><span class="require">必須</span>
                  <input type="text" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>">
                  <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
                </div>
                <div class="row">
                  <?php $name = 'phno_modal'; ?>
                  <label for="input-<?php echo h($name); ?>">電話番号</label><span class="require">必須</span>
                  <input type="text" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>">
                  <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
                </div>
                <div class="row">
                  <?php $name = 'email_modal'; ?>
                  <label for="input-<?php echo h($name); ?>">メール</label><span class="require">必須</span>
                  <input type="text" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>">
                  <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
                </div>
                <div class="row">
                  <?php $name = 'content_inquiry_modal'; ?>
                  <label for="input-<?php echo h($name); ?>">お問い合わせ内容</label><span class="require">必須</span>
                  <textarea rows="10" cols="10" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>"></textarea>
                  <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
                </div>
                <div class="row">
                  <p class="info-txt">本フォームへの送信をもって個人情報の取り扱いに同意します</p>
                </div>
                <div class="submit-btn" id="modal-contact-submit">お問い合わせ内容を送信する</div>
                <input type="hidden" name="mode" value="submit-modal" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-box-thanks">
      <div class="modal-wrapper">
        <div class="modal-close"></div>
        <h5 class="ttl">お問い合わせ</h5>
        <h6>お問い合わせが完了しました。</h6>
        <p class="para">お問い合わせをいただきありがとうございます。<br />担当者から折り返しのご連絡をさせていただきますので、今しばらくお待ちくださいませ。</p>
        <a href="/" class="top-btn">TOPページに戻る</a>
      </div>
    </div>
    <div class="modal-box-doc">
      <div class="modal-wrapper">
        <div class="modal-close"></div>
        <h5 class="ttl">資料ダウンロード</h5>
        <div class="contact-block">
          <div class="form">
            <div class="inner">
              <form method="post" action="" name="inquiry_form_doc">
                <div class="row">
                  <?php $name = 'company_name_modal_doc'; ?>
                  <label for="input-<?php echo h($name); ?>">会社名・お名前</label><span class="require">必須</span>
                  <input type="text" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>">
                  <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
                </div>
                <div class="row">
                  <?php $name = 'email_modal_doc'; ?>
                  <label for="input-<?php echo h($name); ?> ">メールアドレス</label><span class="require">必須</span>
                  <input type="text" name="<?php echo h($name); ?>" value="<?php echo h($input[$name]['value']); ?>" id="input-<?php echo h($name); ?>">
                  <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
                </div>
                <div class="row">
                  <label for="">個人情報保護方針</label>
                  <div class="privacy">
                    <p>個人情報保護方針</p>
                    <p class="pt35 pb35">当社は、今日の高度情報通信社会において、個人情報が重要な資産であることを理解し、個人情報を正しく扱うことが当社の重要な責務であると認識し、以下の方針に基づき、個人情報の保護に努めることを宣言します。</p>
                    <p class="pb35">1.個人情報保護に関する法令や規律の遵守</p>
                    <p class="pb35">当社は、個人情報の保護に関する法令及びその他の規範を遵守し、個人情報を適正に取り扱います。</p>
                    <p class="pb35">2.個人情報の取得</p>
                    <p class="pb35">当社が個人情報を取得する際には、利用目的を明確化するよう努力し、適法かつ公正な手段によって個人情報を取得します。</p>
                    <p class="pb35">3.個人情報の利用</p>
                    <p class="pb35">当社が取得した個人情報は、取得の際に示した利用目的もしくはそれと合理的な関連性のある範囲内で、業務の遂行上必要な限りにおいて利用します。また、個人情報を第三者との間で共同利用し、または個人情報の取扱いを第三者に委託する場合には、共同利用の相手方及び第三者について個人情報の適正な利用を実現するための監督を行います。</p>
                    <p class="pb35">4.個人情報の第三者提供</p>
                    <p class="pb35">当社は、法令に定める場合を除き、個人情報を事前に本人の同意を得ることなく第三者に提供しません。</p>
                    <p class="pb35">5.個人情報の管理</p>
                    <p class="pb35">当社は、個人情報の正確性及び最新性を保ち、安全に管理するとともに個人情報の紛失、改竄、漏洩などを防止するため、必要かつ適正な情報セキュリティ対策を実現します。</p>
                    <p class="pb35">6.個人情報の開示・訂正・利用停止・消去</p>
                    <p class="pb35">当社は、本人が個人情報について、開示・訂正・利用停止・消去などを求める権利を有していることを認識し、これらの要求ある場合には法令に従って速やかに対応します。</p>
                    <p class="pb35">7.組織・体制</p>
                    <p class="pb35">当社は、業務上使用する個人情報について適正な管理を実施するとともに、業務上の個人情報の適正な取扱いを実現するための体制を構築します。</p>
                  </div>
                </div>
                <div class="row">
                  <div class="check">
                    <?php $name = 'agree_modal_doc'; ?>
                    <input type="checkbox" name="<?php echo h($name); ?>" id="input-<?php echo h($name); ?>" />
                    <label for="input-<?php echo h($name); ?>">個人情報の取り扱いに同意する。</label>
                  </div>
                  <span class="error" id="err-msg-input-<?php echo h($name); ?>"><?php if (!empty($err_msg['<?php echo h($name); ?>'])) echo $err_msg['<?php echo h($name); ?>']; ?></span>
                </div>
                <div class="submit-btn" id="modal-doc-submit">資料をダウンロードする</div>
                <input type="hidden" name="mode" value="doc-modal" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-box-doc-thanks show">
      <div class="modal-wrapper">
        <div class="modal-close"></div>
        <h5 class="ttl">資料ダウンロード</h5>
        <h6>メールにてダウンロードURLをお送りいたしました。</h6>
        <p class="para">このたびは資料ダウンロードのお申し込みをいただき、誠にありがとうございました。<br />メールにてダウンロードURLをお送りいたしましたのでご確認ください。</p>
        <a href="/" class="top-btn">TOPページに戻る</a>
      </div>
    </div>
  </main>
</body>

</html>
