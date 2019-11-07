<?php
function multi($num){
for($i =1 ; $i <=9;$i++){
	echo $num."*".$i."=".$i*$num."\n";
}
	
}

for($i=2;$i<=9;$i++){
	echo multi($i);
}