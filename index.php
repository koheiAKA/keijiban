<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","");
        $stmt=$pdo->query("select*from 4each_keijiban");
        ?>
        <div class="logo"><img src="4eachblog_logo.jpg"></div>

        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        <main>
            <div class="main-container">
                <div class="left">
                    <h2>プログラミングに役立つ掲示板</h2>

                    

                    <div class="form">
                        
                        <form method="post" action="insert.php">
                            <h1>入力フォーム</h1>
                            <div>
                                <label>ハンドルネーム</label>
                                <br>
                                <input type="text" class="text" size="35" name="handlename">
                            </div>
                            <div>
                                <label>タイトル</label>
                                <br>
                                <input type="text" class="text" size="35" name="title">
                            </div>                        
                            <div>
                                <label>コメント</label>
                                <br>
                                <textarea cols="75" rows="7" name="comments"></textarea>
                            </div>
                            <div>
                                <input type="submit" class="submit" value="送信する">
                            </div>
                        </form>
                    </div>
                    <?php
                    while($row=$stmt->fetch()){
                        echo "<div class='kiji'>";
                            echo "<h4>".$row['title']."</h4>";
                            echo "<div class='contents'>";
                                echo $row['comments'];
                                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                    ?>


                    <div class="kiji">                        
                        <div class='contents'>
                            <h4>タイトル</h4>
                            記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
                            記事の中身。記事の中身。記事の中身。記事の中身。<br>
                            記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                            記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                            <div class="handlename">posted by 通りすがり</div> 
                        </div>
                        
                        <div class='contents'>
                            <h4>タイトル</h4>
                            記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
                            記事の中身。記事の中身。記事の中身。記事の中身。<br>
                            記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                            記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                            <div class="handlename">posted by 通りすがり</div> 
                        </div>                       
                    </div>
                </div>
                <div class="right">

                    <h3>人気の記事</h3>

                    <ul>
                        <li>PHP オススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>

                    <h3>オススメリンク</h3>

                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>

                    <h3>カテゴリ</h3>

                    <ul>
                       <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </main>

        <footer>copyright © internous|4each blog is the one which provides A to Z about programming.</footer>        

    </body>
</html>
