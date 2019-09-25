<?php

// 함수는 같은명은 하나만 가능하다 
//include_once를 사용할경우 함수명 중복이 발생하지않는다.

include "function_11.php"; // 함수를 선언한다.
include "function_11.php"; // 함수 중복 처리 한다.


// 호출
list($name,$num) = daelim("대림이",201640102); 
// $name <-- $name[0]
//$num <-- $name[1]
//print_r ($name);
echo $name ."=" .$num;