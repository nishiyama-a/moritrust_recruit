<?php
$pageInfo = array(
  "pagetitle" => "社員が語る森トラスト｜森トラスト新卒採用サイト",
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
                <source media="(max-width:767px)" srcset="/assets/img/crosstalk/kv_index.png">
                <img src="/assets/img/crosstalk/kv_index.png">
            </picture>
            <div class="kv-ttl">
                <p class="kv-head-en">CROSS TALK</p>
                <div class="kv-box skew-box">
                    <h1 class="kv-head skew">社員が語る森トラスト</h1>
                </div>
            </div>
        </div>


        <main class="l-contents" role="main" id="ct-top">

            <section class="l-section">
                <div class="sc-inr">
                    <div class="sc-box">
                        <div class="between-box clm-box h-link">
                            <picture class="mt20 h-img">
                                <source media="(max-width:767px)" srcset="/assets/img/crosstalk/crosstalk01.png">
                                <img src="/assets/img/crosstalk/crosstalk01.png" alt="">
                            </picture>
                            <div class="txtbox">
                                <div class="skew-box">
                                    <h4 class="skew">女性社員座談会</h4>
                                </div>
                                <p class="rb-txt">CROSS TALK 01</p>
                            </div>
                            <a class="clm-alink" href="/crosstalk/1.php"></a>
                        </div>
                    </div>
                    <div class="sc-box">
                        <div class="between-box clm-box h-link">
                            <picture class="mt20 h-img">
                                <source media="(max-width:767px)" srcset="/assets/img/crosstalk/crosstalk02.png">
                                <img src="/assets/img/crosstalk/crosstalk02.png" alt="">
                            </picture>
                            <div class="txtbox">
                                <div class="skew-box">
                                    <h4 class="skew">OJT×新入社員対談</h4>
                                </div>
                                <p class="rb-txt">CROSS TALK 02</p>
                            </div>
                            <a class="clm-alink" href="/crosstalk/2.php"></a>
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