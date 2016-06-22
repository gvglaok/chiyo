<div id="page-wrapper">
    <div class="graphs">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div style="width:75%;">
                <canvas id="canvas"></canvas>
            </div>
            <br>
            <div style="width:75%;">
                <canvas id="line"></canvas>
            </div>
            <br>
            <br>
            <!-- <button id="randomizeData">取随机数值</button>
            <button id="changeDataObject">更改显示样式</button>
            <button id="addDataset">添加数据 集</button>
            <button id="removeDataset">删除数据 集</button>
            <button id="addData">添加数据</button>
            <button id="removeData">删除数据</button> -->
            <script>
            var WEEK = ["周一", "周二", "周三", "周四", "周五", "周六", "周日"];

            var randomScalingFactor = function() {
                return Math.round(Math.random() * 60000);
                //return 0;
            };
            var randomColorFactor = function() {
                return Math.round(Math.random() * 255);
            };
            var randomColor = function(opacity) {
                return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
            };

            var config = {
                type: 'bar',
                data: {
                    labels: ["周一", "周二", "周三", "周四", "周五", "周六", "周日"],
                    datasets: [{
                        label: "日营收额",
                        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                        fill: false,
                        borderDash: [5, 5],
                    }, {
                        hidden: true,
                        label: '隐藏数据集',
                        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                        fill: false,
                        
                    }, {
                        label: "第二条数据",
                        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                        fill: false,
                        borderDash: [5, 5],
                    }]
                },
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: '周报表'
                    },
                    tooltips: {
                        mode: 'label',
                        callbacks: {
                            // beforeTitle: function() {
                            //     return '...beforeTitle';
                            // },
                            // afterTitle: function() {
                            //     return '...afterTitle';
                            // },
                            // beforeBody: function() {
                            //     return '...beforeBody';
                            // },
                            // afterBody: function() {
                            //     return '...afterBody';
                            // },
                            // beforeFooter: function() {
                            //     return '...beforeFooter';
                            // },
                            // footer: function() {
                            //     return 'Footer';
                            // },
                            // afterFooter: function() {
                            //     return '...afterFooter';
                            // },
                        }
                    },
                    hover: {
                        mode: 'dataset'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                show: true,
                                labelString: 'WEEK'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                show: true,
                                labelString: 'Value'
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 90000,
                            }
                        }]
                    }
                }
            };

            $.each(config.data.datasets, function(i, dataset) {
                dataset.borderColor = randomColor(0.4);
                dataset.backgroundColor = randomColor(0.5);
                dataset.pointBorderColor = randomColor(0.7);
                dataset.pointBackgroundColor = randomColor(0.5);
                dataset.pointBorderWidth = 1;
            });

            

            var lineChartData = {
                type:"line",
                data:{
                    labels: ["周一", "周二", "周三", "周四", "周五", "周六", "周日"],
                    datasets: [{
                        label:"数据一",
                        borderColor:"rgba(75,192,192,1)",
                        pointBorderColor: "#00aced",
                        backgroundColor: "rgba(75,192,192,0.4)",
                        pointBackgroundColor: "rgba(75,192,192,0.4)",
                        pointBorderWidth:0.2,
                        data: [65, 59, 90, 81, 56, 55, 40]
                    }, {
                        label:"数据二",
                        borderColor:"rgba(190,32,235,1)",
                        pointBorderColor: "#00aced",
                        backgroundColor: "rgba(190,32,235,0.4)",
                        pointBackgroundColor: "rgba(190,32,235,0.4)",
                        pointBorderWidth:0.5,
                        data: [28, 48, 40, 19, 96, 27, 100]
                    }]
                },
                options:{
                    responsive: true,
                    title: {
                        display: true,
                        text: '测试报表'
                    },
                    tooltips: {
                        mode: 'label',
                        callbacks: {}
                    },
                    hover: {
                        mode: 'dataset'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                show: true
                                labelString: 'x Value'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                show: true,
                                labelString: 'y Value'
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 100,
                            }
                        }]
                    }
                }
                

            };

            window.onload = function() {
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myLine = new Chart(ctx, config);
                var getc=document.getElementById("line").getContext("2d");
                window.myline =new Chart(getc,lineChartData);
            };


            /*数据操作 方法*/
            /*$('#randomizeData').click(function() {
                $.each(config.data.datasets, function(i, dataset) {
                    dataset.data = dataset.data.map(function() {
                        return randomScalingFactor();
                    });

                });

                window.myLine.update();
            });

            $('#changeDataObject').click(function() {
                config.data = {
                    labels: ["周一", "周二", "周三", "周四", "周五", "周六", "周日"],
                    datasets: [{
                        label: "第一条数据",
                        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                        fill: false,
                    }, {
                        label: "第二条数据",
                        fill: false,
                        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                    }]
                };

                $.each(config.data.datasets, function(i, dataset) {
                    dataset.borderColor = randomColor(0.4);
                    dataset.backgroundColor = randomColor(0.5);
                    dataset.pointBorderColor = randomColor(0.7);
                    dataset.pointBackgroundColor = randomColor(0.5);
                    dataset.pointBorderWidth = 1;
                });

                // Update the chart
                window.myLine.update();
            });

            $('#addDataset').click(function() {
                var newDataset = {
                    label: '数据 ' + config.data.datasets.length,
                    borderColor: randomColor(0.4),
                    backgroundColor: randomColor(0.5),
                    pointBorderColor: randomColor(0.7),
                    pointBackgroundColor: randomColor(0.5),
                    pointBorderWidth: 1,
                    data: [],
                    fill: false,
                };

                for (var index = 0; index < config.data.labels.length; ++index) {
                    newDataset.data.push(randomScalingFactor());
                }

                config.data.datasets.push(newDataset);
                window.myLine.update();
            });

            $('#addData').click(function() {
                if (config.data.datasets.length > 0) {
                    var month = WEEK[config.data.labels.length % WEEK.length];
                    config.data.labels.push(month);

                    $.each(config.data.datasets, function(i, dataset) {
                        dataset.data.push(randomScalingFactor());
                    });

                    window.myLine.update();
                }
            });

            $('#removeDataset').click(function() {
                config.data.datasets.splice(0, 1);
                window.myLine.update();
            });

            $('#removeData').click(function() {
                config.data.labels.splice(-1, 1); // remove the label first

                config.data.datasets.forEach(function(dataset, datasetIndex) {
                    dataset.data.pop();
                });

                window.myLine.update();
            });*/


            </script>
        </div>
        <div class="clearfix"></div>
        <br><br><br>
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
