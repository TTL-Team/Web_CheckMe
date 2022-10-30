<title>CheckMe-01</title>
<?php
print("<h1>欢迎来到CheckMe-01，快来寻找你的Flag并提交吧。</h1>");
?>
<form action="index.php" method="POST">
  your key: <input type="text" name="key" />
  <input type="submit" value="Submit" />
</form>
<?php
if(!empty($_POST['key'])){
	$keys = $_POST['key'];
	show_source("index.php");
	$keys = base64_decode(urldecode($keys));
	if(strlen($keys)==6){
		if($keys=="qsnctf"){
			print("<p>You win!</p>");
			include("flag.php");
			print($flag);
		}
	}
	else{
		print("末心：大漏特漏！此乃九年义务教育漏网之鱼。");
	}
}
?>
