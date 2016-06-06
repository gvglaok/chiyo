//后台操作js
//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});


$(function() {
    //bs3 toolTip reset
    $('[data-toggle="tooltip"]').tooltip();

    $('#side-menu').metisMenu();

    $("button[id^='dele']").click(function() {
        var isTrue = confirm("确认删除！");
        if (isTrue) {
            var cid = $(this).attr('info');
            classDele(cid);
        }
    });

    //修改类名
    $("button[id^='ud']").click(function() {
        var cid = $(this).attr('info');
        var nid = "#mName" + cid;
        var cname = $(nid).text();
        chageName(cid, cname);
    });

    //修改菜品
    $("button[id^='mc']").click(function() {
        var mid = $(this).attr('info');
        var cid = $(this).attr('cid');
        var mimg = $("#mimg" + mid).attr('src');
        var mname = $("#mname" + mid).text();
        var mprice = $("#mprice" + mid).text();
        var minfo = $("#minfo" + mid).text();
        $('#moimg').attr('src', mimg);
        $("#cID").find('option[value=' + cid + ']').attr('selected', 'true');
        $("#mname").val(mname);
        $("#mmoney").val(mprice);
        $("#minfo").val(minfo);
        $("#mid").val(mid);
    });

    //menu delete
    $("button[id^='mdele_']").click(function() {
        var mid = $(this).attr('info');

        var mimg = $("#mimg" + mid).attr('src');

        var isTrue = confirm("确认删除！");
        if (isTrue) {
            menuDele(mid, mimg);
        }
    });

    //menu status change
    $("button[id^='ud_']").click(function() {
        var mid = $(this).attr('info');
        var ms = $(this).attr('ms');
        msChange(mid, ms);
    });

    //get orderMenu
    $("button[id^='om_']").click(function(){
        var oid=$(this).attr('oid');
        $("#mlist").empty();
        $.ajax({
            url: base_url+'admin/allorder/getOMenu',
            type: 'POST',
            dataType: 'json',
            data: {poid: oid},
        })
        .done(function(res) {
            $('#order').modal('show');
            $.each(res.oma, function(index, val) {
                var mnum='';
                if (val.num>1) {
                    mnum = val.num + ' 份';
                }
                $("#mlist").prepend('<li class="list-group-item">'+
                    val.mName+' <span class="badge">' + 
                    val.mPrice+ ' ￥</span><span class="mnum">'+
                    mnum+ '</span></li>');
            });
            var total='<li class="list-group-item tp">菜品：<span id="omn">'+res.mn+'</span>份  |  总价：<span id="omm">'+res.mm+'</span>￥ </li>';
            $("#mlist").append(total);
            $("#mlist").prepend('<h3 class="bhide ">台号：'+res.otn+'</h3>');
            $("#otn").text(res.otn);
            
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
    });

});




//cy js-keven 2016-5-10

var base_url = "/chiyo/";


//get orderMenu
function OMenu() {
    
}


//menu status change
function msChange(mid, ms) {
    $.post(
        base_url + 'admin/menulist/udms', { pmid: mid, pss: ms },
        function(data) {
            if (String(data)=='success') {
                if (ms == 0) {
                    $("#ud_" + mid).attr('ms', '1');
                    $("#ud_" + mid).text('下架');
                    alert('上架成功');
                } else {
                    $("#ud_" + mid).attr('ms', '0');
                    $("#ud_" + mid).text('上架');
                    alert('下架成功');
                }
            }
        });
}


//添加菜品类
function addCN() {
    $.ajax({
            url: 'menuclass/addclass',
            type: 'post',
            dataType: 'html',
            data: { cn: $("#newClass").val() }
        })
        .done(function(mes) {
            if (String(mes) == "success") {
                alert("添加成功");
                window.location.reload();
            }
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });


};

function printOrder(poid) {
    $.ajax({
        url: base_url + 'admin/timeorder/changeStatus/',
        type: 'post',
        dataType: 'json',
        data: { oid: poid },
        success: callb
    });
}

function callb(mes) {
    var sta = mes.res;
    if (sta == 'ok') {
        var poid = '#poid' + mes.oid;
        $(poid).remove();
    } else {
        alert('底单处理失败，请稍后重试');
    }

}

function doPrint(oid) {
    var pcss = '<style>body{font-family:"黑体"}.panel-heading{font-size:10px;}.list-group{font-size:10px;padding:0;}.list-group li{font-size:10px;list-style:none;}.panel-footer{display:none}.tp{font-weight:bold;margin-top:10px;}.badge{float:right}.mnum{margin-right:5px;float:right;font-weight:bold;}</style>';

    var pid = '#order' + oid;
    var Content = $(pid).html() + pcss;

    var nw = window.open('', '', 'left=0,top=0,width=280,height=600,toolbar=0,scrollbars=0,status=0');

    nw.document.write(Content);
    nw.document.close();
    nw.focus();
    nw.print();
    nw.close();

    printOrder(oid);

}

function orderPrint() {
    $('#order').modal('hide');
    var pcss = '<style>body{font-family:"黑体";font-size:10px;}li{font-size:10px;list-style:none;}.tp{font-weight:bold;margin-top:10px;}.badge{float:right}.mnum{margin-right:5px;float:right;font-weight:bold;}</style>';

    var Content = $("#mlist").html() + pcss;

    var nw = window.open('', '', 'left=0,top=0,width=300,height=600,toolbar=0,scrollbars=0,status=0');

    nw.document.write(Content);
    nw.document.close();
    nw.focus();
    nw.print();
    nw.close();

}



function classDele(pcid) {
    $.ajax({
            url: base_url + 'admin/menuclass/delec',
            type: 'post',
            dataType: 'html',
            data: { cid: pcid }
        })
        .done(function(mes) {
            if (String(mes) == "success") {
                var tcid = '#c' + pcid;
                $(tcid).remove();
            } else {
                alert(mes + ': 品类中有菜品 不允许删除！');
            }
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
}

function chageName(cid, cname) {
    $("#mClassName").attr({
        info: cid,
        value: cname
    });
}

// modal修改菜名
function doChange() {
    var cname = $("#mClassName").val();
    //去空格
    cname = cname.replace(/^\s+|\s+$/g, "");
    if (cname == "") {
        alert("请填写菜类目！");
        return false;
    }
    var cid = $("#mClassName").attr('info');
    $.ajax({
            url: base_url + '/admin/menuclass/udClass',
            type: 'post',
            dataType: 'html',
            data: { pcid: cid, pcname: cname }
        })
        .done(function(mes) {
            if (String(mes) == "success") {
                var mnID = "#mName" + cid;
                $(mnID).text(cname);
            } else {
                alert(mes + ": 修改失败！");
            }
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });

    $.ajax({
            url: '/path/to/file',
            type: 'default GET (Other values: POST)',
            dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
            data: { param1: 'value1' },
        })
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });

    $('#changMname').modal('hide');
}


//jquery post file ok 
function menuChange() {
    $('#moMenu').ajaxSubmit(function() {
        alert("菜单修改成功");
        $('#mchange').modal('hide');
    });
}

function menuDele(pmid, pimgName) {
    $.ajax({
            url: base_url + 'admin/menulist/menuDele',
            type: 'post',
            data: { mid: pmid, imgName: pimgName }
        })
        .done(function(mes) {
            if (String(mes) == "success") {
                $("#tr_" + pmid).remove();
                alert("删除成功");
            }
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });

}
