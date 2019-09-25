<?php

//this 사용방법
// 1단계 선언 (선언만 한경우 HDD에 저장)
class foo 
{
    //변수, 함수
    public $name; // 프로퍼티
    public static $daelim ="대림대학교";
    public function hello()
    {
        echo self::$daelim.">>";
        echo $this ->name."짱이예요<br>";
        return $this;
    }

    public function greeting()
    {
        echo "반가워요<br>";
        return $this;
    }
}

// 2단계 생성
$obj1 = new foo;
$obj1 ->name = "대림이"; // 객체 프러퍼티 값을 저장 
$obj1->hello();

$obj2 =new foo;
$obj2 ->name = "대숙이";
$obj2 -> hello();

foo::$daelim = "우주최강";
$obj1->hello();
$obj2->hello();
/*
// 3단계 호출
$result =$obj->hello(); // $this
// $result == $this == $obj
$result ->hello()->greeting();

echo "========<br>";
$obj2 = new foo;
$obj2 ->name ="대숙이";
$result =$obj2->hello();
$result ->hello();
//self 사용방법
//1단계 선언
class bar
{  
    public static $name;

    public static function username()
    {
        echo self::$name. "입니다.";

    }
}

//2단계 선언
bar::$name = "고정값"; //::붙어있으면 Static 
bar::username();
*/