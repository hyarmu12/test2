<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

//$pdo->exec("insert into contactform(name,mail,age,comments) values('名前','メール','25','コメント');");
$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");


?>

<!doctype HTML>

<html lang="ja">
    
<head>
<meta charset="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
    
<body>
    <h1>お問い合わせフォーム</h1>
    <div class="confirm">
        <p>お問い合わせありがとうございました。<br>３営業日以内に担当者よりご連絡差し上げます。</p>
    </div>
</body>
    
</html>