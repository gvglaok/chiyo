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
    <script src="<?php echo base_url(); ?>skin/customer/js/doing.js"></script>
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
                            <a class="navbar-brand" href="<?php echo base_url(); ?>customer/menu"><i class="glyphicon glyphicon-chevron-left"></i> YSD_订单</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">特色菜品 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">凉菜</a></li>
                                <li><a href="#">热菜</a></li>
                                <li><a href="#">烧烤</a></li>
                                <li><a href="#">主食</a></li>
                                <li><a href="#">汤类</a></li>
                                <li><a href="#">酒水|饮料</a></li>
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
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="list-group mediaList">
                    <?php foreach ($res as $key): ?>
                    <li class="list-group-item">
                        <span class="text-primary"><?php echo $key['mName'] ?></span>&nbsp;&nbsp;
                        
                        <button type="button" class="close pull-right" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <span class="pull-right m5"><i id="price_<?php echo $key['mID'] ?>"><?php echo $key['mPrice'] ?></i>￥</span>&nbsp;&nbsp;
                        <span class="pull-right m5">
                            <button id="less_<?php echo $key['mID'] ?>" 
                            info="<?php echo $key['mID'] ?>" type="button" class="btn btn-xs btn-info">-</button>
                            <i id="mNumber_<?php echo $key['mID'] ?>">
                            <?php 
                                echo $count[$key['mID']];
                            ?>
                            </i>份
                            <button id="add_<?php echo $key['mID'] ?>" 
                            info="<?php echo $key['mID'] ?>" type="button" class="btn btn-xs btn-info">+</button>
                        </span>&nbsp;&nbsp;
                    </li>
                    <?php endforeach ?>

                    <li class="list-group-item"><i class="glyphicon glyphicon-cutlery"></i> 共计：<?php echo $number;?>份 | 总价：<?php echo $money;?>￥</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <?php //print_r($count); ?>
        </div>
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
                            </button>
                            <button class="btn btn-info active navr" data-toggle="modal" data-target="#shopchart" info="请选择喜欢的菜">
                                 已点6份</button>
                            <a class="navbar-brand" href="#"></a>-->
                            <button type="button" class="btn btn-info pull-right navm8">
                            <i class='glyphicon glyphicon-ok'></i> 上菜 
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
</body>

</html>
