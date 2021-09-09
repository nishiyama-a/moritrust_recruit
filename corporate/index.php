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
          <source media="(max-width:767px)" srcset="/assets/img/corporate/kv_index.png">
            <img src="/assets/img/corporate/kv_index.png">
        </picture>
        <div class="kv-ttl">
            <p class="kv-head-en">CORPORATE</p>
          <div class="kv-box skew-box">
            <h1 class="kv-head skew">会社案内</h1>
          </div>
          </div>
      </div>

      <main class="l-contents" role="main">
        <section class="l-section corporate-top">
          <div class="sc-inr-s">

              <ul class="clm-2">
                <li>
                  <div class="clm-box h-link  btn-3">
                      <h3 class="btn-txt">会社概要</h3>
                      <p class="btn-style arr-next">view more</p>
                    <a class="clm-alink" href="/corporate/about.php"></a>
                  </div>
                </li>
                <li>
                  <div class="clm-box h-link  btn-3">
                      <h3 class="btn-txt">パンフレット</h3>
                      <p class="btn-style arr-next">view more</p>
                    <a class="clm-alink" href="https://www.yahoo.co.jp/"></a>
                  </div>
                </li>

              </ul>
          </div>
        </section>
      </main>

      <?php include(dirname(__FILE__) . '/../assets/inc/footer.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/assets/js/script.min.js"></script>
  </body>
</html>