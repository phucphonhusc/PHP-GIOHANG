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
        
    }
?>