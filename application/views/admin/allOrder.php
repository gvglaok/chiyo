
       
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
                                <th>操作</th>
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
                                <td>
                                <button id="om_<?php echo $key['oID'];?>" 
                                type="button" class="btn btn-info btn-sm" oid="<?php echo $key['oID'];?>">详情</button></td>
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
    <div class="modal fade" id="order">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">台号：<span id="otn"></span></h4>
                </div>
                
                   <ul id="mlist" class="list-group">
                      
                      
                    </ul>
                
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button onclick="orderPrint()" type="button" class="btn btn-primary">打印</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>skin/admin/js/bootstrap.min.js"></script>
</body>

</html>
