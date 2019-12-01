<?php 
    class User{
        var $id;
        var $username;
        var $password;
        var $fullName;
        
        function User($id, $username, $password, $fullname)
        {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->fullname = $fullname;
        }
        
        static function connect(){
            $con = new mysqli("localhost","root","","giay");
            $con->set_charset("utf8");
            if($con->connect_error){
                die("Kết nối thất bại. Chi tiết: ".$con->connect_error);
                //die: return. kết thúc hàm
            }
            return $con;

        }
        static function authentication($username, $password)
        {
            $con = User::connect();
            $sql = "SELECT * FROM user";
            $result = $con->query($sql); 
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    if($username == $row["username"] && $password == $row["password"] )
                    {
                        return new User($row["id"], $row["username"], $row["password"], $row["fullname"]);
                    }
                }
                return null;
            }
            //B3: Giải phóng kết nối
            $con->close();  
        }
        static function register($username, $password, $fullname){
            $conn = User::connect();
              // Kiểm tra username hoặc email có bị trùng hay không
            $sql = "SELECT * FROM user WHERE username = '$username' ";
            
            // Thực thi câu truy vấn
            $result = mysqli_query($conn, $sql);
            
            // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
            if (mysqli_num_rows($result) > 0)
            {
                // Sử dụng javascript để thông báo
                echo '<script language="javascript">alert("Tên đăng nhập đã tồn tại"); window.location="register.php";</script>';
                
                // Dừng chương trình
                die ();
            }
            else {
                // Ngược lại thì thêm bình thường
                $sql = "INSERT INTO user (username, password, fullname) VALUES ('$username','$password','$fullname')";
                
                if (mysqli_query($conn, $sql)){
                    echo '<script language="javascript">alert("Đăng ký thành công"); window.location="login.php";</script>';
                }
                else {
                    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
                }
            }
            $conn->close();
        }
        
    }
?>