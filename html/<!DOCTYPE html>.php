<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>test</title>
    </head>
    <body>
        <?php
            for( $i = 0; $i < 5; $i++){
                //echoでimgタグを出力することで表示
                echo '<img src="nuko.jpg" style="width: 100px;height: auto;">'; 
                ?>
                <!--一旦PHPタグを閉じて、htmlとしてimgタグを記述  -->
                <img src="dog.jpg" style="width: 100px;height: auto;"> //
                <?php
            }
        ?>
    </body>
</html>