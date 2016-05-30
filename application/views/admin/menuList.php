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
    <link href="<?php echo base_url(); ?>skin/admin/css/custom.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>skin/admin/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>skin/admin/js/jquery.form.js"></script>
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
                            <a href="#"><i class="glyphicon glyphicon-dashboard nav_icon"></i>控制面板</a>
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
                            <a href="<?php echo base_url();?>admin/menuadd"><i class="glyphicon glyphicon-copy nav_icon"></i>添加菜品</a>
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
                            <h3 class="panel-title"> 菜品列表 </h3>
                            <a href="menuadd.html" type="button" class="btn btn-primary pull-right m10">
                            <i class="glyphicon glyphicon-plus"></i> 添加菜品</a>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>图片</th>
                                    <th>名称</th>
                                    <th>价格</th>
                                    <th>简介</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($res as $key): ?>
                                <tr>
                                    <td><?php echo $key['mID'] ?></td>
                                    <td><img class="menuImg" src="<?php echo base_url(); ?>uploads/<?php echo $key['mImage'] ?>" alt=""></td>
                                    <td><?php echo $key['mName'] ?></td>
                                    <td><?php echo $key['mPrice'] ?>￥</td>
                                    <td><?php echo $key['mInfo'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-info m15">下架</button>
                                        <button id="mc_<?php echo $key['mID'] ?>" info="<?php echo $key['mID'] ?>" 
                                        data-toggle="modal" href='#mchange'
                                        type="button" class="btn btn-info m15">修改</button>
                                        <button type="button" class="btn btn-danger">删除</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <nav>
                      <ul class="pagination">
                        <?php echo $plink; ?>
                      </ul>
                    </nav>
                </div>
                
				
				<div class="clearfix">
				
				</div>
                <br><br><br>
                <div class="copy">
                    <p>Copyright &copy; 2016.Company name All rights reserved. <a href="#" target="_blank" title="YSD">YSD</a> - Collect from <a href="#" title="YSD_keven" target="_blank">YSD_keven</a></p>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- modal -->
    <div class="modal fade" id="mchange">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">菜品修改</h4>
                </div>
                <div class="modal-body"><!-- enctype="multipart/form-data" -->
                    <form id="testf" method="post" action="/chiyo/admin/menulist/menupost/">
                        <div class="input-group">
                          <span class="input-group-addon" id="mimg">图片</span>
                          <input name="mimg" type="file" class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon" id="mname">菜名</span>
                          <input name="mname" required="true" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon" id="mprice">价格</span>
                          <input name="mmoney" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon" id="minfo">简介</span>
                          <input name="minfo" type="text" class="form-control" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button id="msub" onclick="menuChange()" type="button" class="btn btn-primary">保存修改</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>skin/admin/js/bootstrap.min.js"></script>
</body>

</html>
