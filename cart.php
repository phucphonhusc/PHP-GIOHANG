
<?php 
    include_once("header.php");
?>
<?php
    
    if(isset($_POST["datmua"])){
        if(isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"], "item_id");
            if(!in_array($_GET["id"], $item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    "item_id" => $_GET["id"],
                    "item_ten" => $_POST["hidden_ten"],
                    "item_anh" => $_POST["hidden_anh"],
                    "item_soluong" => $_POST["soluong"],
                    "item_size" => $_POST["size"],
                    "item_gia" => $_POST["hidden_gia"]

                );
                $_SESSION["cart"][$count] = $item_array;
                
                echo '<div class="alert alert-info" role="alert">
                        <p>Sản phẩm đã được thêm vào giỏ!</p> 
                    </div>';
                    echo '<script>window.location="cart.php"</script>';
            }
            else{
                foreach($_SESSION["cart"] as $keys => $value){
                    if($_SESSION["cart"][$keys]["item_id"]==$_GET["id"]){
                        $_SESSION["cart"][$keys]["item_soluong"] += $_POST["soluong"];
                        $_SESSION["cart"][$keys]["item_size"] = $_POST["size"];
                    }
                }
                // echo '<script>alert("Sản phẩm đã tồn tại ở giỏ hàng!")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
        else{
            $item_array = array(
                "item_id" => $_GET["id"],
                "item_ten" => $_POST["hidden_ten"],
                "item_anh" => $_POST["hidden_anh"],
                "item_soluong" => $_POST["soluong"],
                "item_size" => $_POST["size"],
                "item_gia" => $_POST["hidden_gia"]

            );
            $_SESSION["cart"][0] = $item_array;
            echo '<script>window.location="cart.php"</script>';
        }
    }
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["item_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                }
            }
        }
        if ($_GET["action"] == "deleteall"){
                    unset($_SESSION["cart"]);
        }
        if ($_GET["action"] == "change"){
            foreach($_SESSION["cart"] as $keys => $value){
                if($_SESSION["cart"][$keys]["item_id"]==$_GET["id"]){
                    $_SESSION["cart"][$keys]["item_soluong"] = $_POST["soluong"];
                    $_SESSION["cart"][$keys]["item_size"] = $_POST["size"];
                }
            }
        }

    }
?>

<style>
    .nav-item .nav-active{
    color: white !important;
    }
</style>
<?php include_once("navbar.php");?>
    <style>
        .navbar{
            background: #151f20;
        }
    </style>
    <section class="p-5">
        <div class="container">
            <br><br><br>
            <?php
            if(!empty($_SESSION["cart"])){
            ?> 
            <h2 style="text-align: center; color: blue;">THÔNG TIN GIỎ HÀNG</h2>
            
            <div class="table-responsive">
                       
            <table class="table" >
                <thead class="thead-dark">
                    <tr align="center">
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Size</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                            $tong =0;
                            foreach($_SESSION["cart"] as $key =>$value){
                            ?>
                                <tr align="center" >
                                    <th scope="row" ><?php echo $value["item_id"];?></th>
                                    <td><a href="index.php?timkiem=<?php echo $value["item_ten"];?>"><?php echo $value["item_ten"];?></a></td>
                                    <td ><a href="index.php?timkiem=<?php echo $value["item_ten"];?>"><img src="<?php echo $value["item_anh"];?>" alt="" width="75px"></a></td>
                                    <form action="cart.php?action=change&id=<?php echo $value["item_id"];?>" method="post" class="form-inline">
                                    <td>
                                        <input style="width: 60px;" id="Author" name="soluong" type="number" min="1" max="50" value="<?php echo $value["item_soluong"];?>" class="form-control input-md" >
                                    </td>
                                    <td>
                                        <input style="width: 60px;" id="Author" name="size" type="number" min="39" max="44" value="<?php echo $value["item_size"];?>" class="form-control input-md">
                                    </td>
                                    <td><?php echo number_format($value["item_gia"],0,'.','.').' đ';?></td>
                                    <td style="color:red"><?php echo number_format($value["item_soluong"] * $value["item_gia"],0,'.','.').' đ'; ?></td>
                                    <td>
                                        <button style="margin-left: 5px;" type="submit" class="btn btn-outline-success"><i class="fas fa-check-circle"></i></button></form>
                                        <a href="cart.php?action=delete&id=<?php echo $value["item_id"];?>">
                                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-times"></i></button>
                                        </a>
                                        <!-- <a href="cart.php?action=change&id=<?php echo $value["item_id"];?>">
                                            <button type="submit" class="btn btn-outline-success"><i class="fas fa-edit"></i></button>
                                        </a> -->
                                        
                                    </td>
                                </tr>
                                <?php  
                                    $tong =$tong + ($value["item_soluong"] * $value["item_gia"]);
                                  
                            }?> 
                                <tr>
                                    <td colspan="6" align="right" style="font-weight: bold;">Tạm tính: </td>
                                    <th align="right" style="color:red"><?php echo number_format($tong, 0, '.','.') .' đ'?></th>
                                    <td align="center">
                                        <a href="cart.php?action=deleteall">
                                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Xóa hết</button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7" align="right"><button type="button" class="btn btn-success"><i class="far fa-money-bill-alt"></i> Thanh toán ngay</button></td>
                                    <td><a href="index.php"><button type="button" class="btn btn-warning"><i class="fas fa-cart-plus"></i> Tiếp tục mua hàng</button></a></td>
                                </tr>
                                <?php
                    ?>
                </tbody>
            </table>
            </div>
            <?php
            }
            else{
                echo '
                <div class="text-center">
                    <img src="images/cart_is_empty.png" alt="">
                    
                </div>
                <div style="text-align:center">
                    <a href="index.php"><button type="button" class="btn btn-warning"><i class="fas fa-cart-plus"></i> Tiếp tục mua hàng</button></a>
                </div>';
            }

            ?>
            
        </div>
    </section>
    