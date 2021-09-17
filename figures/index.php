<?php
$pageInfo = array(
  "pagetitle" => "数字で見る森トラスト｜森トラスト新卒採用サイト",
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
                <source media="(max-width:767px)" srcset="/assets/img/corporate/kv_about.png">
                <img src="/assets/img/corporate/kv_about.png">
            </picture>
            <div class="kv-ttl">
                <p class="kv-head-en">CORPORATE</p>
                <div class="kv-box skew-box">
                    <h1 class="kv-head skew">会社概要</h1>
                </div>
            </div>
        </div>

        <main class="l-contents" role="main" id="about">
            <section class="l-section corporate">
                <div class="sc-inr-s">
                    <table class="tbl-1 tbl-sp mt40">
                        <tbody>
                            <tr>
                                <th>商号</th>
                                <td>森トラスト株式会社<br>MORI TRUST CO., LTD.</td>
                            </tr>
                            <tr>
                                <th>設立</th>
                                <td>1970年6月10日</td>
                            </tr>
                            <tr>
                                <th>会長</th>
                                <td>森 章 （もり あきら）</td>
                            </tr>
                            <tr>
                                <th>社長</th>
                                <td>伊達 美和子 （だて みわこ）</td>
                            </tr>
                            <tr>
                                <th>資本金</th>
                                <td>300億円</td>
                            </tr>
                            <tr>
                                <th>事業内容</th>
                                <td>不動産開発、ホテル経営および投資事業</td>
                            </tr>
                            <tr>
                                <th>本社所在地</th>
                                <td>〒105-0001<br>
                                    東京都港区虎ノ門2-3-17 虎ノ門2丁目タワー<br>
                                    【アクセス】<br>
                                    東京メトロ　銀座線「虎ノ門駅」3番出口より徒歩4分<br>
                                    東京メトロ　日比谷線「虎ノ門ヒルズ駅」A2出口より徒歩1分</td>
                            </tr>
                            <tr>
                                <th>コーポレート<br class="disp-pc">スローガン</th>
                                <td><span class="slogan">Create the Future</span><br>
                                    森トラストグループは、創業以来、先進技術やシステムを採用した<br class="disp-pc">
                                    大型複合開発をはじめ、日本初の法人会員制リゾートの創業、<br class="disp-pc">
                                    業界に先駆けた高級外資系ホテルの誘致、リート市場創設の提唱など、<br class="disp-pc">
                                    常に未来の社会を見据え、新たな商品・価値・ビジネスモデルを創造してまいりました。<br class="disp-pc">
                                    2030年より先の社会—。<br class="disp-pc">
                                    新しいテクノロジー、新しい形のコミュニティ、そしてそこから生まれる<br class="disp-pc">
                                    様々なシナジーをリアルとサイバーの両方で享受できる、わくわくするような未来の創造を、<br class="disp-pc">
                                    森トラストグループは目指してまいります。</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-wrap clm-1">
                        <a class="btn-style btn-2" href="/corporate/">
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
    <script src="/assets/js/script.min.js"></script>
</body>

</html>