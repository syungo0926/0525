
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>card</title>
  </head>
  <body>
    <header class="site-header">
      <div class="wrapper site-header__wrapper">
        <a href="index.html" class="brand">カード</a>
        <nav class="nav">
          <button class="nav__toggle" aria-expanded="false" type="button"></button>
          </button>
            <li class="nav__item"><a href="https://www.amazon.co.jp/s?k=カード&__mk_ja_JP=カタカナ&ref=nb_sb_noss">Amazon</a></li>
            <li class="nav__item"><a href="https://www.mercari.com/jp/search/?keyword=カード">メルカリ</a></li>
            <li class="nav__item"><a href="https://search.rakuten.co.jp/search/mall/カード/">楽天</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <h1>カード一覧</h1>
         <div class="row row-cols-1 row-cols-md-4 g-2">
         <div class="col">
         <div class="card h-70">
         <a href="detail1.html" target="_blank">
        <?php for( $i = 0; $i < 2; $i++) { ?>
          <img src="img/card_121_j.png" class="card-img-top" target="_blank" />
        <?php } ?>
          <div class="card-body">
            <h5 class="card-title">イオンカード</h5>
            <p class="card-text">イオン銀行のカード</p>
          </div>
        </div>     
      </div>
      <div class="col">
        <div class="card h-70">
          <a href="detail2.html" target="_blank">
          <?php for( $i = 0; $i < 2; $i++) { ?>
            <img src="img/Sugoca-Card.jpg" class="card-img-top" target="_blank" />
            <?php } ?>
          <div class="card-body">
            <h5 class="card-title">Sugocaカード</h5>
            <p class="card-text">交通系icカード</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <a href="detail3.html" target="_blank">
          <?php for( $i = 0; $i < 2; $i++) { ?>
            <img src="img/6.jpg" class="card-img-top" target="_blank" />
            <?php } ?>
          <div class="card-body">
            <h5 class="card-title">Suicaカード</h5>
            <p class="card-text">JR東日本の交通系icカード</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <a href="detail4.html" target="_blank">
          <?php for( $i = 0; $i < 2; $i++) { ?>
            <img src="img/master_gold_NEW_350.jpg.png" class="card-img-top" target="_blank" />
            <?php } ?>
          <div class="card-body">
            <h5 class="card-title">dカード</h5>
            <p class="card-text">docomoのクレジットカード</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <a href="detail5.html" target="_blank">
          <?php for( $i = 0; $i < 2; $i++) { ?>
            <img src="img/1280px-ヨドバシゴールドポイントカード.png" class="card-img-top" target="_blank" />
            <?php } ?>
          <div class="card-body">
            <h5 class="card-title">ヨドバシカード</h5>
            <p class="card-text">ヨドバシのゴールドポイントカード</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <a href="detail6.html" target="_blank">
          <?php for( $i = 0; $i < 2; $i++) { ?>
            <img src="img/p_visa_front_rp_e_bisness_touch.png" class="card-img-top" target="_blank" />
            <?php } ?>
          <div class="card-body">
            <h5 class="card-title">楽天カード</h5>
            <p class="card-text">楽天のビジネスカード</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <a href="detail7.html" target="_blank">
          <?php for( $i = 0; $i < 2; $i++) { ?>
            <img src="img/32.jpg" class="card-img-top" target="_blank" />
            <?php } ?>
          <div class="card-body">
            <h5 class="card-title">Tポイントカード</h5>
            <p class="card-text">Tポイントカード</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <a href="detail8.html" target="_blank">
          <?php for( $i = 0; $i < 2; $i++) { ?>
            <img src="img/01-165.jpg" class="card-img-top" target="_blank" />
            <?php } ?>
          <div class="card-body">
            <h5 class="card-title">Rポイントカード</h5>
            <p class="card-text">楽天ポイント</p>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-light text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-dark" href="https://getbootstrap.jp">Bootstrap</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>