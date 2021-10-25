<?php
$pageInfo = array(
  "pagetitle" => "数字で見る森トラスト｜森トラストキャリア採用サイト",
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
                <source media="(max-width:767px)" srcset="../assets/img/figures/kv_index.png">
                <img src="../assets/img/figures/kv_index.png">
            </picture>
            <div class="kv-ttl">
                <p class="kv-head-en">FIGURES</p>
                <div class="kv-box skew-box">
                    <h1 class="kv-head skew">数字で見る森トラスト</h1>
                </div>
            </div>
        </div>

        <main class="l-contents" role="main" id="figures">
            <section class="l-section">
                <div class="sc-inr">
                    <div class="sc-box"><p class="head-txt">森トラストは少数精鋭で事業を行います。<br class="disp-pc">社員一人ひとりが持つ街の将来への影響力と責任は大きいですが、<br class="disp-pc">それぞれが持つ能力を最大限に発揮できるよう、ワークライフバランスに配慮し、<br class="disp-pc">働きやすい環境づくりにつとめています。</p></div>
                    <div class="sc-box figures-cnt">
                       <div class="figures-imgbox">
                           <h2 class="fugures-ttl">従業員の構成</h2>
                            <div class="figure-row">
                                <picture>
                                    <source media="(max-width:767px)" srcset="../assets/img/figures/figures01_sp.svg">
                                    <img src="../assets/img/figures/figures01.svg">
                                </picture>
                            </div>
                            <h2 class="fugures-ttl">少数精鋭</h2>
                            <div class="figure-row">
                                <picture>
                                    <source media="(max-width:767px)" srcset="../assets/img/figures/figures02_sp.svg">
                                    <img src="../assets/img/figures/figures02.svg">
                                </picture>
                            </div>
                            <h2 class="fugures-ttl">財務安定性</h2>
                            <div class="figure-row">
                                <picture>
                                    <source media="(max-width:767px)" srcset="../assets/img/figures/figures03_sp.svg">
                                    <img src="../assets/img/figures/figures03.svg">
                                </picture>
                            </div>
                            <h2 class="fugures-ttl">働きやすさ</h2>
                            <div class="figure-row">
                                <picture>
                                    <source media="(max-width:767px)" srcset="../assets/img/figures/figures04_sp.svg">
                                    <img src="../assets/img/figures/figures04.svg">
                                </picture>
                            </div>
                        </div>
                        <p class="note">※2021年4月1日時点</p>
                    </div>
                </div>
            </section>


        </main>

        <?php include(dirname(__FILE__) . '/../assets/inc/footer.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assets/js/script.min.js"></script>
    <script src="../assets/js/uniq.min.js"></script>

</body>

</html>