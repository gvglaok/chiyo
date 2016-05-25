$(function() {

    $('#side-menu').metisMenu();

});

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


function addCN() {
    $.ajax({
            url: 'menuclass/addclass',
            type: 'post',
            dataType: 'html',
            data: { cn: $("#newClass").val()}
        })
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function(mes) {
            console.log("complete");
            alert(mes);
        });


};

function printOrder(poid) {
  $.ajax({
    url: '/chiyo/admin/timeorder/changeStatus/',
    type: 'post',
    dataType: 'json',
    data: {oid: poid},
    success:callb
  });
}

function callb(mes) {
  var sta = mes.res;
  if(sta=='ok'){
    var poid='#poid'+mes.oid;
    $(poid).remove();
  } else {
    alert('底单处理失败，请稍后重试');
  }

}

function doPrint(oid) {
    var pcss='<style>body{font-family:"黑体"}.panel-heading{font-size:10px;}.list-group{font-size:10px;padding:0;}.list-group li{font-size:10px;list-style:none;}.panel-footer{display:none}.tp{font-weight:bold;margin-top:10px;}.badge{float:right}.mnum{margin-right:5px;float:right;font-weight:bold;}</style>';

    var pid='#order'+oid;
    var Content = $(pid).html()+pcss;
    
    var nw = window.open('', '', 'left=0,top=0,width=260,height=600,toolbar=0,scrollbars=0,status=0');

    nw.document.write(Content);
    nw.document.close();
    nw.focus();
    nw.print();
    nw.close();

    printOrder(oid);

}


