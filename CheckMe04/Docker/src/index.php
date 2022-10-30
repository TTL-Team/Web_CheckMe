<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CheckMe04</title>
</head>
<body>
    <center>
    <hr>
    </center>
    <h1>欢迎来到青少年CTF平台的CheckMe04</h1>
    <?php
	error_reporting(0);
	$code = '
	<?php $flag="";
        $a=$_GET["a"];
        $b=$_GET["b"];
        if(isset($a) && isset($b)){
            if(!ctype_alpha($a)){
                die("a error");
            }
            if(!is_numeric($b)){
                die("b error");
            }
            if(md5($a)==md5($b)){
                echo $flag;
            }
        }else{  
            echo "请问，flag在哪里？";
        }?>
	';
	highlight_string($code);
	$flag = getenv('FLAG');
	if($flag=="not_flag" or $flag==""){
		$flag="qsnctf{test_flag}";
	}
        $a=$_GET['a'];
        $b=$_GET['b'];
        if(isset($a) && isset($b)){
            if(!ctype_alpha($a)){
                die("a error");
            }
            if(!is_numeric($b)){
                die("b error");
            }
            if(md5($a)==md5($b)){
				echo "You Win <br>";
                echo $flag;
            }
        }else{  
            echo "请问，flag在哪里？";
        }
    ?>
</body>
</html>
