<?php
$pageInfo = array(
  "pagetitle" => "選考ステップ｜森トラスト中途採用サイト",
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
                <source media="(max-width:767px)" srcset="../assets/img/recruit/kv_steps.png">
                <img src="../assets/img/recruit/kv_steps.png">
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
                        <p>採用HPのエントリーボタンから応募してください。</p>
                    </div>
                    <div class="box-1">
                        <h3 class="box-head">書類選考</h3>
                        <p>履歴書および職務経歴書をもとに書類選考を行います。</p>
                    </div>
                    <div class="box-1">
                        <h3 class="box-head">人事面談</h3>
                        <p>人事部の採用担当にて面談を行います。</p>
                    </div>
                    <div class="box-1">
                        <h3 class="box-head">1次面接</h3>
                        <p>配属想定部門のマネージャーにて1次面接を行います。</p>
                    </div>
                    <div class="box-1">
                        <h3 class="box-head">適性検査</h3>
                        <p>WEB上で適正検査を受験頂きます。</p>
                    </div>
                    <div class="box-1">
                        <h3 class="box-head">最終面接</h3>
                        <p>配属想定部門の管掌役員にて最終面接を行います。</p>
                    </div>
                    <div class="box-1">
                        <h3 class="box-head">内定</h3>
                        <p>内定後に入社条件を提示させて頂きます。</p>
                    </div>
                </div>
            </section>


            <section class="l-section">
                <div class="sc-inr-s">
                            <div class="clm-box h-link btn-3">
                                <h3 class="btn-txt">募集要項</h3>
                                <p class="btn-style arr-next">view more</p>
                                <a class="clm-alink" href="requirement.php"></a>
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