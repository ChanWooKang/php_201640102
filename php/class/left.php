<?php
/* 메소드 (클래스 안에있는 함수)
*함수 ( 클래스가 아닌 일반함수)
*클래스 = 변수 + 함수 (캡슐화)
 프로퍼티 (클래스 안에있는 변수)
 */
// 클래스 선언
class left
{    
    public $name;
    //상수 두가지
    const ENGLISH = "en";

    public function greeting()
    {
        echo "left hello<br>";
    }

    public function daelim()
    {
        echo "대림대학교 <br>";
    }
}