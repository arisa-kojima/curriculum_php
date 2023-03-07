<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>puestion</title>
  <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

$my_name = $_POST['my_name'];

$answer1 = $_POST['port_ans'];
$answer2 = $_POST['language_ans'];
$answer3 = $_POST['com_ans'];

$sele_port = $_POST['port'];
$sele_language = $_POST['language'];
$sele_com = $_POST['com'];


//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
?>
<?php
function answer($a, $b ){
    if($a == $b){
        echo "正解！";
    }else{
        echo "残念・・・";
    }
}

?>
<p><!--POST通信で送られてきた名前を表示-->

<?php echo $my_name;?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php

 answer($sele_port,$answer1);
?>


<!-- // if($answer1 == $sele_port){
//     echo "正解！";
// }else{
//     echo "不正解";
// } -->


<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
 <?php

answer($sele_language,$answer2);

// if($answer2 == $sele_language){
//     echo "正解！";
// }else{
//     echo "不正解";
// }

?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php

answer($sele_com,$answer3);

// if($answer3 == $sele_com){
//     echo "正解！";
// }else{
//     echo "不正解";
// } 
?>

</body>