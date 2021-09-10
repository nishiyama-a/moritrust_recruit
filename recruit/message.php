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
                <source media="(max-width:767px)" srcset="/assets/img/recruit/kv_message.png">
                <img src="/assets/img/recruit/kv_message.png">
            </picture>
            <div class="kv-ttl">
                <p class="kv-head-en">RECRUIT</p>
                <div class="kv-box skew-box">
                    <h1 class="kv-head skew">採用担当者からのメッセージ</h1>
                </div>
            </div>
        </div>

        <main class="l-contents" role="main" id="recruit">
            <section class="l-section read-area">
                <div class="sc-inr">
                    <div class="sc-box">
                        <div class="between-box clm-box">
                            <picture>
                                <source media="(max-width:767px)" srcset="/assets/img/recruit/message.png">
                                <img src="/assets/img/recruit/message.png" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="sc-box">
                        <div class="message-copy"><img src="/assets/img/cmn/copy.svg" alt="創るのは、街だけじゃない。"></div>
                    </div>
                    <div class="sc-box">
                        <p class="message">こんにちは、森トラスト新卒採用担当です。<br>
                            当社のホームページにアクセスいただき、ありがとうございます。<br>
                            就職活動ではたくさん悩み、考え、決断することがあるかと思います。<br>
                            私たちが発信する情報が少しでも皆さんのお役に立てれば幸いです。<br>
                            <br>
                            森トラストグループは、常に未来の社会を見据え、<br>
                            不動産事業／ホテル＆リゾート事業／投資事業において<br>
                            新たな商品・価値・ビジネスモデルを創造してきました。<br>
                            世の中が目まぐるしく変化し、<br>
                            ニューノーマルを見据えた街づくりが求められる今、<br>
                            不動産領域に捉われない多角的な視野を持ち、<br>
                            チャレンジ精神のある方には大きな活躍の場があります。<br>
                            皆さんの多様な経験・知識と柔軟な発想を活かして、<br>
                            私たちと一緒にわくわくする未来を共に創っていきましょう。<br>
                            <br>
                            みなさんにお会いできるのを楽しみにしています。
                        </p>
                    </div>
                </div>
            </section>

            <section class="l-section">
              <div class="sc-inr-s">
              <ul class="clm-2">
                <li>
                  <div class="clm-box h-link  btn-3">
                      <h3 class="btn-txt">募集要項</h3>
                      <p class="btn-style arr-next">view more</p>
                    <a class="clm-alink" href="/recruit/requirement.php"></a>
                  </div>
                </li>
                <li>
                  <div class="clm-box h-link  btn-3">
                      <h3 class="btn-txt">選考ステップ</h3>
                      <p class="btn-style arr-next">view more</p>
                    <a class="clm-alink" href="/recruit/steps.php"></a>
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