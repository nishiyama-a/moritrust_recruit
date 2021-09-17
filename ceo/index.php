<?php
$pageInfo = array(
  "pagetitle" => "社長が語る森トラスト｜森トラスト新卒採用サイト",
);
?>

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
                <source media="(max-width:767px)" srcset="/assets/img/ceo/kv_index.png">
                <img src="/assets/img/ceo/kv_index.png">
            </picture>
            <div class="kv-ttl">
                <p class="kv-head-en">CEO TALKS</p>
                <div class="kv-box skew-box">
                    <h1 class="kv-head skew">社長が語る森トラスト</h1>
                </div>
            </div>
        </div>

        <main class="l-contents" role="main" id="ceo">
            <section class="l-section read-area">
                <div class="sc-inr">
                    <div class="between-box clm-box">
                        <picture>
                            <source media="(max-width:767px)" srcset="/assets/img/ceo/president.png">
                            <img src="/assets/img/ceo/president.png" alt="">
                        </picture>
                        <div class="txtbox clm-copy">
                            <div class="skew-box">
                                <h4 class="skew">その場所自体が生きたものに<br class="disp-sp">変わっていくのを、<br>
                                    本当に体現・体感することができるのが<br class="disp-sp">デベロッパーの一番の魅力</h4>
                            </div>
                            <div class="rb-txt">
                                <p>森トラスト代表取締役社長</p>
                                <p class="name">伊達 美和子</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="l-section">
                <div class="sc-inr">
                    <h2 class="head-2">CEO INTERVIEW</h2>
                    <p class="head-txt">森トラストがどのような企業なのか、事業の魅力や人財についての考え方など、<br class="disp-pc">
                        就活生の目線から聞きたいことを2020年入社の当時の新入社員が社長に直撃インタビューしました！</p>
                </div>
            </section>


            <section class="l-section interview-video">
                <div class="sc-inr">
                    <ul class="clm-2">
                        <li>
                            <div class="clm-box">
                                <div class="clm-copy">
                                    <p class="point-txt">デベロッパーの魅力は？<br>森トラストの企業ビジョンは？</p>
                                    <p class="side-num">VOL.<span>01</span></p>
                                </div>
                                <a href="https://www.yahoo.co.jp/" target="_blank">
                                    <div class="default-img clm-img icon-video">
                                        <img src="/assets/img/video_demo.jpg" alt="">
                                    </div>
                                </a>
                                <p>森トラスト社長が考えるデベロッパーの魅力や日本の未来像、森トラストの企業ビジョンについて語ります。</p>
                            </div>
                        </li>
                        <li>
                            <div class="clm-box">
                                <div class="clm-copy">
                                    <p class="point-txt">東京ワールドゲートに対する<br>社長の想いは？</p>
                                    <p class="side-num">VOL.<span>02</span></p>
                                </div>
                                <a href="https://www.yahoo.co.jp/" target="_blank">
                                    <div class="default-img clm-img icon-video">
                                        <img src="/assets/img/video_demo.jpg" alt="">
                                    </div>
                                </a>
                                <p>約12年にわたるプロジェクトの中で、どのようなエピソードがあったのか、そして竣工したときの想いについて語ります。</p>
                            </div>
                        </li>
                        <li>
                            <div class="clm-box">
                                <div class="clm-copy">
                                    <p class="point-txt">今後のホテルやオフィスはどうなる？</p>
                                    <p class="side-num">VOL.<span>03</span></p>
                                </div>
                                <a href="https://www.yahoo.co.jp/" target="_blank">
                                    <div class="default-img clm-img icon-video">
                                        <img src="/assets/img/video_demo.jpg" alt="">
                                    </div>
                                </a>
                                <p>新型コロナウイルスによる観光業への影響、テレワークの浸透によるオフィス賃貸市場への影響、さらには近年新たに認知されつつあるワーケーションについてなど、世間的にも関心の高まっている話題に対する考えを語ります。
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="clm-box">
                                <div class="clm-copy">
                                    <p class="point-txt">森トラストの人財育成制度は？</p>
                                    <p class="side-num">VOL.<span>04</span></p>
                                </div>
                                <a href="https://www.yahoo.co.jp/" target="_blank">
                                    <div class="default-img clm-img icon-video">
                                        <img src="/assets/img/video_demo.jpg" alt="">
                                    </div>
                                </a>
                                <p>森トラストの特徴的な人財育成制度について、またその制度に込める想いを語ります。</p>
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