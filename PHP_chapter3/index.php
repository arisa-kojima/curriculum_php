<?php
//index.php
$message = "Hello World!";
var_dump($message);

echo '<br>';
$en_words = 'Hello World';
var_dump($en_words);
echo '<br>';
$ja_words ='こんにちは';
var_dump($ja_words);

$x = "8";
$y = "5.55";

echo '<br>';
var_dump($x);
echo '<br>';
var_dump ($y);

$flag = true;

echo '<br>';
var_dump($flag);

//右辺に何も記述しない
$emp = null;
echo '<br>';
var_dump($emp);

//変数展開 
$name ="山田";

echo '<br>';
echo "こんにちは。$name さん";

$color ='blue';

echo '<br>';
echo "Sky is ${color}color";

//index.php
// 変数：データにつけるラベル（変更可能）
// 定数：変更不可

define("ADMIN_EMAIL","y-i-group@gmail.com");
define("LIST_COUNT",15);

echo '<br>';
echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;

//連結演算子
$hello = "Hello";
$world = "World!!";

echo '<br>';
echo $hello.$world;

//四則演算子
echo 1+1;
echo '<br>';
echo 4-3;
echo '<br>';
echo 1*1;
echo '<br>';
echo 4/4;
echo '<br>';
echo 37%6;
echo '<br>';
echo 42*(32/8);//(32/8)を優先

//単項演算子
$x = 0;

 // $x = $x + 5;
$x += 5;

echo '<br>';
echo $x;//5

 // $x = $x * 5;
$x *= 5;

echo '<br>';
echo $x;//25

//$u = $u / 2
$u = 6;
$u  /=2;
echo '<br>';
echo $u; //3

//上の計算を引き継いで、$u = + 4(3+4)
$u += 4;

echo '<br>';
echo $u;//7


//条件分岐

$age = 22;

echo '<br>';
if ($age >= 20){
    echo "お酒が飲めるぞ！";
} else{
    echo"お酒は二十歳になってから！";
}


$age = 18;

echo '<br>';
if ($age >= 20){
    echo "お酒が飲めるぞ！";
} else{
    echo"お酒は二十歳になってから！";
}



//学生かどうか
$is_student = true;

echo '<br>';
if($is_student){
    echo 'あなたは学生です。';
}


//複数条件の分岐(年齢が25歳未満で学生であれば、学割パックが使えます)

 //年齢
$age = 24;

 //学生かどうか
$is_student =true;

echo '<br>';
if ($age < 25 && $is_student){
    echo '学割パックが使えるよ';
} elseif ($age < 25){
    echo '若者応援割引が使えるよ';
}


//血液型を診断する条件分岐

$blood = 'B';

echo '<br>';
if ($blood == 'A'){
    echo "A型です";
} elseif ($blood == 'B'){
    echo "B型です";
} elseif ($blood == 'O'){
    echo "O型です";
} elseif ($blood == 'AB'){
    echo "AB型です";
} else{
    echo "A/B/O/ABから選択してください";
}


//Switch文
echo '<br>';

$blood = 'B';
switch ($blood){
    case 'A':
        print 'A型です';
        break;
    
    case 'B':
        print 'B型です';
        break;

    case 'O':
        print 'O型です';
        break;

    case 'AB':
        print 'AB型です';
        break;

    default:
     echo 'A/B/O/ABから選択してください';
        
}


//三項演算子の例↓ifの場合
echo '<br>';

$name = "";

if ($name != ""){
    echo '名前を受け付けました';
} else {
    echo '名前を入力してください';
}


echo '<br>';
//三項演算子
$name = "";

echo ($name != "") ? '名前を受け付けました' : '名前を入力してください';


//===での比較は 型まで比較
echo '<br>';

$string = '1';
$int = 1;

    // 「変数stringはstring型です」が出力される
if (1 === $string) {
    echo '変数stringはint型です。';
} else {
    echo '変数stringはstring型です。';
}

echo '<br>';

  // 「変数stringはint型です。」が出力される
if (1 === $int) {
    echo '変数stringはint型です。';
} else {
    echo '変数stringはstring型です。';
}



