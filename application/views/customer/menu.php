<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YSD Menu</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdn.bootcss.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/comm.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
                            <a class="navbar-brand" href="#">YSD</a>
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
                <div class="thumbnail mediaList">
                    <img src="img/3.jpg" alt="...">
                    <div class="caption">
                        <h4 class="media-heading"> Baked potato    </h4>
                        <h5>56.5 $</h5>
                        <p> Perfect your spud technique then pile our filling ideas high. </p>
                        <p>
                            <button type="button" class="btn btn-info btn-lg btn-block">来一份 <i class="glyphicon glyphicon-heart"></i></button>
                        </p>
                    </div>
                </div>
                <div class="thumbnail ">
                    <img src="http://www.bbcgoodfood.com/sites/default/files/styles/category_retina/public/1897686_MEDIUM.jpg?itok=Rrdqmir2" alt="...">
                    <div class="caption">
                        <h4 class="media-heading"> Baked potato    </h4>
                        <h5>56.5 $</h5>
                        <p> Perfect your spud technique then pile our filling ideas high. </p>
                        <p>
                            <button type="button" class="btn btn-info btn-lg btn-block">来一份 <i class="glyphicon glyphicon-heart"></i></button>
                        </p>
                    </div>
                </div>
                <div class="thumbnail ">
                    <img src="img/6.jpg" alt="...">
                    <div class="caption">
                        <h4 class="media-heading"> Baked potato    </h4>
                        <h5>56.5 $</h5>
                        <p> Perfect your spud technique then pile our filling ideas high. </p>
                        <p>
                            <button type="button" class="btn btn-info btn-lg btn-block">来一份 <i class="glyphicon glyphicon-heart"></i></button>
                        </p>
                    </div>
                </div>
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
                            <button class="btn btn-info navr" data-toggle="modal" data-target="#shopchart" info="请选择喜欢的菜">
                                <i class="glyphicon glyphicon-cutlery"></i> 已点6份 ：总计 223￥</button>
                            <a class="navbar-brand" href="#"></a>
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
    <


    div class="modal fade" id="shopchart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>菜名</th>
                                <th>份数</th>
                                <th>价格</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cai Name</td>
                                <td>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                        <div class="input-group">
                                            <div class="input-group-addon btn">-</div>
                                            <input type="number" min="1" max="99" step="1" class="form-control" id="exampleInputAmount" value="1">
                                            <div class="input-group-addon btn">+</div>
                                        </div>
                                    </div>
                                </td>
                                <td>223$</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i> 删除
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Cai Name</td>
                                <td>- 21 +</td>
                                <td>223$</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i> 删除
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Cai Name</td>
                                <td>- 21 +</td>
                                <td>223$</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i> 删除
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Cai Name</td>
                                <td>- 21 +</td>
                                <td>223$</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i> 删除
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Cai Name</td>
                                <td>- 21 +</td>
                                <td>223$</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i> 删除
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Cai Name</td>
                                <td>- 21 +</td>
                                <td>223$</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i> 删除
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Cai Name</td>
                                <td>- 21 +</td>
                                <td>223$</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i> 删除
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Cai Name</td>
                                <td>- 21 +</td>
                                <td>223$</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i> 删除
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Cai Name</td>
                                <td>- 21 +</td>
                                <td>223$</td>
                                <td>
                                    <button type="button" class="btn btn-xs btn-danger">
                                        <i class="glyphicon glyphicon-remove"></i> 删除
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
