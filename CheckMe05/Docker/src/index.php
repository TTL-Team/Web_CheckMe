<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CheckMe05</title>
</head>
<body>
    <center>
    <hr>
    </center>
    <h1>欢迎来到青少年CTF平台的CheckMe05</h1>
    <?php
	error_reporting(0);
	$code = '
	<?php
        $a=$_GET["a"];
        $b=$_GET["b"];
        if($a!==$b && md5($a)===md5($b)){
            echo($flag);
        }
    ?>
	';
	highlight_string($code);
	$flag = getenv('FLAG');
	if($flag=="not_flag" or $flag==""){
		$flag="qsnctf{test_flag}";
	}
    $a=$_GET['a'];
    $b=$_GET['b'];
    if($a!==$b && md5($a)===md5($b)){
        echo($flag);
    }
       
    ?>
</body>
</html>
