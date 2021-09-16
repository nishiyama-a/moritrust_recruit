<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include(dirname(__FILE__) . '/../assets/inc/head.php'); ?>
</head>

<body id="pagetop" class="fixed">
    <?php include(dirname(__FILE__) . '/../assets/inc/bodyInr.php'); ?>
    <div class="l-wrap">
        <?php include(dirname(__FILE__). '/../assets/inc/header.php'); ?>
        <div class="sc-kv -page">
            <picture class="kv-img">
                <source media="(max-width:767px)" srcset="/assets/img/recruit/kv_steps.png">
                <img src="/assets/img/recruit/kv_steps.png">
            </picture>
            <div class="kv-ttl">
                <p class="kv-head-en">RECRUIT</p>
                <div class="kv-box skew-box">
                    <h1 class="kv-head skew">選考ステップ</h1>
                </div>
            </div>
        </div>

        <main class="l-contents recruit" role="main" id="steps">
            <section class="l-section">
                <div class="sc-inr-s">
                <div class="box-1">
                <h3 class="box-head">エントリー受付</h3>
                <p>採用HPのエントリーボタンからエントリーしてください。<br>
  説明会等の開催についてはマイページにてご案内致します。</p>
</div>
<div class="box-1">
    <h3 class="box-head">会社説明会</h3>
    <p>選考上、会社説明会への参加は必須ではありません。</p>
              </div>
              <div class="box-1">
                <h3 class="box-head">エントリーシート提出</h3>
              </div>
              <div class="box-1">
                <h3 class="box-head">書類選考</h3>
                <p>提出いただいたエントリーシートをもとに書類選考を行います。</p>
              </div>
              <div class="box-1">
                <h3 class="box-head">Web試験・面接（複数回）</h3>
                <p>Web試験では適性検査、能力検査を実施致します。</p>
              </div>
              <div class="box-1">
                <h3 class="box-head">内々定</h3>
              </div>
                </div>
            </section>


            <section class="l-section">
                <div class="sc-inr-s">
                    <ul class="clm-2">
                        <li>
                            <div class="clm-box h-link btn-3">
                                <h3 class="btn-txt">採用担当からの<br>メッセージ</h3>
                                <p class="btn-style arr-next">view more</p>
                                <a class="clm-alink" href="/recruit/message.php"></a>
                            </div>
                        </li>
                        <li>
                            <div class="clm-box h-link btn-3">
                                <h3 class="btn-txt">募集要項</h3>
                                <p class="btn-style arr-next">view more</p>
                                <a class="clm-alink" href="/recruit/requirement.php"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

        </main>

        <?php include(dirname(__FILE__) . '/../assets/inc/footer.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/assets/js/script.min.js"></script>
</body>

</html>