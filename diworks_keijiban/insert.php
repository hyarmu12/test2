


<?php
//var_dump($_POST);
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "root");

// フォームの値を変数に代入
$handlename = $_POST['handlename'];
$title = $_POST['title'];
$comments = $_POST['comments'];

// 空欄チェック
if (empty($handlename) || empty($title) || empty($comments)) {
    echo "入力されていない項目があります。データベースへの追加は行いません。";
} else {
    // データベースへの追加処理を安全に行う

    // プレースホルダを使用してSQLインジェクションを防止する
    $stmt = $pdo->prepare("INSERT INTO diworks_keijiban(handlename, title, comments) VALUES(?, ?, ?)");
    $stmt->execute([$handlename, $title, $comments]);

    echo "データベースへの追加が完了しました。";
}

// リダイレクト
header("Location: http://localhost/diworks_keijiban/index.php");
exit();
?>
