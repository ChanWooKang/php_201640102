<?php

class aaa
{
    use abcd;

}
//trait 클래스를 인클루드 할때 사용
trait abcd
{
    public function join()
    {
        echo "나도 끼워줘...";
    }
}
$obj = new aaa;
$obj->join();