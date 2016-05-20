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
                            
                            <a class="navbar-brand" href="<?php echo base_url(); ?>customer/menu"><i class="glyphicon glyphicon-chevron-left"></i> YSD_订单</a>
                        </div>
                       
                    </div>
                </nav>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="list-group mediaList">
                <?php if ($res!=0): ?>
                    <?php foreach ($res as $key): ?>
                    <li id="lg_<?php echo $key['mID'] ?>" class="list-group-item">
                        <span class="text-primary"><?php echo $key['mName'] ?></span>&nbsp;&nbsp;
                        
                        <button info="<?php echo $key['mID'] ?>" type="button" class="close pull-right" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        
                        <span class="pull-right m5"><i id="price_<?php echo $key['mID'] ?>"><?php echo $key['mPrice'] ?></i>￥</span>

                        <span class="pull-right m5">
                            <button id="less_<?php echo $key['mID'] ?>" 
                            info="<?php echo $key['mID'] ?>" type="button" class="btn btn-xs btn-info">-</button>
                            <i id="mNumber_<?php echo $key['mID'] ?>" info="<?php echo $key['mID'] ?>">
                            <?php 
                                echo $count[$key['mID']];
                            ?>
                            </i>份
                            <button id="add_<?php echo $key['mID'] ?>" 
                            info="<?php echo $key['mID'] ?>" type="button" class="btn btn-xs btn-info">+</button>
                        </span>&nbsp;&nbsp;
                    </li>
                    <?php endforeach ?>
                <?php else: ?>
                    <li class="list-group-item">多选点喜欢的菜哟！</li>
                <?php endif ?>
                

                    <li class="list-group-item">
                        <i class="glyphicon glyphicon-cutlery"></i> 
                        共计：<i id="allNumber"><?php echo isset($number) ? $number : "0";?></i>份 | 
                        总价：<i id="allMoney"><?php echo isset($money) ? $money : "0";?></i>￥
                    </li>

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
                            <button onclick="deleMenu()" type="button" class="btn btn-info pull-right navm8">
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
