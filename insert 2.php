<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson1; host = localhost;","root","root");

if (empty($_POST['name']) || empty($_POST['mail']) || empty($_POST['age']) || empty($_POST['comments'])) {
    echo '<script type="text/javascript">alert("全て入力してください");</script>';
} 

$pdo->exec("insert into contactform (name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');

")

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<h1>お問い合わせフォーム</h1>

<div class="confirm">
    <p>お問い合わせありがとうございました<br>3営業日以内にご連絡差し上げます。
    </p>
</div>
    
</body>
</html>