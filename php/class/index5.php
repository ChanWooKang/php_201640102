<?php

//abstract 추상 클래스
abstract class greeting
{   
    // 이거는 꼭 만들어야해..
    abstract public function hello();

    public function pages()
    {
        echo "페이지출력";
    }
}

//인터페이스를 구현해서 클래스를 만들어.... 강제명령.
class daelim extends greeting
{
    
    public function hello()
    {
        echo "그냥 해....";
    }
    
}   

$obj = new daelim;
$obj->hello();
$obj->pages();