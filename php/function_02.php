<?php
//함수안에 값을 받을수 있음 (변수로)
// 함수선언
function hello($name = "**" ,int $a , int $b)
    {   
        $sum - $a + $b;
        echo "반가워요 ". $name ."=" .$sum ."<br>";
        //반환값
        return $sum;
    }
    //함수 호출
    //자바스크립트는 인자값 안줘도됨
    $User = "대남이";
    $s = hello($User , 1 ,2);
    echo "합계는=".$s;