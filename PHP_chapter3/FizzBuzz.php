<?php

for($i = 1;$i <= 100;$i++){
    if (($i % 3 === 0) && ($i % 5 ===0)){
        echo 'FizzBuzz';
    } elseif ($i % 3 === 0){
        echo 'Fizz';
    } elseif ($i % 5 === 0){
        echo 'Buzz';
    } else {
        echo $i;
    }
    echo PHP_EOL;
}
?>

<?php
    for ($i=1; $i <= 100 ; $i++) {
        if (($i % 3 === 0) && ($i % 5 === 0)) {
            echo "fizzbuzz\n";
        } elseif ($i % 3 === 0) {
            echo "fizz\n";
        } elseif ($i % 5 === 0) {
            echo "buzz\n";
        } else {
            echo $i."\n";
        }
    }
?>