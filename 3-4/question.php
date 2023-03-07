<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>puestion</title>
  <link rel="stylesheet" href="css/style1.css">
</head>
<body>


<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
?>
<form action="answer.php" method="post">
<?php
//①画像を参考に問題文の選択肢の配列を作成してください。

$port = ["80","22","20","21"];
$language = ["PHP","Python","JAVA","HTML"];
$com =["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = $port[0];
$answer2 = $language[3];
$answer3 = $com[1];
?>

<form action="answer.php" method="post">
<input type= "hidden" name = "my_name" value = "<?php echo $my_name  ?>">
<!-- ここのechoは呼び出すだけのecho 画面に名前出ないようになってる-->


<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name;?>さん</p>

<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
   <!-- foreachは回答の配列を関数1文で選択しを4つ作るために使う -->

<?php
   foreach ($port as $value){?>
    <input type = "radio" name="port" value="<?php echo $value ?>">
    <?php echo $value;
}
?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
   foreach ($language as $value){?>
    <input type = "radio" name="language" value="<?php echo $value?>">
    <?php echo $value;
}
?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
   foreach ($com as $value){?>
    <input type = "radio" name="com" value="<?php echo $value?>">
    <?php echo $value;
}
?>
<br>
<input type="submit" value="回答する"/>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type= "hidden" name = "port_ans" value = "<?php echo $answer1  ?>">
<input type= "hidden" name = "language_ans" value = "<?php echo $answer2  ?>">
<input type= "hidden" name = "com_ans" value = "<?php echo $answer3  ?>">

</form>

</body>