//ループ文
$num = 0;

echo '<br>';
while($num < 10){
    echo $num;
    $num++;
}

echo '<br>';
//do...while
$num = 0;

do{
    echo $num;
    $num++;
}while($num < 10);



echo '<br>';
//for
//for($i = 0;$i < 10)
   // echo $i;


   echo '<br>';
//array配列
   $countries = ["America", "Japan", "China", "Korea"];
   
   echo $countries[0];
   echo $countries[1];
   echo $countries[2];
   echo $countries[3];

   echo '<br>';
//
var_dump($countries);


echo '<br>';
///連想配列

$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];

// りんごを出力
echo $fruits["apple"];
// みかんを出力
echo $fruits["orange"];
// ぶどうを出力
echo $fruits["grape"];

echo '<br>';

var_dump($fruits);

echo '<br>';


$fruits = ["りんご", "みかん", "ぶどう"];
// 0、1、2番目はもうつかわれているので、次は3番目
$fruits[3] = "もも";
echo '<br>';
// プログラムが勝手に判断して順番をつけてくれる
$fruits[] = "もも";
echo '<br>';
var_dump($fruits);

///追加 連想配列の場合
echo '<br>';
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"]; 
$fruits["peach"] = "もも";


echo '<br>';
///foreach
$fruits = ["りんご","みかん","もも"];

foreach ($fruits as $value){
    echo $value;
}

echo '<br>';
////連想配列の場合
$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];

foreach ($fruits as $key=>$value){
    echo $key;
    echo $value;
    
}

echo '<br>';
///関数
function getTriangleArea($base,$height,){
    $area = $base *$height / 2;
    print "三角形の面積は" .$area. "だよ。";
}

//1)
getTriangleArea(10,5);
//2)
echo '<br>';
getTriangleArea(15,8);
//3)
echo '<br>';
getTriangleArea(8,6);


echo '<br>';
////ローカル変数
function sayHi($name = "goto"){
    //関数の中で定義する変数 => ローカル変数
    $myname = "php";
    return "Hi!".$name."from".$myname;
}
echo sayHi();





echo '<br>';

// ceil（切り上げ）
    // index.php
    $x = 5.2;
    echo ceil($x);

    
    echo '<br>';
// floor(切り捨て)
    // index.php
    $x = 5.2;
    echo floor($x);
 
    echo '<br>';
// round(四捨五入)
    // index.php
    $x = 5.2;
    echo round($x);
 
    echo '<br>';
// pi（円周率）
// index.php
    echo pi();
    
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    // 半径が2の円の面積の計算
    circleArea(2);

    echo '<br>';
// mt_rand（乱数）
// 1から100の範囲で、ランダムに1つ数字を取り出す場合の例を書きます。
// // index.php
    echo mt_rand(1, 100);



    echo '<br>';
//文字列に関する関数 
     
//strlen（文字列の長さ）
        $str = "hogehoge";
        echo strlen($str);

    echo '<br>';
 //strpos（検索）
    
    // strposは、対象の文字列の中に、ある文字が何番目にあるか教えてくれます。
    // 例えば、yoneyamaという文字列の中で、aという文字を探すと、6文字目と8文字目にあります。
    // ただし、strposは 最初に出てくる順番 なので、出力としては6文字目が該当します。
    // また、プログラミングにおいて、順番は0から始まるので、6文字目は 5 で返却されます。
        $str = "yoneyama";
        echo strpos($str, "a");
        // => 5と出力される
     

    echo '<br>';
