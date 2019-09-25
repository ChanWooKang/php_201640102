<?php

if(function_exists(daelim)){
    echo "함수명이 있어요.<br>";
} else{


// 키워드  함수명() 선언     :반환타입
function daelim($name,$num) :array
{
    echo "대림대학교<br>";
    //echo $name."=" .$num;
    //배열생성
    /*
    * 변수로 받거나
    * []로 만들수있다
    $arr = array();
    $arr = [$name,$num];
    */
    $arr = [$name,$num];
    return $arr;
}
}