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
    <!--[if IE]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            
            <!-- <form class="navbar-form navbar-right">
                <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form> -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url();?>admin/dashboard"><i class="glyphicon glyphicon-dashboard nav_icon"></i>控制面板</a>
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
                    <div id="page-wrapper">
            <div class="graphs">
                <div class="graph_box">
                    <div class="col-md-4 grid_2">
                        <div class="grid_1">
                            <h3>Circular</h3>
                            <canvas id="doughnut" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                        </div>
                    </div>
                    <div class="col-md-4 grid_2">
                        <div class="grid_1">
                            <h3>Line</h3>
                            <canvas id="line" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                        </div>
                    </div>
                    <div class="col-md-4 grid_2">
                        <div class="grid_1">
                            <h3>PolarArea</h3>
                            <canvas id="polarArea" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="graph_box1">
                    <div class="col-md-4 grid_2">
                        <div class="grid_1">
                            <h3>Bar</h3>
                            <canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                        </div>
                    </div>
                    <div class="col-md-4 grid_2">
                        <div class="grid_1">
                            <h3>Pie</h3>
                            <canvas id="pie" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                        </div>
                    </div>
                    <div class="col-md-4 grid_2">
                        <div class="grid_1">
                            <h3>Radar</h3>
                            <canvas id="radar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <script>
                var doughnutData = [{
                        value: 30,
                        color: "#ef553a"
                    }, {
                        value: 50,
                        color: "#9358ac"
                    }, {
                        value: 100,
                        color: "#3b5998"
                    }, {
                        value: 40,
                        color: "#00aced"
                    }, {
                        value: 120,
                        color: "#4D5360"
                    }

                ];
                var lineChartData = {
                    labels: ["", "", "", "", "", "", ""],
                    datasets: [{
                        fillColor: "#00aced",
                        strokeColor: "#00aced",
                        pointColor: "#00aced",
                        pointStrokeColor: "#fff",
                        data: [65, 59, 90, 81, 56, 55, 40]
                    }, {
                        fillColor: "#3b5998",
                        strokeColor: "#3b5998",
                        pointColor: "#3b5998",
                        pointStrokeColor: "#fff",
                        data: [28, 48, 40, 19, 96, 27, 100]
                    }]

                };
                var pieData = [{
                        value: 30,
                        color: "#ef553a"
                    }, {
                        value: 50,
                        color: "#00aced"
                    }, {
                        value: 100,
                        color: "#69D2E7"
                    }

                ];
                var barChartData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [{
                        fillColor: "#ef553a",
                        strokeColor: "#ef553a",
                        data: [65, 59, 90, 81, 56, 55, 40]
                    }, {
                        fillColor: "#00aced",
                        strokeColor: "#00aced",
                        data: [28, 48, 40, 19, 96, 27, 100]
                    }]

                };
                var chartData = [{
                    value: Math.random(),
                    color: "#D97041"
                }, {
                    value: Math.random(),
                    color: "#C7604C"
                }, {
                    value: Math.random(),
                    color: "#21323D"
                }, {
                    value: Math.random(),
                    color: "#9D9B7F"
                }, {
                    value: Math.random(),
                    color: "#7D4F6D"
                }, {
                    value: Math.random(),
                    color: "#9358ac"
                }];
                var radarChartData = {
                    labels: ["", "", "", "", "", "", ""],
                    datasets: [{
                        fillColor: "#3b5998",
                        strokeColor: "#3b5998",
                        pointColor: "#3b5998",
                        pointStrokeColor: "#fff",
                        data: [65, 59, 90, 81, 56, 55, 40]
                    }, {
                        fillColor: "#ef553a",
                        strokeColor: "#ef553a",
                        pointColor: "#ef553a",
                        pointStrokeColor: "#fff",
                        data: [28, 48, 40, 19, 96, 27, 100]
                    }]

                };
                new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
                new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
                new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
                new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
                new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
                new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
                </script>
               
            </div>
        </div>
                </div>
                
				
				<div class="clearfix">
				
				</div>
                <div class="copy">
                    <p>Copyright &copy; 2016.Company name All rights reserved. <a href="#" target="_blank" title="YSD">YSD</a> - Collect from <a href="#" title="YSD_keven" target="_blank">YSD_keven</a></p>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>skin/admin/js/bootstrap.min.js"></script>
</body>

</html>
