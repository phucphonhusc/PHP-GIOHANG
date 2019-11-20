<section class="p-5 text-center bg-light">
        <div class="container">
            <div class="row text-center text-muted">
                <div class="col m-4">
                    <h1 class="display-5 mb-4 fix-icon">Product</h1>
                    <div class="underline-dark mb-4"></div>
                </div>
            </div>
            <div class="row align-items-center " >
                <?php
                    if(isset($result)){
                        $arr = $result;
                      }
                      else{
                        $arr = $ls;
                      }        
                    foreach ($arr as  $key => $value) {
                    ?>                 
                        <div class="col-sm-3 mb-3" >
                            <div class="thumbnails chuyendongmissiontrai" style="cursor: pointer; padding:0">
                                <a >
                                    <div class="wrap">
                                        <div class="box">
                                        <img  title="Chi tiết <?php echo $value->tengiay?>" src="<?php echo $value->anh?>" width="250" />
                                        </div>
                                    
                                    <div class="content text-center">
                                        <button data-toggle="modal" data-target="<?php echo "#chitietSP".$value->magiay; ?>" class="btn btn-primary btnchitiet" style="align:center" title="Chi tiết <?php echo $value->tengiay?>">Chi tiết</button>
                                    </div>
                                    </div>
                                    <div>
                                        <h4 style="text-align:center; color:blue">
                                            <?php echo $value->tengiay?>
                                        </h4>
                                        <h5><?php echo number_format($value->gia, 0,'.','.').' đ';?> </h5>
                                        <form action="cart.php?action=datmua&id=<?php echo $value->magiay; ?>" method="post">
                                            <button type="submit" class="btn btn-warning" name="datmua" title="Click vào để mua" class="fas fa-cart-plus"></i> Mua ngay</button>
                                        <div class="modal fade" id="<?php echo "chitietSP".$value->magiay; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                           
                                                <div class="modal-content">
                                                <div class="modal-header" style="background: #151f20;">
                                                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết sản phẩm : <?php echo "$value->tengiay";?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                    <fieldset>
                                                        <div class="form-group d-flex">
                                                        <label class=" col-md-3 control-label" for="Title">Mã SP</label>
                                                        <div class="col-md-9">
                                                            <input id="i" name="idcontact" type="text" disabled value="<?php echo "$value->magiay";?>" class="form-control input-md">
                                                        </div>
                                                        </div>
                                                        <div class="form-group d-flex">
                                                        <label class=" col-md-3 control-label" for="Title">Tên SP</label>
                                                        <div class="col-md-9">
                                                            <input id="Title" name="ten" type="text" disabled value="<?php echo "$value->tengiay";?>" class="form-control input-md">
                                                            <input type="hidden" name="hidden_ten" value="<?php echo "$value->tengiay"; ?>" class="form-control input-md">

                                                        </div>
                                                        </div>
                                                        <div class="form-group d-flex">
                                                        <label class=" col-md-3 control-label" for="Title">Ảnh</label>
                                                        <div class="col-md-6" id="zoomimg">
                                                            <img src="<?php echo "$value->anh";?>" disabled class="form-control input-md" width="250"/>
                                                            <input type="hidden" name="hidden_anh" value="<?php echo "$value->anh"; ?>" class="form-control input-md">
                                                        </div>
                                                        </div>
                                                        <div class="form-group d-flex">
                                                        <label class="pt-1 col-md-3 control-label" for="Title">Giá</label>
                                                        <div class="col-md-9">
                                                            <input id="Title" name="email" type="text" disabled value="<?php echo number_format($value->gia, 0,'.','.').' đ';?>" class="form-control input-md">
                                                            <input type="hidden" name="hidden_gia" value="<?php echo "$value->gia"; ?>" class="form-control input-md">
                                                        </div>
                                                        </div> 
                                                        <div class="form-group d-flex">
                                                        <label class="pt-1 col-md-3 control-label" for="Author">Năm SX</label>
                                                        <div class="col-md-9">
                                                            <input id="Author" name="sodienthoai" type="text" disabled value="<?php echo "$value->nam";?>" class="form-control input-md">
                                                        </div>
                                                        </div>
                                                        <div class="form-group d-flex">
                                                        <label class="pt-1 col-md-3 control-label" for="Author">Số lượng</label>
                                                        <div class="col-md-3">
                                                            <input id="Author" name="soluong" type="number" min="1" value="1" class="form-control input-md">
                                                        </div>
                                                        <label class="pt-1 col-md-3 control-label" for="Author">Chọn size</label>
                                                        <div class="col-md-3">
                                                            <input id="Author" name="size" type="number" min="39" max="44" value="39" class="form-control input-md">
                                                        </div>
                                                        </div>
                                                        
                                                    </fieldset>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="magiay" value="<?php echo "$value->magiay"; ?>" />
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Hủy</button>
                                                    <button type="submit" class="btn btn-primary" name="datmua"><i class="fas fa-cart-plus"></i> Đặt mua</button>
                                                </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ratings" style="color:red">
                                        <p class="pull-right">15 reviews</p>
                                        <p style="margin-top: -11px;">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star" style="color:black"></i>
                                        </p>
                                    </div>
                                </a>
                            </div> 
                        </div>
                            <?php }?>
                
            </div>   
            <div class="my-5">
                <h2 class="text-muted mb-4">Thanks for being with us!</h2>
                <i class="fas fa-coffee fa-3x"></i>
            </div>
        </div>
    </section>
    <!-- mission -->
    <section class="p-5 mission">
        <div class="container-fluid">
            <div class="row text-center text-light">
                <div class="col m-4">
                    <h1 class="display-5 mb-4 fix-icon">Our Mission</h1>
                    <div class="underline mb-4"></div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam explicabo odit
                        possimus delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio debitis.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center mb-3">
                <div class="col-lg-5 text-center">
                    <img src="images/foneeshoe3.png" alt="phuot" width="250" class="img-responsive dixuyenviet-img">
                </div>
                <div class="col-lg-7 text-white text-lg-right text-sm-center mission-text">
                    <h2>Heyy! Let's go to FoneeShoe</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus unde enim
                        adipisci aut aperiam, odio alias molestias ipsum fugiat nemo illo odit voluptatibus deleniti
                        perferendis.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5 customers">
        <div class="container-fluid">
            <div class="row text-center text-light">
                <div class="col m-4">
                    <h1 class="display-5 mb-4 fix-icon">Customers</h1>
                    <div class="underline mb-4"></div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam explicabo odit
                        possimus delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio debitis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="carousel slide" data-ride="carousel" id="customer-carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#customer-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#customer-carousel" data-slide-to="1"></li>
                            <li data-target="#customer-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center">
                                <img src="images/phuot1.jpeg" alt="" class="img-fluid rounded-circle m-5" width="150">
                                <blockquote class="blockquote text-white">
                                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                                        iusto aliquam numquam id similique culpa!</p>
                                </blockquote>
                                <h5 class="text-white text-uppercase font-weight-bold mb-3">Fonee</h5>
                                <ul class="list-inline mb-5">
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="carousel-item text-center">
                                <img src="images/phuot2.jpeg" alt="" class="img-fluid rounded-circle m-5" width="150">
                                <blockquote class="blockquote text-white">
                                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam
                                        similique harum, molestias, praesentium numquam velit voluptatem iusto
                                        cupiditate placeat dicta eum.</p>
                                </blockquote>
                                <h5 class="text-white text-uppercase font-weight-bold mb-3">Arsenal</h5>
                                <ul class="list-inline mb-5">
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="carousel-item text-center">
                                <img src="images/phuot3.jpeg" alt="" class="img-fluid rounded-circle m-5" width="150">
                                <blockquote class="blockquote text-white">
                                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam
                                        similique harum, molestias, praesentium numquam velit voluptatem iusto
                                        cupiditate placeat dicta eum.</p>
                                </blockquote>
                                <h5 class="text-white text-uppercase font-weight-bold mb-3">Liverpool</h5>
                                <ul class="list-inline mb-5">
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>