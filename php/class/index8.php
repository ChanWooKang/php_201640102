<?php

include "index7.php";

// 먼저 use 로 사용하면 namespace를 생략할수있다.
use \kookru\daelim as bbbb;
//as 사용가능
$obj = new bbbb\aaa;
$obj->hello();