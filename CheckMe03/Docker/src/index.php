<?php
error_reporting(0);
$url=$_GET['text'];
if(isset($url)){
    if(stripos($url,"php")===false && stripos($url,"data")===false){
       include($url);
    }else{
        die("error");
    }
}
    
?>
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CheckMe03</title>
</head>
<body>
    <center>
    <hr>
    </center>
    <h1>欢迎来到青少年CTF平台的CheckMe03</h1>
    <?php
            
            $code="<?php include($"."_GET['text']);?>";
            highlight_string($code);
    ?>
    

</body>
</html>
