<?php

// static 인스턴스 만들지 않고도 접근하겠다
// 직접접근 정적
// 인스턴스 생성 하면 호출할때 $ 제외 
// static으로 접근할씨 $참조 

// 인스턴스를 만들면 this 로 지정
// 인스턴스를 안만들시 self 로 지정 
class foo
{
    public static $aaa =  "foo hahaha<br>";

    public static function hello()
    {
        echo self::$aaa;
    }
}