
<nav class="navbar navbar-expand-lg fixed-top nav-menu">
            <a href="index.php" class="navbar-brand text-light fix-logo"><img src="images/foneeshoe.png" alt=""
                    width="55">FoneeShoe</span></a>
            <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#myNavbar">
                <div class="bg-light line1"></div>
                <div class="bg-light line2"></div>
                <div class="bg-light line3"></div>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-uppercase font-weight-bold" id="myNavbar">
            <?php  
                include_once("model/giay.php");
               
        
                $keyWord = null;
                if (isset($_GET['timkiem'])) {
                  $result= array();
                  $keyWord = $_REQUEST['timkiem'];
                  if(empty($keyWord)){
                    echo "<h1 style='color:red'>Bạn cần nhập dữ liệu để tìm kiếm</h1>";
                  }else{
                    $result = Giay::getListSearchGiay1($keyWord);
                  }
                  
                }
                $ls = Giay::getListGiayFromDB();
                $countCart =0;
                if(isset($_SESSION["cart"])){
                    foreach($_SESSION["cart"] as $key => $value){
                        $countCart ++;
                    }
                }
                 //PHAN TRANG
                // if(isset($result)){
                //     $length = count($result);
                // }
                // else{
                //     $length = count(Giay::getListGiayFromDB());
                // }
                // $size =3;
                
                // $page = 1; //trang hiện tại
                // if(isset($_REQUEST['page'])){
                //     $page = $_REQUEST['page'];
                // }
                // $from = $size*($page-1);
                // $to = ($size*$page) -1 ; 
                // $lsPagination = array();
                
                // if(isset($result)){
                //     for($i=$from;$i<=$to;$i++){
                //     if($i > count($result)-1)
                //         break;
                //     array_push($lsPagination,$result[$i]);
                //     }
                    
                // }
                // else{
                //     for($i=$from;$i<=$to;$i++){
                //     if($i > count($ls)-1)
                //         break;
                //     array_push($lsPagination,$ls[$i]);
                //     }
                // }
            ?>   
            <form class="form-inline md-form form-sm active-purple active-purple-2 mt-2" action="" method="GET">
                <div class="searchbar">
                    <input class="search_input" type="text" name="timkiem" placeholder="Tìm kiếm sản phẩm...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link m-2 menu-item nav-active">Home <i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Product <i class="fab fa-angellist"></i></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Customer <i class="far fa-user-circle"></i></a>
                    </li>
                    <li class="nav-item">
                    <a href="cart.php" class="nav-link m-2 menu-item cart-active">Cart<i class="fas fa-cart-plus"></i><span class="fixcart"><?php echo $countCart;?></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Contact <i class="fas fa-phone-volume"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
       