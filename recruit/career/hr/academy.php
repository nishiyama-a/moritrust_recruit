<?php
$pageInfo = array(
  "pagetitle" => "MT ACADEMY｜森トラスト中途採用サイト",
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
        <div class="sc-kv -page2">
            <picture class="kv-img">
                <source media="(max-width:767px)" srcset="../assets/img/hr/kv_academy.png">
                <img src="../assets/img/hr/kv_academy.png">
            </picture>
            <div class="kv-ttl">
                <div class="kv-box skew-box">
                    <h1 class="kv-head skew">MT ACADEMY</h1>
                </div>
                <p class="kv-head-en">HUMAN RESOURCES 02</p>
            </div>
        </div>

        <main class="l-contents hr" role="main" id="academy">
            <section class="l-section">
                <div class="sc-box">
                    <div class="sc-inr">
                        <h2 class="head-1">森トラストオリジナル研修<br>『 MT ACADEMY 』</h2>
                        <p class="box-txt">新たなビジネス知識・手法に関する勉強会やワークショップを定期的に開催し、相互に刺激しあうことで、社員一人ひとりの成長を促す研修です。</p>
                    </div>
                </div>
                <div class="sc-box">
                    <div class="mediabox mediabox-l">
                        <div class="mediabox-img">
                            <img src="../assets/img/hr/academy01.png" alt="">
                        </div>
                        <div class="mediabox-copy copy-r cut-bg">
                            <dic class="cut-bg-l"></dic>
                            <div class="txt-t-img"><img src="../assets/img/hr/academy02.png" alt=""></div>
                            <p class="mb40">
                                自ら課題を考え、解決のために企画し、実行するためのベースとなるスキル「クリティカルシンキング」や「デザイン思考」を、オンライン学習や課題図書を通して“インプット”し、グループワークでアイデアを練り“アウトプット”することで、スキルの習得・習慣化を目指します。
                            </p>
                            <p>自発的に集まった参加者の中には若手社員も多く、2016年の開講から
                                5年・5期で、延べ182名が参加しました。森トラストの総合職社員の約55%が参加していることになります。成果物は、経営層を含む全社員に向け発表し、講評を受け、その後提案が事業化へと動き出すこともあります。
                            </p>
                        </div>
                    </div>
                    <div class="btn-wrap clm-1">
                        <a class="btn-style btn-2" href="./">
                            <span>一覧に戻る</span>
                        </a>
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