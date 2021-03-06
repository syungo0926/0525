
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Database List</a>
      </div>
    </nav>
    <div class="container">
      <h3>city</h3>
      <table class="table table-primary">
        <thead>
          <th>ID</th>
          <th>Name</th>
          <th>CountryCode</th>
          <th>District</th>
          <th>Population</th>
        </thead>
        <tbody>
            <tr>
              <td>1365</td>
              <td>Baghdad</td>
              <td>IRQ</td>
              <td>Baghdad</td>
              <td>4336000</td>
            </tr>
                      <tr>
              <td>3449</td>
              <td>Kirovograd</td>
              <td>UKR</td>
              <td>Kirovograd</td>
              <td>265000</td>
            </tr>
                      <tr>
              <td>228</td>
              <td>Osasco</td>
              <td>BRA</td>
              <td>São Paulo</td>
              <td>659604</td>
            </tr>
                      <tr>
              <td>2669</td>
              <td>Zumpango</td>
              <td>MEX</td>
              <td>México</td>
              <td>99781</td>
            </tr>
                      <tr>
              <td>2390</td>
              <td>Kwang-yang</td>
              <td>KOR</td>
              <td>Chollanam</td>
              <td>122052</td>
            </tr>
                      <tr>
              <td>1465</td>
              <td>Milano</td>
              <td>ITA</td>
              <td>Lombardia</td>
              <td>1300977</td>
            </tr>
                      <tr>
              <td>641</td>
              <td>Jirja</td>
              <td>EGY</td>
              <td>Sawhaj</td>
              <td>95400</td>
            </tr>
                      <tr>
              <td>2097</td>
              <td>Fuyang</td>
              <td>CHN</td>
              <td>Anhui</td>
              <td>179572</td>
            </tr>
                      <tr>
              <td>3144</td>
              <td>Bergisch Gladbach</td>
              <td>DEU</td>
              <td>Nordrhein-Westfalen</td>
              <td>106150</td>
            </tr>
                      <tr>
              <td>2111</td>
              <td>Chenzhou</td>
              <td>CHN</td>
              <td>Hunan</td>
              <td>169400</td>
            </tr>
                      <tr>
              <td>1016</td>
              <td>Pondok Aren</td>
              <td>IDN</td>
              <td>West Java</td>
              <td>92700</td>
            </tr>
                      <tr>
              <td>238</td>
              <td>Sorocaba</td>
              <td>BRA</td>
              <td>São Paulo</td>
              <td>466823</td>
            </tr>
                      <tr>
              <td>2818</td>
              <td>Salala</td>
              <td>OMN</td>
              <td>Zufar</td>
              <td>131813</td>
            </tr>
                      <tr>
              <td>1979</td>
              <td>Yichang</td>
              <td>CHN</td>
              <td>Hubei</td>
              <td>371601</td>
            </tr>
                      <tr>
              <td>396</td>
              <td>Jaú</td>
              <td>BRA</td>
              <td>São Paulo</td>
              <td>109965</td>
            </tr>
                      <tr>
              <td>2516</td>
              <td>Guadalajara</td>
              <td>MEX</td>
              <td>Jalisco</td>
              <td>1647720</td>
            </tr>
                      <tr>
              <td>376</td>
              <td>Macaé</td>
              <td>BRA</td>
              <td>Rio de Janeiro</td>
              <td>125597</td>
            </tr>
                      <tr>
              <td>3055</td>
              <td>Norrköping</td>
              <td>SWE</td>
              <td>East Götanmaan län</td>
              <td>122199</td>
            </tr>
                      <tr>
              <td>1250</td>
              <td>Bulandshahr</td>
              <td>IND</td>
              <td>Uttar Pradesh</td>
              <td>127201</td>
            </tr>
                      <tr>
              <td>384</td>
              <td>Cabo Frio</td>
              <td>BRA</td>
              <td>Rio de Janeiro</td>
              <td>119503</td>
            </tr>

        </tbody>
      </table>
    </div>
    <div class="container">
      <h3>country</h3>
      <table class="table table-secondary">
        <thead>
          <th>Code</th>
          <th>Name</th>
          <th>Continent</th>
          <th>Region</th>
          <th>SurfaceArea</th>
          <th>IndepYear</th>
          <th>Population</th>
          <th>LocalName</th>
          <th>HeadOfState</th>
          <th>Capital</th>
          <th>Code2</th>
        </thead>
        <tbody>
                      <tr>
              <td>ABW</td>
              <td>Aruba</td>
              <td>North America</td>
              <td>Caribbean</td>
              <td>193.00</td>
              <td></td>
              <td>103000</td>
              <td>Aruba</td>
              <td>Beatrix</td>
              <td>129</td>
              <td>AW</td>
            </tr>
                      <tr>
              <td>AFG</td>
              <td>Afghanistan</td>
              <td>Asia</td>
              <td>Southern and Central Asia</td>
              <td>652090.00</td>
              <td>1919</td>
              <td>22720000</td>
              <td>Afganistan/Afqanestan</td>
              <td>Mohammad Omar</td>
              <td>1</td>
              <td>AF</td>
            </tr>
                      <tr>
              <td>AGO</td>
              <td>Angola</td>
              <td>Africa</td>
              <td>Central Africa</td>
              <td>1246700.00</td>
              <td>1975</td>
              <td>12878000</td>
              <td>Angola</td>
              <td>José Eduardo dos Santos</td>
              <td>56</td>
              <td>AO</td>
            </tr>
                      <tr>
              <td>AIA</td>
              <td>Anguilla</td>
              <td>North America</td>
              <td>Caribbean</td>
              <td>96.00</td>
              <td></td>
              <td>8000</td>
              <td>Anguilla</td>
              <td>Elisabeth II</td>
              <td>62</td>
              <td>AI</td>
            </tr>
                      <tr>
              <td>ALB</td>
              <td>Albania</td>
              <td>Europe</td>
              <td>Southern Europe</td>
              <td>28748.00</td>
              <td>1912</td>
              <td>3401200</td>
              <td>Shqipëria</td>
              <td>Rexhep Mejdani</td>
              <td>34</td>
              <td>AL</td>
            </tr>
                      <tr>
              <td>AND</td>
              <td>Andorra</td>
              <td>Europe</td>
              <td>Southern Europe</td>
              <td>468.00</td>
              <td>1278</td>
              <td>78000</td>
              <td>Andorra</td>
              <td></td>
              <td>55</td>
              <td>AD</td>
            </tr>
                      <tr>
              <td>ANT</td>
              <td>Netherlands Antilles</td>
              <td>North America</td>
              <td>Caribbean</td>
              <td>800.00</td>
              <td></td>
              <td>217000</td>
              <td>Nederlandse Antillen</td>
              <td>Beatrix</td>
              <td>33</td>
              <td>AN</td>
            </tr>
                      <tr>
              <td>ARE</td>
              <td>United Arab Emirates</td>
              <td>Asia</td>
              <td>Middle East</td>
              <td>83600.00</td>
              <td>1971</td>
              <td>2441000</td>
              <td>Al-Imarat al-´Arabiya al-Muttahida</td>
              <td>Zayid bin Sultan al-Nahayan</td>
              <td>65</td>
              <td>AE</td>
            </tr>
                      <tr>
              <td>ARG</td>
              <td>Argentina</td>
              <td>South America</td>
              <td>South America</td>
              <td>2780400.00</td>
              <td>1816</td>
              <td>37032000</td>
              <td>Argentina</td>
              <td>Fernando de la Rúa</td>
              <td>69</td>
              <td>AR</td>
            </tr>
                      <tr>
              <td>ARM</td>
              <td>Armenia</td>
              <td>Asia</td>
              <td>Middle East</td>
              <td>29800.00</td>
              <td>1991</td>
              <td>3520000</td>
              <td>Hajastan</td>
              <td>Robert Kotšarjan</td>
              <td>126</td>
              <td>AM</td>
            </tr>
                      <tr>
              <td>ASM</td>
              <td>American Samoa</td>
              <td>Oceania</td>
              <td>Polynesia</td>
              <td>199.00</td>
              <td></td>
              <td>68000</td>
              <td>Amerika Samoa</td>
              <td>George W. Bush</td>
              <td>54</td>
              <td>AS</td>
            </tr>
                      <tr>
              <td>ATA</td>
              <td>Antarctica</td>
              <td>Antarctica</td>
              <td>Antarctica</td>
              <td>13120000.00</td>
              <td></td>
              <td>0</td>
              <td>–</td>
              <td></td>
              <td></td>
              <td>AQ</td>
            </tr>
                      <tr>
              <td>ATF</td>
              <td>French Southern territories</td>
              <td>Antarctica</td>
              <td>Antarctica</td>
              <td>7780.00</td>
              <td></td>
              <td>0</td>
              <td>Terres australes françaises</td>
              <td>Jacques Chirac</td>
              <td></td>
              <td>TF</td>
            </tr>
                      <tr>
              <td>ATG</td>
              <td>Antigua and Barbuda</td>
              <td>North America</td>
              <td>Caribbean</td>
              <td>442.00</td>
              <td>1981</td>
              <td>68000</td>
              <td>Antigua and Barbuda</td>
              <td>Elisabeth II</td>
              <td>63</td>
              <td>AG</td>
            </tr>
                      <tr>
              <td>AUS</td>
              <td>Australia</td>
              <td>Oceania</td>
              <td>Australia and New Zealand</td>
              <td>7741220.00</td>
              <td>1901</td>
              <td>18886000</td>
              <td>Australia</td>
              <td>Elisabeth II</td>
              <td>135</td>
              <td>AU</td>
            </tr>
                      <tr>
              <td>AUT</td>
              <td>Austria</td>
              <td>Europe</td>
              <td>Western Europe</td>
              <td>83859.00</td>
              <td>1918</td>
              <td>8091800</td>
              <td>Österreich</td>
              <td>Thomas Klestil</td>
              <td>1523</td>
              <td>AT</td>
            </tr>
                      <tr>
              <td>AZE</td>
              <td>Azerbaijan</td>
              <td>Asia</td>
              <td>Middle East</td>
              <td>86600.00</td>
              <td>1991</td>
              <td>7734000</td>
              <td>Azärbaycan</td>
              <td>Heydär Äliyev</td>
              <td>144</td>
              <td>AZ</td>
            </tr>
                      <tr>
              <td>BDI</td>
              <td>Burundi</td>
              <td>Africa</td>
              <td>Eastern Africa</td>
              <td>27834.00</td>
              <td>1962</td>
              <td>6695000</td>
              <td>Burundi/Uburundi</td>
              <td>Pierre Buyoya</td>
              <td>552</td>
              <td>BI</td>
            </tr>
                      <tr>
              <td>BEL</td>
              <td>Belgium</td>
              <td>Europe</td>
              <td>Western Europe</td>
              <td>30518.00</td>
              <td>1830</td>
              <td>10239000</td>
              <td>België/Belgique</td>
              <td>Albert II</td>
              <td>179</td>
              <td>BE</td>
            </tr>
                      <tr>
              <td>BEN</td>
              <td>Benin</td>
              <td>Africa</td>
              <td>Western Africa</td>
              <td>112622.00</td>
              <td>1960</td>
              <td>6097000</td>
              <td>Bénin</td>
              <td>Mathieu Kérékou</td>
              <td>187</td>
              <td>BJ</td>
            </tr>
                  </tbody>
      </table>
    </div>
    <div class="container">
      <h3>countrylanguage</h3>
      <table class="table table-info">
        <thead>
          <th>CountryCode</th>
          <th>Language</th>
          <th>IsOfficial</th>
          <th>Percentage</th>
        </thead>
        <tbody>
                      <tr>
              <td>ABW</td>
              <td>Dutch</td>
              <td>T</td>
              <td>5.3</td>
            </tr>
                      <tr>
              <td>ABW</td>
              <td>English</td>
              <td>F</td>
              <td>9.5</td>
            </tr>
                      <tr>
              <td>ABW</td>
              <td>Papiamento</td>
              <td>F</td>
              <td>76.7</td>
            </tr>
                      <tr>
              <td>ABW</td>
              <td>Spanish</td>
              <td>F</td>
              <td>7.4</td>
            </tr>
                      <tr>
              <td>AFG</td>
              <td>Balochi</td>
              <td>F</td>
              <td>0.9</td>
            </tr>
                      <tr>
              <td>AFG</td>
              <td>Dari</td>
              <td>T</td>
              <td>32.1</td>
            </tr>
                      <tr>
              <td>AFG</td>
              <td>Pashto</td>
              <td>T</td>
              <td>52.4</td>
            </tr>
                      <tr>
              <td>AFG</td>
              <td>Turkmenian</td>
              <td>F</td>
              <td>1.9</td>
            </tr>
                      <tr>
              <td>AFG</td>
              <td>Uzbek</td>
              <td>F</td>
              <td>8.8</td>
            </tr>
                      <tr>
              <td>AGO</td>
              <td>Ambo</td>
              <td>F</td>
              <td>2.4</td>
            </tr>
                      <tr>
              <td>AGO</td>
              <td>Chokwe</td>
              <td>F</td>
              <td>4.2</td>
            </tr>
                      <tr>
              <td>AGO</td>
              <td>Kongo</td>
              <td>F</td>
              <td>13.2</td>
            </tr>
                      <tr>
              <td>AGO</td>
              <td>Luchazi</td>
              <td>F</td>
              <td>2.4</td>
            </tr>
                      <tr>
              <td>AGO</td>
              <td>Luimbe-nganguela</td>
              <td>F</td>
              <td>5.4</td>
            </tr>
                      <tr>
              <td>AGO</td>
              <td>Luvale</td>
              <td>F</td>
              <td>3.6</td>
            </tr>
                      <tr>
              <td>AGO</td>
              <td>Mbundu</td>
              <td>F</td>
              <td>21.6</td>
            </tr>
                      <tr>
              <td>AGO</td>
              <td>Nyaneka-nkhumbi</td>
              <td>F</td>
              <td>5.4</td>
            </tr>
                      <tr>
              <td>AGO</td>
              <td>Ovimbundu</td>
              <td>F</td>
              <td>37.2</td>
            </tr>
                      <tr>
              <td>AIA</td>
              <td>English</td>
              <td>T</td>
              <td>0.0</td>
            </tr>
                      <tr>
              <td>ALB</td>
              <td>Albaniana</td>
              <td>T</td>
              <td>97.9</td>
            </tr>
                  </tbody>
      </table>
    </div>
​
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>