<?php
$pageInfo = array(
  "pagetitle" => "事業紹介｜森トラスト新卒採用サイト",
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
                <source media="(max-width:767px)" srcset="../assets/img/ourbusiness/kv_index.png">
                <img src="../assets/img/ourbusiness/kv_index.png">
            </picture>
            <div class="kv-ttl">
                <p class="kv-head-en">OUR BUSINESS</p>
                <div class="kv-box skew-box">
                    <h1 class="kv-head skew">事業紹介</h1>
                </div>
            </div>
        </div>


        <main class="l-contents ourbusiness" role="main" id="ourbusiness">

            <section class="l-section">
                <div class="sc-inr">
                    <div class="sc-box">
                        <div class="between-box clm-box h-link">
                            <picture class="mt20 h-img">
                                <source media="(max-width:767px)" srcset="../assets/img/ourbusiness/business01.png">
                                <img src="../assets/img/ourbusiness/business01.png" alt="">
                            </picture>
                            <div class="txtbox">
                                <div class="skew-box">
                                    <h4 class="skew">不動産事業</h4>
                                </div>
                                <p class="rb-txt">OUR BUSINESS 01</p>
                            </div>
                            <a class="clm-alink" href="realestate.php"></a>
                        </div>
                    </div>
                    <div class="sc-box">
                        <div class="between-box clm-box h-link">
                            <picture class="mt20 h-img">
                                <source media="(max-width:767px)" srcset="../assets/img/ourbusiness/business02.png">
                                <img src="../assets/img/ourbusiness/business02.png" alt="">
                            </picture>
                            <div class="txtbox">
                                <div class="skew-box">
                                    <h4 class="skew">ホテル＆リゾート事業</h4>
                                </div>
                                <p class="rb-txt">OUR BUSINESS 02</p>
                            </div>
                            <a class="clm-alink" href="hotel.php"></a>
                        </div>
                    </div>
                    <div class="sc-box">
                        <div class="between-box clm-box h-link">
                            <picture class="mt20 h-img">
                                <source media="(max-width:767px)" srcset="../assets/img/ourbusiness/business03.png">
                                <img src="../assets/img/ourbusiness/business03.png" alt="">
                            </picture>
                            <div class="txtbox">
                                <div class="skew-box">
                                    <h4 class="skew">投資事業</h4>
                                </div>
                                <p class="rb-txt">OUR BUSINESS 03</p>
                            </div>
                            <a class="clm-alink" href="investment.php"></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include(dirname(__FILE__) . '/../assets/inc/footer.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assets/js/script.min.js"></script>
    <script src="../assets/js/uniq.js"></script>

</body>

</html>