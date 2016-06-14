<!DOCTYPE HTML>
<html>

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--[if IE]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="login">
  <div class="app-cam">
    <h3><img height="25px" src="<?php echo base_url(); ?>skin/admin/images/logo.png" alt="gvgnn.com" /> 易食代注册</h3>
    <br>
    <form class="form-signin" action="" method="post">
        <input type="text" class="form-control1" placeholder="用户名" autofocus="true">
        <input type="password" class="form-control1" placeholder="密码">
        <input type="password" class="form-control1" placeholder="重复密码">
        
        <button class="btn btn-lg btn-success1 btn-block" type="submit"> 提交 </button>
        <div class="registration">
            已注册 > 
            <a href="<?php echo base_url().'admin/clogin' ?>clogin"> 登录 </a>
        </div>
    </form>
    <div class="copy_layout login register">
        <p>Copyright &copy; 2016 CIFANF_YSD Company</p>
    </div>
  </div>
</body>

</html>
