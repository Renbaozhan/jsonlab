<?php /* Smarty version Smarty-3.1.3, created on 2017-04-22 11:34:12
         compiled from "/Users/Ren/GitHub/json/bin/protected/views/json/parse.html" */ ?>
<?php /*%%SmartyHeaderCode:28716155258fb3fb4f36199-13222120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '623ba1cca657b00ffd6bb736c828238a7f759b9b' => 
    array (
      0 => '/Users/Ren/GitHub/json/bin/protected/views/json/parse.html',
      1 => 1463196638,
      2 => 'file',
    ),
    '6491452ef3a90c9272e9c47bb7421528493164d1' => 
    array (
      0 => '/Users/Ren/GitHub/json/bin/protected/views/layout.html',
      1 => 1463197114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28716155258fb3fb4f36199-13222120',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_58fb3fb503d62',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb3fb503d62')) {function content_58fb3fb503d62($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>Json在线解析及格式化验证 - Json.cn</title>
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
    
<meta name="keywords" content="json,json在线解析,json格式化,json格式验证,json转xml,xml转json"/>
<meta name="description" content="Json中文网致力于在中国推广Json,并提供相关的Json解析、验证、格式化、压缩、编辑器以及Json与XML相互转换等服务"/>

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


<main class="row-fluid">
    <div class="col-md-5" style="padding:0;">
        <textarea id="json-src" placeholder="在此输入json字符串或XML字符串..."   class="form-control"  style="height:550px;padding:20px;border:0;border-right:solid 1px #ddd;border-bottom:solid 1px #ddd;border-radius:0;resize: none; outline:none;">{&#13"Json解析":"支持格式化高亮折叠",&#13"支持XML转换":"支持XML转换Json,Json转XML",&#13"Json格式验证":"更详细准确的错误信息"</textarea>
    </div>
    <div class="col-md-7" style="padding:0;">
        <div style="padding:10px;font-size:16px;border-bottom:solid 1px #ddd;" class="navi">
            <a href="#" class="tip zip" title="压缩"  data-placement="bottom"><i class="fa fa-database"></i></a>
            <a href="#" class="tip xml" title="转XML"  data-placement="bottom"><i class="fa fa-file-excel-o"></i></a>
            <a href="#" class="tip " style="color:#15b374;cursor:no-drop;" title="染色"  data-placement="bottom"><i class="fa fa-flask"></i></a>
            <a href="#" class="tip clear" title="清空"  data-placement="bottom"><i class="fa fa-trash"></i></a>
            <a href="#" class="tip save" title="保存"  data-placement="bottom"><i class="fa fa-floppy-o"></i></a>
        </div>
        <div id="json-target"  style="height:510px;padding:20px;border-right:solid 1px #ddd;border-bottom:solid 1px #ddd;border-radius:0;resize: none;overflow-y:scroll; outline:none;">
        </div>
        <form id="form-save" method="POST"><input type="hidden" value="" id="txt-content" name="content"></form>
    </div>
    <br style="clear:both;" />
</main>
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.message.js"></script>
<script src="/js/jquery.json.js"></script>
<script src="/js/jquery.xml2json.js"></script>
<script src="/js/jquery.json2xml.js"></script>
<script src="/js/json2.js"></script>
<script src="/js/jsonlint.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript">
var current_json = '';
var current_json_str = '';
var xml_flag = false;
var zip_flag = false;
$('.tip').tooltip();
function init(){
    xml_flag = false;
    zip_flag = false;
    $('.xml').attr('style','color:#999;');
    $('.zip').attr('style','color:#999;');
}
$('#json-src').keyup(function(){
    init();
    var content = $.trim($(this).val());
    var result = '';
    if (content!='') {
        //如果是xml,那么转换为json
        if (content.substr(0,1) === '<' && content.substr(-1,1) === '>') {
            try{
                var json_obj = $.xml2json(content);
                content = JSON.stringify(json_obj);
            }catch(e){
                result = '解析错误：<span style="color: #f1592a;font-weight:bold;">' + e.message + '</span>';
                current_json_str = result;
                $('#json-target').html(result);
                return false;
            }

        }
        try{
            current_json = jsonlint.parse(content);
            current_json_str = JSON.stringify(current_json);
            //current_json = JSON.parse(content);
            result = new JSONFormat(content,4).toString();
        }catch(e){
            result = '<span style="color: #f1592a;font-weight:bold;">' + e + '</span>';
            current_json_str = result;
        }

        $('#json-target').html(result);
    }else{
        $('#json-target').html('');
    }

});
$('.xml').click(function(){
    if (xml_flag) {
        $('#json-src').keyup();
    }else{
        var result = $.json2xml(current_json);
        $('#json-target').html('<textarea style="width:100%;height:100%;border:0;resize:none;">'+result+'</textarea>');
        xml_flag = true;
        $(this).attr('style','color:#15b374;');
    }

});
$('.zip').click(function(){
    if (zip_flag) {
        $('#json-src').keyup();
    }else{
        $('#json-target').html(current_json_str);
        zip_flag = true;
        $(this).attr('style','color:#15b374;');
    }

});
$('.clear').click(function(){
     $('#json-src').val('');
     $('#json-target').html('');
});
$('.save').click(function(){
    var content = JSON.stringify(current_json);
    $('#txt-content').val(content);
    $("#form-save").submit();
});
$('#json-src').keyup();
</script>


<?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html>
<?php }} ?>