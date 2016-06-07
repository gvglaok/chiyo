<!DOCTYPE HTML>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>skin/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>skin/admin/css/style.css" rel='stylesheet' type='text/css' />
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>skin/admin/js/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>skin/admin/js/custom.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>skin/admin/js/bootstrap.min.js"></script>
</head>

<body id="login">
    <div class="login-logo">
        <a href="index.html"><img src="<?php echo base_url(); ?>skin/admin/images/logo.png" alt="gvgnn.com" /></a>
    </div>
    <h2 class="form-heading">易食代登录</h2>
    <div class="app-cam">
        <form method="POST" role="form">
            <div class="input-group">
                <span class="input-group-addon">用户名</span>
                <input id="user" name="user" type="text" class="form-control" required="true">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">密&nbsp;&nbsp;码</span>
                <input id="psw" name="psw" type="password" class="form-control" required="true">
            </div>
            <br>
            <button type="button" onclick="login()" class="btn btn-info btn-lg btn-block">登录</button>
        </form>
        <br><br><br><br><br><br><br>
    </div>
    <div class="copy_layout login">
        <p>Copyright &copy; 2016 CIFANF_YSD Company</p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>

</html>
