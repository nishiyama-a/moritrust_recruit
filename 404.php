<?php
$pageInfo = array(
  "pagetitle" => "404 error｜森トラスト新卒採用サイト",
);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include(dirname(__FILE__) . '/assets/inc/head.php'); ?>
</head>

<body id="pagetop" class="fixed">
    <?php include(dirname(__FILE__) . '/assets/inc/bodyInr.php'); ?>
    <div class="l-wrap">
        <?php include(dirname(__FILE__). '/assets/inc/header.php'); ?>
        <main class="l-contents" role="main" id="">
            <section class="l-section">
                <div class="sc-inr-s">
                    <h2 class="head-1">お探しのページは見つかりません</h2>
                    <p class="head-txt mb30">お探しのページは一時的にアクセスができない状況にあるか、<br class="disp-pc">移動もしくは削除された可能性があります。</p>
                </div>
                <div class="btn-wrap clm-1">
                    <a class="btn-style btn-1" href="/">
                        <span>採用TOPへ</span>
                    </a>
                </div>
            </section>


        </main>

        <?php include(dirname(__FILE__) . '/assets/inc/footer.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/assets/js/script.min.js"></script>
</body>

</html>