<?php include_once("model/user.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="images/foneeshoe.png">
    <link rel="stylesheet" href="css/bootstrap1.min.css">
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
        position: absolute;
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
        }
        .textbox{
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 8px 0;
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

    </style>
    <title>Register</title>
</head>
<body>

    <div class="login-box">
    <?php 
        if(isset($_POST['do-register'])){
            if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["password2"]) || empty($_POST["fullname"])){
                echo '<div class="alert alert-danger" role="alert">
                    Vui lòng không để trống !
              </div>';
            }else{
                $username= $_POST["username"];
                $password= $_POST["password"];
                $password2= $_POST["password2"];
                $fullname= $_POST["fullname"];
                if($password != $password2){
                    echo '<div class="alert alert-danger" role="alert">
                            Mật khẩu không trùng nhau         
                        </div>';
                }else{
                    User::register($username, $password, $fullname);
                }
            }
        
        }
    ?>
    <h1>Register <img src="images/foneeshoe.png" alt="" width="100"></h1>
  <form id="login-form" class="form" action="" method="post" role="form">
    <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Nhập tên đăng nhập" name="username">
    </div>

    <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Nhập mật khẩu" name="password">
    </div>
    <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Nhập lại mật khẩu" name="password2">
    </div>
    <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Nhập họ tên" name="fullname">
    </div>

    <input type="submit" name="do-register" class="btn" value="Đăng ký ngay">
  </form>
  
</div>
</body>
</html>