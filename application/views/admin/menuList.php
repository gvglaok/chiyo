
        <div id="page-wrapper">
            <div class="graphs">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"> 菜品列表 </h3>
                            <a href="<?php echo base_url();?>admin/menuadd" type="button" class="btn btn-primary pull-right m10">
                                <i class="glyphicon glyphicon-plus"></i> 添加菜品</a>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>图片</th>
                                    <th>名称</th>
                                    <th>价格</th>
                                    <th>简介</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($res as $key): ?>
                                <tr id="tr_<?php echo $key['mID'] ?>">
                                    <td><img id="mimg<?php echo $key['mID'] ?>" class="menuImg" 
                                    src="<?php 
                                    echo base_url(); 
                                    echo $key['mImage']==''? "skin/admin/images/load.gif" : 'uploads/'.$key['mImage'] ; ?>" ></td>

                                    <td id="mname<?php echo $key['mID'] ?>"><?php echo $key['mName'] ?></td>

                                    <td><i id="mprice<?php echo $key['mID'] ?>"><?php echo $key['mPrice'] ?></i>￥</td>

                                    <td id="minfo<?php echo $key['mID'] ?>">  <?php echo $key['mInfo'] ?> </td>

                                    <td>
                                        <button type="button" class="btn btn-info m15" 
                                        id="ud_<?php echo $key['mID'] ?>" info="<?php echo $key['mID'] ?>" ms="<?php echo $key['mStatus'] ?>">
                                        <?php echo $key['mStatus']==1 ? "下架" : "上架"; ?></button>
                                        <button id="mc_<?php echo $key['mID'] ?>" 
                                        info="<?php echo $key['mID'] ?>" cid="<?php echo $key['cID'] ?>"
                                        data-toggle="modal" href='#mchange' 
                                        type="button" class="btn btn-info m15">修改</button>
                                        <button id="mdele_<?php echo $key['mID'] ?>" info="<?php echo $key['mID'] ?>" 
                                        type="button" class="btn btn-danger">删除</button>
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
                <br>
                <br>
                <br>
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
                <div class="modal-body">
                    <!-- enctype="multipart/form-data" -->
                    <form id="moMenu" method="post" action="/chiyo/admin/menulist/menuUpdata/">
                        <a href="#" class="thumbnail"><img id="moimg" src="" alt="" width="250px"></a>
                        <div class="input-group">
                            <span class="input-group-addon">图片</span>
                            <input name="mimg" type="file" class="form-control" placeholder="" data-toggle="tooltip" data-placement="bottom" title="无需修改图片，请不要点击选图">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">菜名</span>
                            <input id="mname" name="mname" required="true" type="text" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">类别</span>
                            <!-- <input id="mname" name="mname" required="true" type="text" class="form-control" placeholder=""> -->
                            <select id="cID" name="cID" class="form-control" required="required">
                                <?php foreach ($mclass as $key): ?>
                                    <option value="<?php echo $key['cID'] ?>"><?php echo $key['cName'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">价格</span>
                            <input id="mmoney" name="mmoney" type="number" class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">简介</span>
                            <input id="minfo" name="minfo" type="text" class="form-control" placeholder="">
                        </div>
                        <input id="mid" name="mid" type="hidden">
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
