
        <div id="page-wrapper">
            <div class="graphs">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"> 添加菜品 </h3>
                        </div>
                        <div class="panel-body">   
                            <form class="form-inline" action="<?php echo base_url() ?>admin/menuAdd/addMenu" method="post" enctype="multipart/form-data" >
                                <div class="form-group formm">
                                    <label for="mName">菜名：</label>
                                    <input type="text" class="form-control" id="mName" name="mName" required="required">
                                </div>
                                <br>
                                <div class="form-group formm">
                                    <label for="cID">所属类别：</label>
                                    <select id="cID" name="cID" class="form-control" required="required">
                                        <?php $i=1; ?>
                                        <?php foreach ($ms as $key): ?>
                                        <option 
                                            <?php 
                                            if($i==1)
                                            {echo 'selected = "selected"';} 
                                            $i++;
                                            ?>  
                                            value="<?php echo $key['cID']?>">
                                            <?php echo $key['cName']?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group formm">
                                    <label for="mPrice">价格：</label>
                                    <input type="number" class="form-control" id="mPrice" name="mPrice" required="required">
                                </div>
                                <br>
                                <div class="form-group formm">
                                    <label for="mInfo">简介：</label>
                                    <textarea class="form-control" id="mInfo" name="mInfo" placeholder=""></textarea>
                                </div>
                                <br>
                                <div class="form-group formm">
                                    <label for="mImage">图片：</label>
                                    <input type="file" class="form-control" id="mImage" name="mImage" placeholder="">
                                </div>
                                <br>
                                <button type="reset" class="btn btn-default">重置</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-info">提交</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php
                        if (isset($mes)) {
                            echo '<div class="alert alert-'.$mes['type'].' alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                                  <strong>Warning!</strong>
                                  '.$mes['info'].' 
                                  </div>';
                        }
                    ?>
                </div>

                <div class="clearfix"></div>
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
