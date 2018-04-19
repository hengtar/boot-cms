<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:109:"C:\Users\Administrator\Desktop\Project\boot-cms-test\public/../application/admin\view\member\update_cate.html";i:1505896892;s:102:"C:\Users\Administrator\Desktop\Project\boot-cms-test\public/../application/admin\view\public\head.html";i:1505897340;s:101:"C:\Users\Administrator\Desktop\Project\boot-cms-test\public/../application/admin\view\public\css.html";i:1506062714;s:100:"C:\Users\Administrator\Desktop\Project\boot-cms-test\public/../application/admin\view\public\js.html";i:1506062772;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title>Boot-cms 后台管理</title>
<!--[if lt IE 8]>
<meta http-equiv="refresh" content="0;ie.html" />
<![endif]-->
    <link href="/static/admin/css/bootstrap.min.css?laozhang=http://www.jh12.cn" rel="stylesheet">

<link href="/static/admin/css/font-awesome.min.css?laozhang=http://www.jh12.cn" rel="stylesheet">

<link href="/static/admin/css/animate.min.css?laozhang=http://www.jh12.cn" rel="stylesheet">

<link href="/static/admin/css/style.min.css?laozhang=http://www.jh12.cn" rel="stylesheet">

<style type="text/css">
.lzCenter-th th{
text-align: center
}
.lzCenter-td td{
text-align: center
}
</style>

</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>修改类型
                    </h5>
                    <div class="ibox-tools">
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form id="insertCate" method="post" class="form-horizontal" action="<?php echo url('Member/update_cate'); ?>">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">名称：</label>

                            <div class="col-sm-4">
                                <input type="text" name="name" id="name" class="form-control" placeholder="输入类型名称" value="<?php echo $cate['name']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">排序：</label>
                            <div class="col-sm-4">
                                <input type="text" name="order" id="order" class="form-control" placeholder="输入1-100值" value="<?php echo $cate['order']; ?>">
                                <input type="hidden" name="id" value="<?php echo $cate['id']; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-2">
                                <button class="btn btn-success"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" href="javascript:history.go(-1)" type="submit"><i class="fa fa-close"></i> 返回</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/static/admin/js/jquery.min.js?laozhang=http://www.jh12.cn"></script>

<script src="/static/admin/js/bootstrap.min.js?laozhang=http://www.jh12.cn"></script>

<script src="/static/admin/js/plugins/metisMenu/jquery.metisMenu.js?laozhang=http://www.jh12.cn"></script>

<script src="/static/admin/js/plugins/slimscroll/jquery.slimscroll.min.js?laozhang=http://www.jh12.cn"></script>

<script src="/static/admin/js/plugins/layer/layer.min.js?laozhang=http://www.jh12.cn"></script>

<script src="/static/admin/js/hplus.min.js?laozhang=http://www.jh12.cn"></script>

<script type="text/javascript" src="/static/admin/js/contabs.min.js?laozhang=http://www.jh12.cn"></script>

<script src="/static/admin/js/plugins/pace/pace.min.js?laozhang=http://www.jh12.cn"></script>

<script src="/static/admin/js/content.min.js?laozhang=http://www.jh12.cn"></script>

<script src="/static/admin/js/plugins/chosen/chosen.jquery.js?laozhang=http://www.jh12.cn"></script>

<script src="/static/admin/js/plugins/iCheck/icheck.min.js?laozhang=http://www.jh12.cn"></script>

<!--加载jq + layer + jqFrom -->

<script src="/static/layer/jquery.form.js"></script>

<script src="/static/layer/layer.js"></script>

<script>
    $(function(){
        //定义opt
        var opt={
            beforeSubmit: insertBefor,
            success: insertOk,
            dataType: 'json',
            timeout: 5000
        };
        //ajax传输
        $('#insertCate').ajaxForm(opt);

        function insertBefor(){
           var name =  $('#name').val();
           if (name == ''){
               layer.msg('类型名称不能为空',{icon:5});
               return false;
           }

            var order =  $('#order').val();
            if (order == ''){
                layer.msg('类型排序不能为空',{icon:5});
                return false;
            }
        }
        function insertOk(data){
                if (data.pass == 1){
                    layer.msg(data.msg, {icon: 6,time:1500,shade: 0.1}, function(index){
                        window.location.href="<?php echo url('Member/list_cate'); ?>";
                    });
                }else{
                    layer.msg(layer.msg,{icon:5});
                }
        }

    });
</script>
<script>
    var ue = UE.getEditor('container');
</script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>

</body>
</html>