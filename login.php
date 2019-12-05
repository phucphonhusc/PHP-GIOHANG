<?php
    session_start();
    // if(isset($_SESSION["user"])){
    //     header("location:index.php");
    // }
    include_once("model/user.php");
    $information = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = User::authentication($username, $password);
        if($user!=null){
    
            $_SESSION["user"] = serialize($user); 
            
            header("location:trangadmin.php");
        }
        else{
            $information = "Đăng nhập thất bại.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/foneeshoe.png">
    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <script src="js/all.js"></script>
    <style>
        body {
        margin: 0;
        padding: 0;
        background: linear-gradient(rgba(0,0,0,.4), rgba(0, 0,0, .5)) , url(images/cover.jpg) no-repeat center center /cover;
        height: 100vh;
        }
        #login-form{
            background: radial-gradient(black, transparent);
        }
        .login-box{
        width: 280px;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        color: white;
        
        }
        .login-box h1{
        float: left;
        font-size: 40px;
        border-bottom: 6px solid #03c2fc;
        color: #03c2fc;
        margin-bottom: 50px;
        padding: 13px 0;
        margin-left: 34px;
        }
        .textbox{
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 8px 10px;
        margin: 8px 0;
        border-bottom: 1px solid #03c2fc;
        }
        .textbox i{
            width: 26px;
            float: left;
            text-align: center;
        
        }
        .textbox input{
        border: none;
        outline: none;
        background: none;
        color: white;
        font-size: 18px;
        width: 80%;
        float: left;
        margin: 0 10px;
        }
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #03c2fc;
        opacity: 1; /* Firefox */
        }

        .btn{
        width: 100%;
        background: none;
        border: 2px solid #03c2fc;
        color: #03c2fc;
        padding: 5px;
        font-size: 18px;
        cursor: pointer;
        margin: 12px 0;
        
        }
        .btn:hover{
            background: #03c2fc;
            color: white;
        }

    </style>
    <title>Login</title>
</head>
<body>

    <div class="login-box">
    <?php if(strlen($information) !=0){?>
        <div class="alert alert-danger">
            <p style="text-align:center;font-weight:bold;"><?php echo $information;?></p>
        </div>
     <?php }?>
  <h1>Login <img src="images/foneeshoe.png" alt="" width="100"></h1>
  <form id="login-form" class="form" action="" method="post">
    <div class="textbox">
        <i class="far fa-user" style="float: left; color:#03c2fc; margin-top:5px;"></i>
        <input type="text" placeholder="Tên đăng nhập" name="username">
    </div>

    <div class="textbox">
        <i class="fas fa-lock" style="float: left; color:#03c2fc; margin-top:5px;"></i>
        <input type="password" placeholder="Mật khẩu" name="password">
    </div>

    <input type="submit" class="btn" value="Đăng nhập">
    Bạn chưa có tài khoản ? <a href="register.php" style="color:orange;">Đăng ký ngay!</a> 
  </form>
 
</div>
</body>
</html>