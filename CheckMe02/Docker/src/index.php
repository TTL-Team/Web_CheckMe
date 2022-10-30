<title>CheckMe-02</title>
<?php
print("<h1>欢迎来到CheckMe-02，快来寻找你的Flag并提交吧。</h1>");
?>
<?php
error_reporting(0);
$url=$_GET['url'];
if(isset($url)){
    include($url);
}
    
?>
<html lang="zh-CN">
<?php
            
            $code="<?php include($"."_GET['url']);?>";
            highlight_string($code);
    ?>
