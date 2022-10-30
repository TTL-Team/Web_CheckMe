<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckMe08</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html {
            height: 100%;
        }
        body {
            height: 100%;
        }
        .container {
            height: 100%;
            background-image: linear-gradient(to right, #1E90FF, #B0E0E6);
        }
        .login-wrapper {
            background-color: #fff;
            width: 358px;
            height: 588px;
            border-radius: 15px;
            padding: 0 50px;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .header {
            font-size: 38px;
            font-weight: bold;
            text-align: center;
            line-height: 200px;
        }
        .input-item {
            display: block;
            width: 100%;
            margin-bottom: 20px;
            border: 0;
            padding: 10px;
            border-bottom: 1px solid rgb(128, 125, 125);
            font-size: 15px;
            outline: none;
        }
        .input-item:placeholder {
            text-transform: uppercase;
        }
        .btn {
            text-align: center;
            padding: 10px;
            width: 100%;
            margin-top: 40px;
            background-image: linear-gradient(to right, #1E90FF, #B0E0E6);
            color: #fff;
        }
        .msg {
            text-align: center;
            line-height: 88px;
        }
        a {
            text-decoration-line: none;
            color: #abc1ee;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-wrapper">
            <div class="header">CheckMe08</div>
            <div class="form-wrapper">
                <form action="index.php" method="post">
                <input type="text" name="username" placeholder="用户名" class="input-item">
                <input type="password" name="password" placeholder="密码" class="input-item">
                <button class="btn">登陆</button>
                </form>
            </div>
            <div class="msg">
                你是不是不会做了?
                <a href="http://www.qsnctf.com/">返回平台</a>
            </div>
        </div>
    </div>
<?php
    error_reporting(0);
    $uname = $_POST["username"];
    $passwd = $_POST["password"];
if($_POST["username"]!=""){
    $servername = "localhost"; //数据库所在主机名
    $username = "root"; //使用的数据库的用户名 
    $password = "root"; //使用的数据库的用户的密码
    $dbname = "sql";  //用户所使用的数据库
    # 读取动态flag
    # error_reporting(0);
    $flag = getenv('FLAG');
    if($flag=="not_flag" or $flag==""){
        $flag="qsnctf{test_flag}"; # 测试flag
    }
    $flag_in = "INSERT INTO `user` (`id`, `username`, `password`) VALUES (3, 'ctf', '".$flag."')";
    $con = new mysqli($servername,$username,$password,$dbname);
    if($con->connect_error){
    die('数据库连接失败');}
    $con->query($flag_in);
    $sql="SELECT * FROM user WHERE username='$uname' and password='$passwd'";
    $result=$con->query($sql);
    $row = mysqli_num_rows($result);
    //若表中存在输入的用户名和密码，row=1；若表中用户名不存在或密码错误，则row=0
    if($row == 1){
    echo '<script>alert("'.$row['user'].'登陆成功!")</script>';
    }
    else{
    echo '<script>alert("登录失败，请重新登录！")</script>';
    }
// 关闭数据库
mysqli_close($con);
}
else{
echo '<script>alert("欢迎来到CheckMe08")</script>';
}
?>
</body>
</html>
