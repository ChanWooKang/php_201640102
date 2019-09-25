<?php

// 빈객체  standard 객체
class daelim
{   //__construct 자동으로 생성디는 함수
    public function __construct()
    {   
        //__CLASS__ = 자기 자신 클래스 명 (상수)
        echo __CLASS__ . "이 생성이 되었습니다.<br>";
        //$this->hello();
    }

    final public function hello()
    {
        echo "학교가 너무 높아요...";
    }
}

class food extends daelim
{   

    public function menu()
    {
        echo "맛이 없어요 <br>";
    }
    /*
     public function hello()
    {
        echo "학교가 너무 멀어요...";
    }
    */
}

$obj1 =new food;
//여기에 프로그램이 많이 작성...
$obj1->hello();
$obj1->menu();

