<?php
$flag = getenv('FLAG');
if($flag=="not_flag" or $flag==""){
	$flag="qsnctf{test_flag}";
}