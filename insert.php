<?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson_1;host=localhost;","root","");
$sql="insert into contactfrom (name,mail,age,comments)value (?,?,?,?)";
$stmt=$pdo->prepare($sql);
$stmt->bindvalue(1,$_POST['name']);
$stmt->bindvalue(2,$_POST['mail']);
$stmt->bindvalue(3,$_POST['age']);
$stmt->bindvalue(4,$_POST['comments']);
$stmt->execute();
?>
<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
        <p>
            お問い合わせありがとうございました。<br>3営業以内に担当者よりご連絡差し上げます。
</p>
</div>

</body>
</html>
