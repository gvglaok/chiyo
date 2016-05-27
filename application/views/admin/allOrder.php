<!DOCTYPE HTML>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content=" " />
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
    <!-- Graph CSS -->
    <link href="<?php echo base_url(); ?>skin/admin/css/lines.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url(); ?>skin/admin/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>skin/admin/js/jquery.min.js"></script>
    <!-- webfonts -->
    <link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- webfonts -->
    <!-- Nav CSS -->
    <link href="<?php echo base_url(); ?>skin/admin/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>skin/admin/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>skin/admin/js/custom.js"></script>
    <!-- Graph JavaScript -->
    <script src="<?php echo base_url(); ?>skin/admin/js/d3.v3.js"></script>
    <script src="<?php echo base_url(); ?>skin/admin/js/rickshaw.js"></script>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">YSD_keven</a>
            </div>
            <!-- /.navbar-header -->
           
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw nav_icon"></i>控制面板</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/timeorder"><i class="glyphicon glyphicon-bullhorn nav_icon"></i>未处理订单</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/allorder"><i class="glyphicon glyphicon-file nav_icon"></i>所有订单</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/menuclass"><i class="glyphicon glyphicon-tasks nav_icon"></i>菜单分类</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/menulist"><i class="glyphicon glyphicon-modal-window  nav_icon"></i>所有菜品</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/menuadd."><i class="glyphicon glyphicon-copy nav_icon"></i>添加菜品</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
       
        <div id="page-wrapper">
            <div class="graphs">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">所有订单</h3>
                        </div>
                        <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>台号</th>
                                <th>点菜数量</th>
                                <th>总价</th>
                                <th>时间</th>
                                <!-- <th></th> -->
                            </tr>
                        </thead>
                        <tbody>
                           <?php foreach($fdata as $key) : ?>
                            <tr>
                                <td><?php echo $key['oID'];?></td>
                                <td><?php echo $key['oTableNumber']?> </td>
                                <td><?php echo $key['oMenuNumber'];?></td>
                                <td><?php echo $key['oMoney'];?></td>
                                <td><?php echo $key['oAddTime'];?></td>
                                <!-- <td><button type="button" class="btn btn-info btn-sm" oid="<?php echo $key['oID'];?>">详情</button></td> -->
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    </div>	
                </div>
                
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <nav>
                      <ul class="pagination">
                        <!-- <li class="disabled">
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li> -->
                        
                        <?php echo $plink; ?>
                      </ul>
                    </nav>
                </div>

				<div class="clearfix"></div>

                <br><br>
                <div class="copy">
                    <p>Copyright &copy; 2016.Company name All rights reserved. <a href="#" target="_blank" title="YSD">YSD</a> - Collect from <a href="#" title="YSD_keven" target="_blank">YSD_keven</a></p>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
