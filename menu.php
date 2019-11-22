<section class="header container-fluid">
        <!-- navbar -->
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
                // $countCart = 0;
                // if(isset($_SESSION["cart"])){
                //     foreach($_SESSION["cart"] as $key => $value){
                //         $countCart ++;
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
                        <a href="cart.php" class="nav-link m-2 menu-item">Cart<i class="fas fa-cart-plus"></i><span class="fixcart"><?php echo $countCart;?></span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Contact <i class="fas fa-phone-volume"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- banner -->
        <div class="text-light text-md-right text-center banner" style="font-family: 'Dancing Script', cursive;">
            <h2 class="display-5 banner-heading" style="font-size: 53px;">Wellcome to FoneeShoe</h2>
            <h4 class="lead banner-par" style="font-size: 23px;" >"Hãy mang những giấc mơ của bạn lên đôi chân để dẫn lối giấc mơ đó thành hiện thực".</h4>
        </div>
    </section>