<?php
function korean()
{
    //함수내용  
    echo "안녕하세요.";
}


function english()
{
    //함수내용  
    echo "hello.";
}

$lang = "ko";
if($lang == "ko"){
    //$fff ="korean";
    korean();
}
else
    //$fff = "english";
    english();
//함수 호출

 $fff();