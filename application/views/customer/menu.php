<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YSD Menu</title>
    <link href="<?php echo base_url(); ?>skin/customer/css/bootstrap.min.css" rel="stylesheet">   

    <link rel="stylesheet" href="<?php echo base_url(); ?>skin/customer/css/comm.css">

    <script src="<?php echo base_url(); ?>skin/customer/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>skin/customer/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url();?>customer/menu/">YSD</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <!-- <li class="active"><a href="#">特色菜品 <span class="sr-only">(current)</span></a></li> -->
                                <?php foreach ($class as $key): ?>
                                    <li><a href="<?php echo base_url();?>customer/menu/cMenu/<?php echo $key['cID']; ?>" cid=''>
                                        <?php echo $key['cName']; ?>
                                    </a></li>
                                <?php endforeach ?>
                                
                                
                            </ul>
                            <!--
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row mediaList">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php foreach ($res as $key): ?>
                <div class="thumbnail ">
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $key['mImage'] ?>" alt="...">
                    <div class="caption">
                        <h4 class="media-heading"><?php echo $key['mName'] ?></h4>
                        <h5><?php echo $key['mPrice'] ?>￥</h5>
                        <p><?php echo $key['mInfo'] ?></p>
                        <p>
                            <button type="button" class="btn btn-info btn-lg btn-block">来一份 <i class="glyphicon glyphicon-heart"></i></button>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
                
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                 <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>-->
                            <a href="<?php echo base_url(); ?>customer/cart" class="btn btn-info navr" info="选择喜欢的菜 :D">
                                <i class="glyphicon glyphicon-cutlery"></i> 已点6份 ：总计 223￥</a>
                            <button type="button" class="btn btn-info pull-right navm8">提交</button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
</body>

</html>
