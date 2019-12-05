<?php 
class Giay{
    var $magiay;
    var $tengiay;
    var $anh;
    var $gia;
    var $nam;
    var $mota;
    function __construct($magiay,$tengiay,$anh,$gia,$nam,$mota )
    {
        $this->magiay = $magiay;
        $this->tengiay=$tengiay;
        $this->anh = $anh;
        $this->gia = $gia;
        $this->nam = $nam;
        $this->mota = $mota;
    }
    static function connect(){
        //b1: tạo kết nối
        $con = new mysqli("localhost","root","","Giay");
        $con->set_charset("utf8");
        if($con->connect_error)
            die("Kết nối thất bại. Chi tiết:" .$con->connect_error);
       //  echo "<h1>Kết nối thành công!</h1>";
       //b2: thao tác vs csdl : crud
        return $con;
    }
    static function getListGiayFromDB(){
        $con = Giay::connect();
        $sql = "SELECT * FROM giay ";
        $result = $con->query($sql);
        $lsGiay = array();
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                $giay= new Giay($row["Magiay"],$row["TenGiay"],$row["Anh"],$row["Gia"], $row["Nam"], $row["MoTa"]);
                array_push($lsGiay, $giay);
            }
        }
        //b3: giải phóng kết nối
        $con->close();
        return $lsGiay;
    }
    static function addGiayDB($tengiay, $anh, $gia, $nam, $mota){
        $con = Giay::connect();
        $sql = "INSERT INTO giay (TenGiay, Anh, Gia, Nam, MoTa) VALUES ('$tengiay','$anh','$gia','$nam','$mota')";
        // $result = $con->query($sql);
        if($con->query($sql)===TRUE){
            echo '<script>alert("Thêm thành công!");</script>';
        }else{
            echo '<script>alert("Thêm thất bại!");</script>'. $con->connect_error;
        }
        $con->close();
    }
    static function delGiayDB($magiay){
        $con = Giay::connect();
        $sql = "DELETE FROM giay  WHERE Magiay = $magiay " ;
        if($con->query($sql) === TRUE){
            echo '<script>alert("Xóa thành công!");</script>';
        }else{
            echo '<script>alert("Xóa thất bại!");</script>'. $con->connect_error;
        }         
        $con->close();
    }
    static function editGiayDB($magiay, $tengiay, $anh, $gia , $nam, $mota){
        $con = Giay::connect();
        $sql = "UPDATE giay SET TenGiay='$tengiay', Anh='$anh', Gia='$gia', Nam ='$nam', MoTa='$mota' WHERE Magiay= $magiay";
        if($con->query($sql) === TRUE){
            echo '<script>alert("Chỉnh sửa thành công!");</script>';
        }else{
            echo '<script>alert("Chỉnh sửa thành công!");</script>'. $con->connect_error;
        }
         $con->close();
    }
    // static function getListSearchGiay($search = null)
    // {
    //         $con = Giay::connect();
    //         $sql = "SELECT * FROM giay";
    //         $result = $con->query($sql);
    //         $lsGiay = array();
    //         if($result->num_rows>0){
    //             while($row = $result->fetch_assoc()){
    //                 if (
    //                     strlen(stripos($row["Magiay"], $search)) || strlen(stripos($row["TenGiay"], $search)) ||
    //                     strlen(stripos($row["Anh"], $search)) || strlen(stripos($row["Gia"], $search)) || 
    //                      strlen(stripos($row["Nam"], $search))|| $search == null)
    //                 {
                    
    //                 $giay =  new Giay($row["Magiay"], $row["TenGiay"], $row["Anh"], $row["Gia"], $row["Nam"]);
    //                 array_push($lsGiay, $giay);
                    
    //                 }
    //             }
    //         }
    //         //B3: Giải phóng kết nối
    //         $con->close();  
    //         return $lsGiay;
    // }
    static function getListSearchGiay1($search=null)
    {
            $con = Giay::connect();
            $sql = "SELECT * FROM giay WHERE (Magiay like '%$search%') or (TenGiay like '%$search%') or (Gia like '%$search%')";
            $result = $con->query($sql);
            $lsGiay = array();
            if($result->num_rows >0){
                while($row = $result->fetch_assoc()){
                    $giay= new Giay($row["Magiay"],$row["TenGiay"],$row["Anh"],$row["Gia"], $row["Nam"], $row["MoTa"]);
                    array_push($lsGiay, $giay);
                }
            }
            //b3: giải phóng kết nối
            $con->close();
            return $lsGiay;
    }
}
?>