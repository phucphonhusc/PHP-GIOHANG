<section class="contact p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 pb-5">
                    <h3 class="display-4 mb-2 text-white">Get In Touch</h3>
                    <form class="contact-form">
                        <div class="form-group py-3">
                            <input type="text" class="form-control my-2 p-2 input" placeholder="Name">
                        </div>
                        <div class="form-group py-3">
                            <input type="text" class="form-control my-2 p-2 input" placeholder="Email Address">
                        </div>
                        <div class="form-group py-3">
                            <input type="checkbox" checked" placeholder="Name">
                            <label for="check" class="text-white">Send Announcements</label>
                        </div>
                        <button type="submit"
                            class="btn btn-block p-2 font-weight-bold text-uppercase submit-button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- --footer-- -->
    <footer class="bg-dark px-5">
        <div class="container-fluid">
            <div class="row text-light py-4">
                <div class="col-lg-4 col-sm-6">
                    <h5 class="pd-3">About Us</h5>
                    <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, fugit dolorum ab, amet
                        dolores, magni expedita at fugiat voluptas nesciunt rem voluptates ipsam ut?</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h5 class="pd-3">Visit Us</h5>
                    <ul class="list-unstyled ">
                        <li>
                            <a href="#" class="footer-link">Home</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Product</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Gallery</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Collection</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Customers</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Pricing</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h5 class="pd-3">Need Help?</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="footer-link text-uppercase">Customers Service</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-uppercase">Online Chat</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-uppercase">Support</a>
                        </li>
                        <li>
                            <a href="#" class="text-info footer-link">nvpp15598@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h5 class="pd-3">Stay Connected</h5>
                    <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ullam iste
                        fugit laboriosam nobis beatae, harum aliquam nihil itaque aperiam facere! Est suscipit
                        praesentium at! Sequi tempora sit aut animi!</p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Adress">
                            <div class="input-group-append">
                                <button type="button"
                                    class="btn btn-danger text-white text-uppercase font-weight-bold">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fab fa-facebook-square fa-2x text-primary"></i></li>
                        <li class="list-inline-item"><i class="fab fa-google-plus fa-2x text-danger"></i></li>
                        <li class="list-inline-item"><i class="fab fa-instagram fa-2x text-danger"></i></li>
                        <li class="list-inline-item"><i class="fab fa-twitter fa-2x text-info"></i></li>
                        <li class="list-inline-item"><i class="fab fa-youtube fa-2x text-danger"></i></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col text-center text-light border-top pt-3">
                    <p>&copy; 2019 Copyright, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <button id="topBtn"><i class="fas fa-chevron-up"></i></button>
    <script src="js/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="js/popper.min.js"
       ></script>
    <script src="js/bootstrap.min.js"
        ></script>
    <script src="js/script.js"></script>
    <script>
        var div = document.createElement('div');
        div.className = 'fb-customerchat';
        div.setAttribute('page_id', '106907220654698');
        div.setAttribute('ref', '');
        document.body.appendChild(div);
        window.fbMessengerPlugins = window.fbMessengerPlugins || {
          init: function () {
            FB.init({
              appId            : '1678638095724206',
              autoLogAppEvents : true,
              xfbml            : true,
              version          : 'v3.0'
            });
          }, callable: []
        };
        window.fbAsyncInit = window.fbAsyncInit || function () {
          window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
          window.fbMessengerPlugins.init();
        };
        setTimeout(function () {
          (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) { return; }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
        }, 0);
      </script>
    <!-- <script src="backtotop.js"></script> -->
    <!-- <script type="text/javascript" src="https://itexpress.vn/js/noel.js"></script> -->
</body>

</html>