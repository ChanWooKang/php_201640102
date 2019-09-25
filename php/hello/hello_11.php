<?php
include "hello_10.php";
include "hello_10.php";
echo "반갑습니다.<br>";
include "hello_10.php";

//@include "hello_12.php";  
// php 파일이 없을때 실행해도 값이 안뜨긴하지만 Warning이 뜬다
//@는 오류 제어 연산자


//require 는 파일이 없을경우 실행이 중단이 된다.
//파일 디렉토리상 경로에 이름만 있을경우 같은 경로에서 찾는다.
require "hello_12.php";
require "hello_12.php";
require "hello_12.php";
