<?php /* Smarty version Smarty-3.1.3, created on 2017-06-12 15:01:29
         compiled from "/Users/Ren/GitHub/jsonlab/bin/protected/views/json/api.html" */ ?>
<?php /*%%SmartyHeaderCode:74269236593eacc9e5bd77-62416000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02a179d9c76c4ba8e2f95162aedbaf4014f84ede' => 
    array (
      0 => '/Users/Ren/GitHub/jsonlab/bin/protected/views/json/api.html',
      1 => 1497279620,
      2 => 'file',
    ),
    'de59090b7b313e3e4dc620a8b99917d6edbdcfb9' => 
    array (
      0 => '/Users/Ren/GitHub/jsonlab/bin/protected/views/layout.html',
      1 => 1497279620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74269236593eacc9e5bd77-62416000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_593eacc9ea202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593eacc9ea202')) {function content_593eacc9ea202($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>API商店 - Json.cn</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta http-equiv="Cache-Control" content="max-age=7200" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="baidu-site-verification" content="mlJsiTNxiD" />
    <meta name="google-site-verification" content="CPogK9tQWL5XIDF9F9x_tJyy1HtpDI8Rv6owOEIkUvM" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <meta name="author" content="json.cn" />
    
<meta name="keywords" content="json接口,json api,接口大全, api store, api市场"/>
<meta name="description" content="为开发者提供各类json形式的常用接口及服务，如ip定位、whois查询等"/>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/base.css" rel="stylesheet">
    <style></style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Favicons -->
</head>
<body style="over-flow:hidden;">
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<style>
.item{
    cursor: pointer;
}
.item:hover{
    box-shadow: 0 0 1px #ddd;
}
.item-box li a{
    color:#555;
}
#item-title{
    color: #555;
    font-weight: bold;
    text-shadow: 0 0 1px #ccc;
}
#item-note{
    padding: 10px;line-height: 30px;
    font-size: 12px;
}
#item-url{
    color: #29abe2;
}
.modal-backdrop {
  background-color: #fff;
}
.modal-header{
    box-shadow: 0 0px 1px #E5EBEE;
}
.modal-content{
    border: solid 1px #ccc;
    border-radius: 2px;
    box-shadow: 0 0 1px #ccc;
}
.label-title{
    font-weight: bold;
}
.item-wiki{
    padding: 10px;
    line-height: 30px;
    margin-bottom: 10px;
}
.format-json{
    padding: 10px;
    max-height: 300px;
    overflow-y: scroll;
}


</style>
<main  style="padding:0px 40px;background-color:#f9f9f9;">
    <div style="background-color:#fff;padding:10px;
    box-shadow:0 0px 1px #ccc;min-height:550px;" class="row" id="data-container">
    </div>

</main>
<!-- Modal -->
<div class="modal fade item-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >&times;</span>
                </button>
                <h5 class="modal-title" id="item-title">接口内容</h5>
            </div>
            <div class="modal-body">
                <div class="row item-wiki">

                    <div class="col-md-6">
                        <span class="label-title">请求方式: </span>
                        <span id="item-action"></span>
                    </div>
                    <div class="col-md-6 ">
                        <span class="label-title">调用价格: </span>
                        <span id="item-price" class=" red"></span>
                    </div>
                    <div class="col-md-6">
                        <span class="label-title">公共API KEY: </span>
                        <code id="item-key">public</code>
                    </div>
                    <div class="col-md-6">
                        <span class="label-title">公共KEY访问: </span>
                        <span id="item-free-call" class="red"></span>
                    </div>

                    <div class="col-md-12">
                        <span class="label-title">接口地址: </span>
                        <a id="item-url" class="blue" target="_blank"></a>
                    </div>
                </div>
                <ul class="nav nav-tabs" role="tablist" style="font-size:12px;">
                    <li role="presentation"  class="active">
                        <a href="#note" aria-controls="note" role="tab" data-toggle="tab">使用说明</a>
                    </li>
                    <li role="presentation">
                        <a href="#params" aria-controls="params" role="tab" data-toggle="tab">输入参数</a>
                    </li>
                    <li role="presentation" >
                        <a href="#returns" aria-controls="profile" role="tab" data-toggle="tab">返回结果</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane  active" id="note">
                        <div id="item-note">

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="params">
                        <div id="item-params" class="format-json">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="returns">
                        <div id="item-returns" class="format-json">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.json.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jsonlint.js"></script>
<script type="text/javascript">
var items = [];
loadData();
function loadData(){
    $.get("/service/getdata?page_num=1&keyword=", function(response){
            try{
                items = JSON.parse(response).data;
                //sum_page = JSON.parse(result).sum_page;
                //$('#sum-page').html(sum_page);
                $('#data-container').html('');
                var inner_html= '';
                for (var i = 0; i < items.length; i++) {
                    inner_html += '<div class="col-md-3 item" data-toggle="modal" data-target=".item-box" onclick="loadItem('+i+')">';
                    inner_html += '<div class="row" style="padding:20px;">';
                    inner_html += '<div  class="col-md-4" style="line-height:30px;color:#888;text-align:center;">';
                    inner_html += '<div><img src="/image/' + items[i].logo +'" width="56px"></div></div>';
                    inner_html += '<div  class="col-md-7" style="line-height:25px;">';
                    inner_html += '<div class="content">';
                    inner_html += '<div>'+items[i].name+'</div>';
                    inner_html += '<div>价格：<span class="label label-success">免费</span></div>';
                    inner_html += '<div>开发者：'+items[i].developer+'</div>';
                    inner_html += '</div></div></div></div>';
                }
                $('#data-container').html(inner_html);
            }catch(e){
                ;
            }
        }
    );


}
function loadItem(index){
    var item = items[index];
    $("#item-developer").html(item.developer);
    $("#item-developer").attr("href",item.developer_url);
    $("#item-title").html(item.name);
    $("#item-note").html(item.note);
    $("#item-url").html(item.url);
    $("#item-url").attr("href",item.url);
    $("#item-action").html(item.action);
    if(item.price == 0){
        $("#item-price").html('<span class="label label-success">免费</span>');
    }else{
        $("#item-price").html(item.price+"￥/次");
    }
    $("#item-limit").html("<"+item.limit+"次/秒");
    $("#item-free-call").html(item.free_call+"次/天");
    $("#item-params").html(parseJson(item.params));
    $("#item-returns").html(parseJson(item.returns));
};
function parseJson(content){
    var result = "默认内容";
    try{
        current_json = jsonlint.parse(content);
        current_json_str = JSON.stringify(current_json);
        //current_json = JSON.parse(content);
        result = new JSONFormat(content,4).toString();
    }catch(e){
        result = '<span style="color: #f1592a;font-weight:bold;">' + e + '</span>';
    }
    return result;
};

</script>

<?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html>
<?php }} ?>