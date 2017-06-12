<?php /* Smarty version Smarty-3.1.3, created on 2017-04-22 15:56:13
         compiled from "/Users/Ren/GitHub/api/bin/protected/views/json/component.html" */ ?>
<?php /*%%SmartyHeaderCode:209725807158fb7d1d47e2b7-60000033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bdc687a244974c3cb4e3d2414f2745c9c117e8e' => 
    array (
      0 => '/Users/Ren/GitHub/api/bin/protected/views/json/component.html',
      1 => 1492861589,
      2 => 'file',
    ),
    'b1f7a019f52b417aec8bcaa1fb03585d110854a4' => 
    array (
      0 => '/Users/Ren/GitHub/api/bin/protected/views/layout.html',
      1 => 1492861589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209725807158fb7d1d47e2b7-60000033',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_58fb7d1d4b6d8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb7d1d4b6d8')) {function content_58fb7d1d4b6d8($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>Json常用组件 - Json.cn</title>
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
    
<meta name="keywords" content="jsonveiw,xml2json.js,json2xml.js"/>
<meta name="description" content="提供jsonveiw,xml2json.js,json2xml.js等json相关常用组件"/>

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


<main class="row-fluid" style="padding:30px 80px;">
    <h4 style="margin:20px;">Json常用组件</h4>
    <div  style="padding:30px;margin:10px;line-height:30px;border-left:solid 1px #ddd;border:solid 1px #ddd;border-radius:5px;">
        <div style="padding:10px;">
            <h4>Json2.js</h4>
            <div class="split"></div>
            <div class="brief">
                开发者：json官网:<a href="http://www.json.org" target="_blank">http://www.json.org/</a>。
            </div>
            <div class="brief">
                适用环境：用于在不支持JSON对象的浏览器（通常是国内使用IE内核的第三方浏览器）下使用。json2.js提供了json的序列化和反序列化方法，可以将一个json对象转换成json字符串，也可以将一个json字符串转换成一个json对象
            </div>
            <div class="brief">
                <h5>下载地址：</h5>
                <a href="http://json.cn/download/json2.js" target="_blank">http://json.cn/download/json2.js</a>。
            </div>
            <div class="brief">
                <h5>安装部署： </h5><pre><code><xmp><script type="text/javascript" src="json2.js"></script> </xmp></code></pre>
            </div>
            <div class="brief">
                <h5>序列化,即Json对象转String：</h5>

                <div style="border:dashed 1px #ddd;border-radius:5px;padding:10px;">
                var jsonObj = { id: '01', name: 'Tom' };<br/>
                JSON.stringify(jsonObj);

                </div>
                <h5>反序列化,即String转Json对象:</h5>

                <div style="border:dashed 1px #ddd;border-radius:5px;padding:10px;">

                var jsonString = "{ id: '01', name: 'Tom' }";<br/>
                JSON.parse(jsonString);
                </div>
            </div>
        </div>
    </div>
    <div  style="padding:30px;margin:10px;line-height:30px;border-left:solid 1px #ddd;border:solid 1px #ddd;border-radius:5px;">
        <div style="padding:10px;">
            <h4>jquery.json2xml.js</h4>
            <div class="split"></div>
            <div class="brief">
                开发者：Micha Korecki, <a href="http://www.michalkorecki.com" target="_blank">http://www.michalkorecki.com/</a>。
            </div>
            <div class="brief">
                适用环境：用于Json对象转换为XML字符串。可以将一个json对象转换成XML字符串。
            </div>
            <div class="brief">
                <h5>下载地址：</h5>
                <a href="http://json.cn/download/jquery.json2xml.js" target="_blank">http://json.cn/download/jquery.json2xml.js</a>。
            </div>
            <div class="brief">
                <h5>安装部署： </h5><pre><code><xmp><script type="text/javascript" src="jquery.json2xml.js"></script> </xmp></code></pre>
            </div>
            <div class="brief">
                <h5>Json转XML：</h5>

                <div style="border:dashed 1px #ddd;border-radius:5px;padding:10px;">
                var xml_content = $.json2xml(json_object);<br/>
                //没错就这么简单

                </div>
            </div>
        </div>
    </div>
    <div  style="padding:30px;margin:10px;line-height:30px;border-left:solid 1px #ddd;border:solid 1px #ddd;border-radius:5px;">
        <div style="padding:10px;">
            <h4>jquery.xml2json.js</h4>
            <div class="split"></div>
            <div class="brief">
                开发者：Micha Korecki, <a href="http://www.michalkorecki.com" target="_blank">http://www.michalkorecki.com/</a>。
            </div>
            <div class="brief">
                适用环境：用于Json对象转换为XML字符串。可以将一个json对象转换成XML字符串。
            </div>
            <div class="brief">
                <h5>下载地址：</h5>
                <a href="http://json.cn/download/jquery.xml2json.js" target="_blank">http://json.cn/download/jquery.xml2json.js</a>。
            </div>
            <div class="brief">
                <h5>安装部署： </h5><pre><code><xmp><script type="text/javascript" src="jquery.xml2json.js"></script> </xmp></code></pre>
            </div>
            <div class="brief">
                <h5>XML转Json：</h5>

                <div style="border:dashed 1px #ddd;border-radius:5px;padding:10px;">
                var json_obj = $.xml2json(xml_content);<br/>
                //没错还是这么简单

                </div>
            </div>
        </div>
    </div>
    <div  style="padding:30px;margin:10px;line-height:30px;border-left:solid 1px #ddd;border:solid 1px #ddd;border-radius:5px;">
        <div style="padding:10px;">
            <h4>JsonView</h4>
            <div class="split"></div>
            <div class="brief">
                开发者： Benjamin Hollis, <a href="http://jsonview.com/" target="_blank">http://jsonview.com/</a>。
            </div>
            <div class="brief">
                适用环境：用于在Firefox及Chrome浏览器页面中格式化查看Json字符串。
            </div>
            <div class="brief">
                <h5>下载地址：</h5>
                Firefox版：<a href="http://json.cn/download/jsonview-0.9-fx.xpi" target="_blank">http://json.cn/download/jsonview-0.9-fx.xpi</a><br/>
                Chrome版（适用于不能翻墙用户）：<a href="http://json.cn/download/jsonview.crx" target="_blank">http://json.cn/download/jsonview.crx</a><br/>
                Chrome版商店下载：<a href="https://chrome.google.com/webstore/detail/chklaanhfefbnpoihckbnefhakgolnmc" target="_blank">https://chrome.google.com/webstore/detail/chklaanhfefbnpoihckbnefhakgolnmc</a><br/>
            </div>
        </div>
    </div>

    <br style="clear:both;" />
</main>

<?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html>
<?php }} ?>