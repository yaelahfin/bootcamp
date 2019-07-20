<?php
function is_username_valid($string){
	if(preg_match("/^[A-Za-z]([a-z]+|[A-Z]+|[0-9]+){4,8}/", $string)){
		echo "$string : true\n";
	}else{
		echo "$string : false\n";
	}
}
function is_password_valid($string){
	if(preg_match("/^[A-Za-z]=+[a-zA-Z0-9]+#{1}/", $string)){
		echo "$string : true\n";
	}else{
		echo "$string : false\n";
	}
}
is_username_valid("Xrutaf888");
is_username_valid("1Diana");
is_password_valid("passW0rd=");
is_password_valid("C0d3YourFuture!#");
?>