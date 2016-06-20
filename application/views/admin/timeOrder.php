
       
        <div id="page-wrapper">
            <div class="graphs">
           
                <?php $num=0;?>
                <?php foreach($res as $key): ?>
                <?php 
                if ($num==0) {
                    echo '<div class="row">';
                }

                 ?>
                <div id="poid<?php echo $key['oID'];?>" class="col-xs-12 col-sm-6 col-md-6 col-lg-4 pull-left">
                    
                	<div id="order<?php echo $key['oID'];?>" class="panel panel-warning">
                        
						<div class="panel-heading">
							<h3 class="panel-title">台号：<?php echo $key['oTableNumber'];?></h3>	
						</div>
						
						<ul class="list-group">
                            <?php foreach($key['oMidArr'] as $menu): ?>
						    <li class="list-group-item">
                                <?php echo $menu['mName'];?>
                                <span class="badge"><?php echo $menu['mPrice'];?>￥/份</span>
                               <?php 
                                if ($key['num'][$menu['mID']]>1 ) {
                                  echo '<span class="mnum">'.$key['num'][$menu['mID']].'份</span>';
                                } 
                                ?> 
                            </li>
						    <?php endforeach; ?>
						    <li class="list-group-item tp">总计：<?php echo $key['oMenuNumber']; ?>份 | 总价：<?php echo $key['oMoney']; ?>￥</li>
						</ul>

						<div class="panel-footer">
                            <button type="button" 
                            onClick="doPrint(<?php echo $key['oID'];?>)" 
                            class="btn btn-info">打印
                            </button>
                        </div>

                         

					</div>
                    <!--endprint-->
                </div>
                <?php 
                $num++;
                if ($num==3) {
                    echo '</div>';
                    $num=0;
                }
                
                 ?>
                <?php endforeach; ?>
				
                
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
