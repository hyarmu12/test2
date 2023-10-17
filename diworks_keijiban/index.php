<!DOCTYPE html>
<html lang="ja">
    
<head>
<meta charset="UTF-8">
<title>diworksblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <?php
    
    mb_internal_encoding("utf8");
    
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    
    $stmt = $pdo->query("select*from diworks_keijiban");
    
//    while($row = $stmt->fetch()) {
//        echo $row['handlename'];
//        echo $row['title'];
//        echo $row['comments'];
//    }
//    
    ?>
    
    
    <img src="diblog_logo.jpg">
    <header>
        <ul>
           <li>トップ</li>
           <li>プロフィール</li>
           <li>D.I.blogについて</li>
           <li>登録フォーム</li>
           <li>お問い合わせ</li>
           <li>その他</li>
        </ul>
    </header>
   
    <main>
        <div class="main-container">
            <div class="right">
                <h2>プログラミングに役立つ掲示板</h2>

                <form method="post" action="insert.php">
                    <h4>入力フォーム</h4>
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
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>
        
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>
                
                <br>
                
                <?php
                
                while($row = $stmt->fetch()) {
                    
                echo'<form method="post" action="insert.php">';
                    echo"<h3>".$row['title']."</h3>";
                    echo"<p>".$row['comments']."<br><br>posted by ".$row['handlename']." </p>";
                echo"</form>";
                    
                    
//                echo "<h3>".$row['title']."</h3>";
//                echo "<p>".$row['comments']."<br><br>posted by ".$row['handlename']." </p>";

                    
                }
                
                
                    
                ?>
                
                <br>
                
                <form method="post" action="insert.php">
                    <h3>タイトル</h3>
                    <p>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
                    <br>
                    <br>
                    posted by 誰か
                    </p>
                </form>
                
            </div>
            
           
           <div class="left">
           <h1>人気の記事</h1>
           <p>PHPオススメ本</p>
           <p>PHP MyAdminの使い方</p>
           <p>今人気のエディタTops</p>
           <p>HTMLの基礎</p>
           
           <h1>オススメリンク</h1>
           <p>ディーアイワークス株式会社</p>
           <p>XAMPPのダウンロード</p>
           <p>Eclipseのダウンロード</p>
           <p>Bracketsのダウンロード</p>
           
           <h1>カテゴリ</h1>
           <p>HTML</p>
           <p>PHP</p>
           <p>MySQL</p>
           <p>Javascript</p>
               
           </div>
       </div>
   </main>
 </body>
 
 <footer style="margin-top: auto">
       Copyright D.I.works D.I.blog is the one which provides A to Z about programming
   </footer>