<?php
$pageInfo = array(
  "pagetitle" => "",
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
        <div class="sc-kv">
            <div class="first_kv">
                <div class="kv_top">
                    <p class="side">MORI TRUST<span class="red">GRADUATE RECRUITMENT</span></p>
                    <p class="scroll arr-next">SCROLL</p>
                    <picture class="copy">
                        <source media="(max-width:767px)" srcset="/assets/img/top/copy_sp.svg">
                        <img src="/assets/img/top/copy.svg" alt="創るのは、街だけじゃない。">
                    </picture>
                </div>
                <div class="kv-scroll">
                    <img src="/assets/img/top/kv_logo.svg" alt="" id="scroll_logo">
                    <div class="overlay"></div>
                </div>
                <div id="kv-img">
                    <div class="copy_sp disp-sp">
                        <img src="/assets/img/top/copy_sp.svg" alt="創るのは、街だけじゃない。">
                    </div>
                    <p id="kv_copy">
                        <span>森トラストは、不動産の会社というイメージがあるかもしれません。</span>
                        <span>約<span class="combine">70</span>年にわたり、都心の大型複合開発や</span>
                        <span>リゾート地におけるホテル開発事業を手掛けてきました。</span>
                        <span>そこで働く人、訪れる人、その街の人にとって、</span>
                        <span>「より豊かなライフスタイル」を提案したい。</span>
                        <span>そのための「新しい価値」を提供することで、</span>
                        <span>地域や社会に貢献したい。</span><br class="disp-sp"><br class="disp-sp">
                        <span class="br2">創業以来ずっと、この想いを軸に事業を展開してきました。</span>
                        <span>世界が大きく変わりつづける中で、私たちにできることは何だろう。</span>
                        <span>多様化する一人ひとりと、未来を見つめて、</span>
                        <span>森トラストの挑戦は広がりつづけています。</span>
                    </p>
                </div>
            </div>
            <div class="swiper-main sp-wfull view-up">
                <div class="swiper-container" id="slider-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p class="kv_en"><span class="stroke">MESSAGE</span>MESSAGE</p>
                            <picture class="kv-back">
                                <source media="(max-width:767px)" srcset="/assets/img/top/kv_slide01_sp.jpg">
                                <img src="/assets/img/top/kv_slide01.jpg" alt="">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <p class="kv_en"><span class="stroke">MESSAGE</span>MESSAGE</p>
                            <picture class="kv-back">
                                <source media="(max-width:767px)" srcset="/assets/img/top/kv_slide02_sp.jpg">
                                <img src="/assets/img/top/kv_slide02.jpg" alt="">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <p class="kv_en"><span class="stroke">MESSAGE</span>MESSAGE</p>
                            <picture class="kv-back">
                                <source media="(max-width:767px)" srcset="/assets/img/top/kv_slide03_sp.jpg">
                                <img src="/assets/img/top/kv_slide03.jpg" alt="">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="l-contents" role="main">
            <section class="pickup">
                <div class="ttl_area">
                    <h3 class="ttl_ja">ピックアッププロジェクト</h3>
                    <h2 class="ttl_en"><span class="stroke">PICK UP PROJECT</span>PICK UP PROJECT<span
                            class="stroke">PICK UP PROJECT</span>PICK UP PROJECT<span class="stroke">PICK UP
                            PROJECT</span>PICK UP PROJECT<span class="stroke">PICK UP PROJECT</span>PICK UP PROJECT</h2>
                </div>
                <div class="cut-bg">
                    <div class="cut-bg-r"></div>
                    <ul class="project_wrap">
                        <li class="project_item open_first">
                            <a href="/pickup/tokyoworldgate.php">
                                <div class="project_bg">
                                    <div class="project_pic"><img src="/assets/img/top/index_twg.png" alt="東京ワールドゲート"></div>
                                    <div class="txtarea">
                                        <p class="dec">PICK UP <br class="is-sp">PROJECT 01</p>
                                        <div class="skew-box">
                                            <h4 class="skew">東京ワールドゲート</h4>
                                        </div>
                                        <p class="btn-style arr-next">view more</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="project_item">
                            <a href="/pickup/hotel.php">
                                <div class="project_bg">
                                    <div class="project_pic"><img src="/assets/img/top/index_hotel.png" alt="東京ワールドゲート">
                                    </div>
                                    <div class="txtarea">
                                        <p class="dec">PICK UP <br class="is-sp">PROJECT 02</p>
                                        <div class="skew-box">
                                            <h4 class="skew">3つのホテル</h4>
                                        </div>
                                        <p class="btn-style arr-next">view more</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="project_item">
                            <a href="/pickup/innovation.php">
                                <div class="project_bg">
                                    <div class="project_pic"><img src="/assets/img/top/index_innovation.png"
                                            alt="東京ワールドゲート"></div>
                                    <div class="txtarea">
                                        <p class="dec">PICK UP <br class="is-sp">PROJECT 03</p>
                                        <div class="skew-box">
                                            <h4 class="skew">イノベーション事業</h4>
                                        </div>
                                        <p class="btn-style arr-next">view more</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="project_item">
                            <a href="/pickup/wellness.php">
                                <div class="project_bg">
                                    <div class="project_pic"><img src="/assets/img/top/index_wellness.png" alt="東京ワールドゲート">
                                    </div>
                                    <div class="txtarea">
                                        <p class="dec">PICK UP <br class="is-sp">PROJECT 04</p>
                                        <div class="skew-box">
                                            <h4 class="skew">ウェルネス事業</h4>
                                        </div>
                                        <p class="btn-style arr-next">view more</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="project_item">
                            <a href="/pickup/restaurant.php">
                                <div class="project_bg">
                                    <div class="project_pic"><img src="/assets/img/top/index_restaurant.png"
                                            alt="東京ワールドゲート"></div>
                                    <div class="txtarea">
                                        <p class="dec">PICK UP <br class="is-sp">PROJECT 05</p>
                                        <div class="skew-box">
                                            <h4 class="skew">レストラン事業</h4>
                                        </div>
                                        <p class="btn-style arr-next">view more</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="project_item">
                            <a href="/pickup/worcation.php">
                                <div class="project_bg">
                                    <div class="project_pic"><img src="/assets/img/top/index_workation.png"
                                            alt="ワーケーション事業"></div>
                                    <div class="txtarea">
                                        <p class="dec">PICK UP <br class="is-sp">PROJECT 06</p>
                                        <div class="skew-box">
                                            <h4 class="skew">ワーケーション事業</h4>
                                        </div>
                                        <p class="btn-style arr-next">view more</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- <li class="project_item">
                            <a href="/pickup/worcation.php">
                                <div class="prxoject_bg">
                                    <div class="project_pic"><img src="/assets/img/top/index_workation.png" alt="東京ワールドゲート">
                                    </div>
                                    <div class="txtarea">
                                        <p class="dec">PICK UP <br class="is-sp">PROJECT 06</p>
                                        <div class="skew-box">
                                            <h4 class="skew">ワーケーション事業</h4>
                                        </div>
                                        <p class="btn-style arr-next">view more</p>
                                    </div>
                                </div>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </section>


            <section class="interview">
                <div class="ttl_area">
                    <h3 class="ttl_ja">社員が語る森トラスト</h3>
                    <h2 class="ttl_en"><span class="stroke">INTERVIEW</span>INTERVIEW<span
                            class="stroke">INTERVIEW</span>INTERVIEW<span class="stroke">INTERVIEW</span>INTERVIEW<span
                            class="stroke">INTERVIEW</span>INTERVIEW</h2>
                </div>

                <div class="swiper-container" id="slider-1">
                    <div class="swiper-wrapper interview-list">
                        <div class="swiper-slide">
                            <div class="clm-box h-link box-01">
                                <div class="default-img interview-item">
                                    <figure class="interview-pic"><img src="/assets/img/interview/people01.png">
                                        <p class="name-en">TAKAHIRO SEKI</p>
                                    </figure>
                                </div>
                                <div class="name-box">
                                    <p class="name">関 隆宏</p>
                                    <p class="job">用地取得</p>
                                    <p class="job-info">投資事業部</p>
                                </div>
                                <a class="clm-alink" href="/interview/1.php"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clm-box h-link box-02">
                                <div class="default-img interview-item">
                                    <figure class="interview-pic"><img src="/assets/img/interview/people02.png">
                                        <p class="name-en">YOSHIYUKI KUDO</p>
                                    </figure>
                                </div>
                                <div class="name-box">
                                    <p class="name">工藤 慶行</p>
                                    <p class="job">不動産開発</p>
                                    <p class="job-info">不動産開発本部アセットマネジメント部</p>
                                </div>
                                <a class="clm-alink" href="/interview/2.php"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clm-box h-link box-03">
                                <div class="default-img interview-item">
                                    <figure class="interview-pic"><img src="/assets/img/interview/people03.png">
                                        <p class="name-en">HANA KADOWAKI</p>
                                    </figure>
                                </div>
                                <div class="name-box">
                                    <p class="name">門脇 花奈</p>
                                    <p class="job">ホテル企画開発</p>
                                    <p class="job-info">不動産開発本部アセットマネジメント部</p>
                                </div>
                                <a class="clm-alink" href="/interview/3.php"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clm-box h-link box-04">
                                <div class="default-img interview-item">
                                    <figure class="interview-pic"><img src="/assets/img/interview/people04.png">
                                        <p class="name-en">HIROKI ISHIDA</p>
                                    </figure>
                                </div>
                                <div class="name-box">
                                    <p class="name">石田 洋輝</p>
                                    <p class="job">設計・施工監理</p>
                                    <p class="job-info">不動産開発本部コンストラクション<br>マネジメント部建築第２グループ</p>
                                </div>
                                <a class="clm-alink" href="/interview/4.php"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clm-box h-link box-05">
                                <div class="default-img interview-item">
                                    <figure class="interview-pic"><img src="/assets/img/interview/people05.png">
                                        <p class="name-en">YU TAKAGI</p>
                                    </figure>
                                </div>
                                <div class="name-box">
                                    <p class="name">髙木 優</p>
                                    <p class="job">営業</p>
                                    <p class="job-info">営業本部営業第２グループ</p>
                                </div>
                                <a class="clm-alink" href="/interview/5.php"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clm-box h-link box-06">
                                <div class="default-img interview-item">
                                    <figure class="interview-pic"><img src="/assets/img/interview/people06.png">
                                        <p class="name-en">MOE MATSUDA</p>
                                    </figure>
                                </div>
                                <div class="name-box">
                                    <p class="name">松田 萌</p>
                                    <p class="job">管理</p>
                                    <p class="job-info">ビル・リゾートマネジメント部<br>企画開発課業務グループ</p>
                                </div>
                                <a class="clm-alink" href="/interview/6.php"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clm-box h-link box-07">
                                <div class="default-img interview-item">
                                    <figure class="interview-pic"><img src="/assets/img/interview/people07.png">
                                        <p class="name-en">TAKUYA KUDO</p>
                                    </figure>
                                </div>
                                <div class="name-box">
                                    <p class="name">工藤 卓也</p>
                                    <p class="job">イノベーション投資</p>
                                    <p class="job-info">投資事業部</p>
                                </div>
                                <a class="clm-alink" href="/interview/7.php"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clm-box h-link box-08">
                                <div class="default-img interview-item">
                                    <figure class="interview-pic"><img src="/assets/img/interview/people08.png">
                                        <p class="name-en">WATARU OHASHI</p>
                                    </figure>
                                </div>
                                <div class="name-box">
                                    <p class="name">大橋 航</p>
                                    <p class="job">海外投資</p>
                                    <p class="job-info">投資事業部</p>
                                </div>
                                <a class="clm-alink" href="/interview/8.php"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="clm-box h-link box-09">
                                <div class="default-img interview-item">
                                    <figure class="interview-pic"><img src="/assets/img/interview/people09.png">
                                        <p class="name-en">REINA SATO</p>
                                    </figure>
                                </div>
                                <div class="name-box">
                                    <p class="name">佐藤 怜奈</p>
                                    <p class="job">広報</p>
                                    <p class="job-info">広報部</p>
                                </div>
                                <a class="clm-alink" href="/interview/9.php"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"><span></span></div>
                    <div class="swiper-button-next"><span></span></div>
                </div>
            </section>


            <section class="cross_talk">
                <div class="ttl_area">
                    <h3 class="ttl_ja">社員が語る森トラスト</h3>
                    <h2 class="ttl_en"><span class="stroke">CROSS TALK</span>CROSS TALK<span class="stroke">CROSS
                            TALK</span>CROSS TALK<span class="stroke">CROSS TALK</span>CROSS TALK<span
                            class="stroke">CROSS TALK</span>CROSS TALK</h2>
                </div>
                <div class="talk_group_bg">
                    <a href="/crosstalk/1.php" class="pic_wrap">
                        <div class="talk_group _01">
                            <div class="talk_pic_box">
                                <div class="talk_pic"><img src="/assets/img/top/talk_women01.png" alt="女性社員座談会"></div>
                                <div class="talk_pic"><img src="/assets/img/top/talk_women02.png" alt="女性社員座談会"></div>
                                <div class="talk_pic"><img src="/assets/img/top/talk_women03.png" alt="女性社員座談会"></div>
                            </div>
                            <div class="btn_area">
                                <div class="skew-box">
                                    <h4 class="skew-w">女性社員座談会</h4>
                                </div>
                                <p class="arr-next">view more</p>
                            </div>
                        </div>
                    </a>
                    <a href="/crosstalk/2.php">
                        <div class="talk_group _02">
                            <div class="talk_pic_box">
                                <div class="talk_pic"><img src="/assets/img/top/talk_ojt01.png" alt="OJT×新入社員対談"></div>
                                <div class="talk_pic"><img src="/assets/img/top/talk_ojt02.png" alt="OJT×新入社員対談"></div>
                                <div class="talk_pic"><img src="/assets/img/top/talk_ojt03.png" alt="OJT×新入社員対談"></div>
                                <div class="talk_pic"><img src="/assets/img/top/talk_ojt04.png" alt="OJT×新入社員対談"></div>
                            </div>
                            <div class=btn_area>
                                <div class="skew-box">
                                    <h4 class="skew-w">OJT×新入社員対談</h4>
                                </div>
                                <p class="arr-next">view more</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="talk_box_bg"></div>
                <div class="talk_box">
                    <div class="talk_item">
                        <a href="/ceo/">
                            <div class="box_cnt">
                                <p class="ttl_ja">社長が語る森トラスト</p>
                                <div class="skew-box">
                                    <h4 class="skew en"><span>CEO TALKS</span></h4>
                                </div>
                                <div class="talk_img"><img src="/assets/img/top/talk_ceo.png" alt="社長が語る森トラスト"></div>
                                <p class="arr-next">view more</p>
                            </div>
                        </a>
                    </div>
                    <div class="talk_item">
                        <a href="/hr/">
                            <div class="box_cnt">
                                <p class="ttl_ja">人財育成</p>
                                <div class="skew-box">
                                    <h4 class="skew en">HUMAN RESOURCES</h4>
                                </div>
                                <div class="talk_img"><img src="/assets/img/top/talk_learn.png" alt="社長が語る森トラスト"></div>
                                <p class="arr-next">view more</p>
                            </div>
                        </a>
                    </div>
                    <div class="talk_item">
                        <a href="/freshman/">
                            <div class="box_cnt">
                                <p class="ttl_ja">2021年入社 新入社員アンケート</p>
                                <div class="skew-box">
                                    <h4 class="skew en">FRESHMAN</h4>
                                </div>
                                <div class="talk_img"><img src="/assets/img/top/talk_new.png" alt="社長が語る森トラスト"></div>
                                <p class="arr-next">view more</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>


            <section class="numbers">
                <div class="ttl_area">
                    <h3 class="ttl_ja">数字で見る森トラスト</h3>
                    <h2 class="ttl_en"><span class="stroke">FIGURES</span>FIGURES<span
                            class="stroke">FIGURES</span>FIGURES<span class="stroke">FIGURES</span>FIGURES<span
                            class="stroke">FIGURES</span>FIGURES</h2>
                </div>
                <a href="/figures/">
                    <div class="num_cnt"><img src="/assets/img/top/numbers.png" class="is-pc"
                            alt="従業員数396人　女性従業員比率女性27%（291人）・男性73%（105人）　平均年齢39.4歳　過去3年採用数16人（2019年）18人（2020年）15人（2021年）　2021年卒内訳男性7人（47%）・女性8人（53%）、文系6人（40%）・理系9人（60%）、院卒9人（60%）・学部卒6人（40%）">
                        <img src="/assets/img/top/number_sp.svg" class="is-sp"
                            alt="従業員数396人　女性従業員比率女性27%（291人）・男性73%（105人）　平均年齢39.4歳　過去3年採用数16人（2019年）18人（2020年）15人（2021年）　2021年卒内訳男性7人（47%）・女性8人（53%）、文系6人（40%）・理系9人（60%）、院卒9人（60%）・学部卒6人（40%）">
                        <p class="arr-next">view more</p>
                        <div class="bg_wrap">
                            <div class="num_bg"></div>
                        </div>
                    </div>
                </a>
            </section>


            <section class="link_area">
                <ul class="clm-3 sc-inr">
                    <li>
                        <div class="clm-box h-link btn-3">
                            <div class="skew-box">
                                <h4 class="skew en">OUR BUSINESS</h4>
                            </div>
                            <h3 class="btn-txt">事業紹介</h3>
                            <p class="btn-style arr-next">view more</p>
                            <a class="clm-alink" href="/ourbusiness/"></a>
                        </div>
                    </li>
                    <li>
                        <div class="clm-box h-link  btn-3">
                            <div class="skew-box">
                                <h4 class="skew en">RECRUIT</h4>
                            </div>
                            <h3 class="btn-txt">採用情報</h3>
                            <p class="btn-style arr-next">view more</p>
                            <a class="clm-alink" href="/recruit/"></a>
                        </div>
                    </li>
                    <li>
                        <div class="clm-box h-link  btn-3">
                            <div class="skew-box">
                                <h4 class="skew en">CORPORATE</h4>
                            </div>
                            <h3 class="btn-txt">会社案内</h3>
                            <p class="btn-style arr-next">view more</p>
                            <a class="clm-alink" href="/corporate/"></a>
                        </div>
                    </li>
                </ul>
            </section>
        </main>

        <?php include(dirname(__FILE__) . '/assets/inc/footer.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/assets/js/script.min.js"></script>
    <script src="/assets/js/uniq.js"></script>
    <!-- スライダー -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/js/swiper.js"></script>
    <!-- <script src="/assets/js/init.js"></script> -->
    <!-- kv -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/ScrollTrigger.min.js"></script>
    <script src="/assets/js/gsap.min.js"></script>
</body>

</html>