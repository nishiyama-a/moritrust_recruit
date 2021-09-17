<?php
$pageInfo = array(
  "pagetitle" => "人財育成｜森トラスト新卒採用サイト",
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
                <source media="(max-width:767px)" srcset="/assets/img/hr/kv_index.png">
                <img src="/assets/img/hr/kv_index.png">
            </picture>
            <div class="kv-ttl">
                <p class="kv-head-en">HUMAN RESOURCES</p>
                <div class="kv-box skew-box">
                    <h1 class="kv-head skew">人財育成</h1>
                </div>
            </div>
        </div>


        <main class="l-contents" role="main" id="hr-top">

            <section class="l-section">
                <div class="sc-inr">
                    <p class="head-txt">森トラストは、コーポレートスローガン「Create the Future」のもと、2030年より先の社会を見据え、<br>
                        新たな商品・価値・ビジネスモデルを創造しています。<br>
                        わくわくするような未来を創造する、「考える力」「企画する力」「実行する力」を兼ね備えた人財を育成し、<br>
                        活力のある組織へと成長するための様々なプログラムを実施しています。</p>
                    <div class="sc-box">
                        <div class="between-box clm-box h-link">
                            <picture class="mt20 h-img">
                                <source media="(max-width:767px)" srcset="/assets/img/hr/hr01.png">
                                <img src="/assets/img/hr/hr01.png" alt="">
                            </picture>
                            <div class="txtbox">
                                <div class="skew-box">
                                    <h4 class="skew">MT TALK</h4>
                                </div>
                                <p class="rb-txt">HUMAN RESOURCES 01</p>
                            </div>
                            <a class="clm-alink" href="/hr/mttalk.php"></a>
                        </div>
                    </div>
                    <div class="sc-box">
                        <div class="between-box clm-box h-link">
                            <picture class="mt20 h-img">
                                <source media="(max-width:767px)" srcset="/assets/img/hr/hr02.png">
                                <img src="/assets/img/hr/hr02.png" alt="">
                            </picture>
                            <div class="txtbox">
                                <div class="skew-box">
                                    <h4 class="skew">MT ACADEMY</h4>
                                </div>
                                <p class="rb-txt">HUMAN RESOURCES 02</p>
                            </div>
                            <a class="clm-alink" href="/hr/academy.php"></a>
                        </div>
                    </div>
                    <div class="sc-box">
                        <div class="between-box clm-box h-link">
                            <picture class="mt20 h-img">
                                <source media="(max-width:767px)" srcset="/assets/img/hr/hr03.png">
                                <img src="/assets/img/hr/hr03.png" alt="">
                            </picture>
                            <div class="txtbox">
                                <div class="skew-box">
                                    <h4 class="skew">新人研修制度</h4>
                                </div>
                                <p class="rb-txt">HUMAN RESOURCES 03</p>
                            </div>
                            <a class="clm-alink" href="/hr/training.php"></a>
                        </div>
                    </div>
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