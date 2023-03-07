<?php

//②フォームからのデータを受け取ります
$my_name = $_GET['my_name'];
$number = $_GET['number'];

//③受け取った数字に1~6までのランダムな数字を掛け合わせて
//変数に入れてください
$no = rand(1,6); //1~6の数字をランダムで発生

function unnsei($a,$b){
    $unsei = $a * $b;
    return $unsei;
}
//④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
$omikuji = ['凶','小吉','中吉','吉','大吉','残念'];

if (1 <= unnsei($number, $no) && unnsei($number, $no) <= 10){
    echo $omikuji[0];  
} elseif (11 <= unnsei($number, $no) && unnsei($number, $no) <= 15){
    echo $omikuji[1];
} elseif (16 <= unnsei($number, $no) && unnsei($number, $no) <= 20){
    echo $omikuji[2];
} elseif (21 <= unnsei($number, $no) && unnsei($number, $no) <= 25){
    echo $omikuji[3];
} elseif (26 <= unnsei($number, $no) && unnsei($number, $no) <= 30){
    echo $omikuji[4];
} elseif (37 <= unnsei($number, $no)){
    echo $omikuji[5];
}

echo '<br>';
?>

<!-- ⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう -->
<?php echo date("Y-m-d- H:i:s", time());?>
<p>名前は <?php echo $my_name; ?> です。</p>
<p>番号は <?php echo $number; ?> です。</p>
<p>結果は <?php echo unnsei($number, $no); ?> です。</p>






 

