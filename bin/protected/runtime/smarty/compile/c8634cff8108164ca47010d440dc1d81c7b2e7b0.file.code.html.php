<?php /* Smarty version Smarty-3.1.3, created on 2017-04-22 15:56:12
         compiled from "/Users/Ren/GitHub/api/bin/protected/views/json/code.html" */ ?>
<?php /*%%SmartyHeaderCode:184463260158fb7d1c5b53e9-15487554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8634cff8108164ca47010d440dc1d81c7b2e7b0' => 
    array (
      0 => '/Users/Ren/GitHub/api/bin/protected/views/json/code.html',
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
  'nocache_hash' => '184463260158fb7d1c5b53e9-15487554',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_58fb7d1c5f07e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb7d1c5f07e')) {function content_58fb7d1c5f07e($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>Json解析代码 - Json.cn</title>
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
    
<meta name="keywords" content="json解析代码,javascript解析json,java解析json,php解析json,c#解析json,python解析json"/>
<meta name="description" content="提供javascript、java、php、c#、python等各类主流编程语言解析json代码"/>

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
    <div class="col-md-8" style="padding:0;">
        <div style="padding:40px 80px;;line-height:30px;">
            <div id="content-body-wrapper">
                <div id="content-body">
                    <div class="line"></div>
                                        <h4 id="javascript">Javascript:</h4><pre class="bg-warning" style="padding:20px;"><code>
1.使用eval
var parse_json_by_eval = function(str){
    return eval('('+str+')');
}
var value = 1;
var jsonstr = '{"name":"jifeng","company":"taobao","value":++value}';
var json1 = parse_json_by_eval(jsonstr);
console.log(json1);
console.log('value: '+ value);
執行結果：

{ name: 'jifeng', company: 'taobao', value: 2 }
value: 2
2.使用JSON.parse
var parse_json_by_JSON_parse = function(str){
    return JSON.parse(str);
}
value = 1;
var jsonstr = '{"name":"jifeng","company":"taobao"}';
var json2 = parse_json_by_JSON_parse(jsonstr);
console.log(json2);
console.log(value);
From：http://www.cnblogs.com/lengyuhong/archive/2012/01/07/2262390.html
</code></pre>
<div>
以上代码来自博客：<a href="http://www.cnblogs.com/lengyuhong/archive/2012/01/07/2262390.html">http://www.cnblogs.com/lengyuhong/archive/2012/01/07/2262390.html</a></div>
                    <h4 id="php">PHP:</h4><pre class="bg-warning" style="padding:20px;"><code>
$json_string='{"id":1,"name":"jb51","email":"admin@jb51.net","interest":["wordpress","php"]} ';
$obj=json_decode($json_string);
echo $obj->name; //prints foo
echo $obj->interest[1]; //prints php </code></pre>
                   <h4 id="java">Java:</h4><pre class="bg-warning" style="padding:20px;"><code>
JSONObject  dataJson=new JSONObject("你的Json数据“);
JSONObject  response=dataJson.getJSONObject("response");
JSONArray data=response.getJSONArray("data");
JSONObject info=data.getJSONObject(0);
String province=info.getString("province");
String city=info.getString("city");
String district=info.getString("district");
String address=info.getString("address");
 System.out.println(province+city+district+address);</code></pre>
                    <h4 id="csharp">C#:</h4><pre class="bg-warning" style="padding:20px;"><code>
使用开源的类库Newtonsoft.Json(下载地址http://json.codeplex.com/)。下载后加入工程就能用。通常可以使用JObject, JsonReader, JsonWriter处理。这种方式最通用，也最灵活，可以随时修改不爽的地方。
(1)使用JsonReader读Json字符串：
[csharp] view plaincopy
string jsonText =@"{""input"" : ""value"",""output"" : ""result""}";
JsonReader reader = new JsonTextReader(newStringReader(jsonText));
while (reader.Read())
{
   Console.WriteLine(reader.TokenType + "\t\t" + reader.ValueType+ "\t\t" + reader.Value);
}

(2)使用JsonWriter写字符串：
[csharp] view plaincopy
StringWriter sw = new StringWriter();
JsonWriter writer = new JsonTextWriter(sw);

writer.WriteStartObject();
writer.WritePropertyName("input");
writer.WriteValue("value");
writer.WritePropertyName("output");
writer.WriteValue("result");
writer.WriteEndObject();
writer.Flush();

string jsonText =sw.GetStringBuilder().ToString();
Console.WriteLine(jsonText);

(3)使用JObject读写字符串：
[csharp] view plaincopy
JObject jo = JObject.Parse(jsonText);
string[] values =jo.Properties().Select(item => item.Value.ToString()).ToArray();

(4)使用JsonSerializer读写对象(基于JsonWriter与JsonReader):
数组型数据
[csharp] view plaincopy
string jsonArrayText1 ="[{'a':'a1','b':'b1'},{'a':'a2','b':'b2'}]";
JArray ja =(JArray)JsonConvert.DeserializeObject(jsonArrayText1);
string ja1a =ja[1]["a"].ToString();
//或者
JObject o = (JObject)ja[1];
string oa = o["a"].ToString();
 </code></pre>
 <h4 id="python">Python:</h4><pre class="bg-warning" style="padding:20px;"><code>
import json
data= json.loads('{"ID": "2", "IP":"12.12.12.12", "Port": "3000", "Sensor_Count":"1", "Control_Count": "1", "Sensors":{"Sensor_Name": "tem", "Type_Count": "1", "Types":{ "types":["temp","C"],"types":["hum","N"],}},"Controls":["LCD","Relay"] }')
print data.ID
输出结果:"2"
data = json.dump(data)
print data
输出结果:{"ID": "2", "IP":"12.12.12.12", "Port": "3000", "Sensor_Count":"1", "Control_Count": "1", "Sensors":{"Sensor_Name": "tem", "Type_Count": "1", "Types":{ "types":["temp","C"],"types":["hum","N"],}},"Controls":["LCD","Relay"] }
</code></pre>
<p>如需更多语言，欢迎联系我们添加，站长邮箱：<a href="mailto:4006776@qq.com">4006776@qq.com</a></p>

                    <div class="clear"></div>

                </div>
            </div>


        </div>
    </div>
    <div class="col-md-3" style="padding:40px 20px;">
        <div  style="padding:20px;margin:20px;line-height:30px;border-left:solid 1px #ddd;border:solid 1px #ddd;border-radius:5px;">
            <div style="padding:10px;">
                <h5>快速导航:</h5>
                <div class="split"></div>
                <div class="brief">
                    <a href="#javascript">javascript </a><br/>
                    <a href="#java">java </a><br/>
                    <a href="#php">php </a><br/>
                    <a href="#csharp">c# </a><br/>
                    <a href="#python">python </a><br/>
                </div>
            </div>
        </div>
    </div>
    <br style="clear:both;" />
</main>

<?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html>
<?php }} ?>