//substr（文字列の切り取り）

    //substrで対象の文字列から一部分を抜き取ることができます。
    
        $str = "yoneyama";
        echo substr($str, -2, 2);
        // => maと出力される、
    
    //substr(対象の文字列, 開始位置, 文字数)
    //substr($str, -2, 2)であれば、$strの-2番目から2文字を切り取るということですね。


    echo '<br>';
    //str_replace（置換）
    
    // str_replaceは対象の文字列を置き換えるメソッドです。
    
        $str = "yoneyama";
        echo str_replace("neya", "NEYA", $str);
    // str_replaceの公式ですが、
    
    // str_replace(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列)
    // str_replace("neya", "NEYA", $str);であれば、yoneyamaの中の neya の部分を NEYA に置き換えています。
    // また、「 空白を空文字で置き換える 」という意味で、空白を削除する、という使い方もされます。
    
    echo '<br>';
        $str = "I am Yoneyama";
        echo str_replace(" ", "", $str);
    // この場合、半角スペースを空文字に置き換えています。
    // つまり、スペースがなくなります。
     
    // 日本語において、文字列操作の関数を使用する場合
    // 文字列に関する関数を見てきましたが、実は日本語を扱うとちょっとおかしな事になったりします。
    // 例えば「あいうえお」の文字数を数えるとします。
    
    echo '<br>';
        $str = "あいうえお";
        
        echo strlen($str);
        // => 15
    // これを実行すると、15と出力されます。
    // これは、日本語の文字が マルチバイト文字列 というものだからです。
    // 半角英数字とは違う数え方をするので、こうなってしまいます。
    // そこでそれを対応させる為にはmb_とつく、マルチバイトに対応したメソッドを使用してあげましょう。
    // ちなみに、mbはマルチバイトの略です。
    
    echo '<br>';
        $str = "あいうえお";
        echo mb_strlen($str);
        // => 5

    // これで5と出力してくれます。
    // 主に 文字列を数える メソッドは、日本語を使用する場合に注意が必要です。
    // 今までみてきた中ですと、strlen、strpos、substrです。
  
    
// 公式ドキュメント-マルチバイト文字列 関数-
    // 表示に関する関数
// printf（フォーマット化した文字列を出力）
    
    // フォーマットされた文字列ってどういうこと？と思うかもしれないので、まずは例を示します。
    echo '<br>';
        $name = "米山さん";
        $limit_number = 40;
    // 「米山さんの残り時間はあと40時間です」という文字列を出力
    echo $name."の残り時間はあと".$limit_number."です";
    
    echo '<br>';
    // printfを使用すると少し見やすくなります。
        printf("%sの残り時間はあと%dです", $name, $limit_number);
    
    // まずは、"%sの残り時間はあと%dです"です。
    // これがフォーマット化された文字列です。
    // 要は先に、完成形の文字列を用意してあげます。
    // 文字列の中にある、%s、%dですが、これはここに変数が入るよ、と教えてあげています。
    
    // %s、%dは %記法 と呼び、何のデータ型で入るか指定してあげます。
    // %s…文字列
    // %d…数値
    echo '<br>';
    printf("%sの残り時間はあと%dです", $name, $limit_number);
    // 第2引数以降は入る順番で変数を入れます。
    // 1番目に入るのは「米山さん」（$name）です。
    // 2番目に入るのは「40」（$limit_time）です。
    
    // 入る文字列を増やしても、引数を増やせば良いだけです。
    
    echo '<br>';
    $name = "米山さん"; $limit_time = 40; $price = 4000; printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);
    // 増やしても引数と%dの場所を増やせば問題ないです。
    // なお、再三になりますが、文字列が入るなら%s、数値が入るなら%dで場所をとっておきます。
    
    // また、printfは他にも使い方があります。
    // 残り時間を2桁で表示したいこともあると思います。
    // （残り04時間30分、など）
    echo '<br>';
        $limit_hour = 20;
        $limit_minute = 10;
        printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    
    echo '<br>'; 
        $limit_hour = 4;
        $limit_minute = 4;
        printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    // 「残り20時間10分」と「残り04時間04分」と表示されたと思います。
    // %02dと02を入れることで、桁数を指定することができ、空いた桁に0を自動で入れてくれます。
    
     
// sprintf（変数に代入できるprintf）
    
    // printfに似たメソッドで、sprintfというメソッドがあります。
    // ほとんど同じように使用できますが、printfはechoと同様出力をしますが、sprintfはフォーマット化して終わりです。
    // そのため、出力するためには別途echoする必要があります。
    
    echo '<br>';
        $limit_hour = 4;
        $limit_minute = 4;
        printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
        
    echo '<br>';   
        // sprintfだけでは出力までできない
        $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
        echo $limit_time;






?>