<?php $this->load->view('public/header'); ?>
    <body style="background-image: url(<?php echo img_url('login-bg.jpg')?>);background-repeat:no-repeat;background-size:cover;">
        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>
                    <h1 class="logo-name">IN+</h1>
                </div>
                <h3>Welcome to CodeIgniter</h3>
                <form class="m-t" role="form" action="index.html">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                </form>
                <p class="m-t"> <small>广东轻工职业技术学院 计算机工程系 &copy; 2016</small> </p>
            </div>
        </div>

    <!-- Mainly scripts -->
<!--    <script src="js/jquery-2.1.1.js"></script>-->
<!--    <script src="js/bootstrap.min.js"></script>-->
        <script data-main="<?php echo js_url('admin-login.js'); ?>" src="<?php echo js_url('require.js'); ?>"></script>
<?php $this->load->view('public/footer'); ?>