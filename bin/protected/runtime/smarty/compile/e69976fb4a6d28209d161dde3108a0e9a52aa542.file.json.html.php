<?php /* Smarty version Smarty-3.1.3, created on 2017-05-18 15:06:42
         compiled from "/Users/Ren/GitHub/api/bin/protected/views/json/json.html" */ ?>
<?php /*%%SmartyHeaderCode:1315780747591db88246c070-29611751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e69976fb4a6d28209d161dde3108a0e9a52aa542' => 
    array (
      0 => '/Users/Ren/GitHub/api/bin/protected/views/json/json.html',
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
  'nocache_hash' => '1315780747591db88246c070-29611751',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_591db8824da1f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591db8824da1f')) {function content_591db8824da1f($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>什么是Json - Json.cn</title>
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
    
<meta name="keywords" content="json概念,json规范,json标准"/>
<meta name="description" content="介绍关于json的相关概念、定义规范以及业界标准"/>

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


    <style type="text/css">
        h1,h2,h3,h4,h5{font-weight: bold;}
        /* Brief */
    #brief-intro-wrapper{
        font-size: 15px;
    }
    #brief-intro{
        padding: 25px 40px;
        border: 1px solid #ddd;
        background-color: #FFFFFF;
        border-top:none;
    }
    #brief-intro .object{
        margin-top: 11px;
        font-style: italic;
        font-size: 16px;
    }
    #brief-intro .object .form{
        margin-left: 28px;
        font-size: 14px;
    }
    #brief-intro .object .form .value{
        font-style: normal;
        font-weight: bold;
    }
    #brief-intro .split{
        margin-top: 18px;
        border: 1px solid #eee;
    }
    </style>
<main class="row-fluid">
    <div class="col-md-9" style="padding:0;">
        <div style="padding:40px 70px;line-height:30px;">
            <div class="line">
                <span class="bold">JSON</span>(JavaScript Object Notation) 是一种轻量级的数据交换格式。它使得人们很容易的进行阅读和编写。同时也方便了机器进行解析和生成。它是基于 <a href="http://www.crockford.com/javascript" target="_blank">JavaScript Programming Language</a> , <a href="http://www.ecma-international.org/publications/files/ecma-st/ECMA-262.pdf" target="_blank">Standard ECMA-262 3rd Edition - December 1999</a> 的一个子集。 JSON采用完全独立于程序语言的文本格式，但是也使用了类C语言的习惯（包括C, C++, C#, Java, JavaScript, Perl, Python等）。这些特性使JSON成为理想的数据交换语言。
            </div>
            <h4 class="line">JSON基于两种结构：</h4>

            <p>

                    <div>JSON[1] 结构有两种结构[2] </div>
                    <div>json简单说就是javascript中的对象和数组，所以这两种结构就是对象和数组两种结构，通过这两种结构可以表示各种复杂的结构</div>
                <ul>
                    <li>1、对象：对象在js中表示为“{}”括起来的内容，数据结构为 {key：value,key：value,...}的键值对的结构，在面向对象的语言中，key为对象的属性，value为对应的属性值，所以很容易理解，取值方法为 对象.key 获取属性值，这个属性值的类型可以是 数字、字符串、数组、对象几种。</li>
                    <li>2、数组：数组在js中是中括号“[]”括起来的内容，数据结构为 ["java","javascript","vb",...]，取值方式和所有语言中一样，使用索引获取，字段值的类型可以是 数字、字符串、数组、对象几种。</li>

                </ul>
            </p>
            <pre class="bg-warning" style="padding:20px;"><code>
{
    "animals": {
        "dog": [
            {
                "name": "Rufus",
                "age":15
            },
            {
                "name": "Marty",
                "age": null
            }
        ]
}</code></pre>
            <p>经过对象、数组2种结构就可以组合成复杂的数据结构了。</p>
            <p class="line">
                &ldquo;名称/值&rdquo;对的集合（A collection of name/value pairs）。不同的编程语言中，它被理解为<span class="italic">对象（object）</span>，纪录（record），结构（struct），字典（dictionary），哈希表（hash table），有键列表（keyed list），或者关联数组 （associative array）。
                值的有序列表（An ordered list of values）。在大部分语言中，它被实现为数组（array），矢量（vector），列表（list），序列（sequence）。
            </p>
            <div class="line">
                这些都是常见的数据结构。目前，绝大部分编程语言都以某种形式支持它们。这使得在各种编程语言之间交换同样格式的数据成为可能。
            </div>
            <h4 class="line">
                JSON具有以下这些形式：
            </h4>
            <div class="line">
                <span class="bold">对象（<span class="italic">object</span>）</span> 是一个无序的&ldquo;&lsquo;名称/值&rsquo;对&rdquo;集合。一个对象以&ldquo;{&rdquo;（左括号）开始，&ldquo;}&rdquo;（右括号）结束。每个&ldquo;名称&rdquo;后跟一个&ldquo;:&rdquo;（冒号）；&ldquo;&lsquo;名称/值&rsquo; 对&rdquo;之间使用&ldquo;,&rdquo;（逗号）分隔。
            </div>

            <div class="line">
                <span class="bold">数组（<span class="italic">array</span>）</span> 是值（value）的有序集合。一个数组以&ldquo;[&rdquo;（左中括号）开始，&ldquo;]&rdquo;（右中括号）结束。值之间使用&ldquo;,&rdquo;（逗号）分隔。
            </div>

            <div class="line">
                <span class="bold">值（<span class="italic">value</span>）</span> 可以是双引号括起来的字符串（<code class="italic">string</code>）、数值(<code>number</code>)、<code>true</code>、<code>false</code>、 <code>null</code>、对象（object）或者数组（array）。这些结构可以嵌套。
            </div>

            <div class="line">
                <span class="bold">字符串（<span class="italic">string</span>）</span> 是由双引号包围的任意数量Unicode字符的集合，使用反斜线转义。一个字符（character）即一个单独的字符串（character string）。
            </div>
            <div class="line">
                JSON的字符串（<span class="italic">string</span>）与C或者Java的字符串非常相似。
            </div>

            <div class="line">
                <span class="bold">数值（<span class="italic">number</span>）</span> 也与C或者Java的数值非常相似。只是JSON的数值没有使用八进制与十六进制格式。
            </div>

            <div class="line">
                同时，可以在任意标记之间添加空白。
            </div>
            <h4>访问数据</h4>

            <p>尽管看起来不明显，但是上面的长字符串实际上只是一个数组；将这个数组放进 JavaScript变量之后，就可以很轻松地访问它。实际上，只需用点号表示法来表示数组元素。所以，要想访问 programmers 列表的第一个条目的姓氏，只需在 JavaScript 中使用下面这样的代码：
            </p>

                <code>people.programmers[0].lastName;</code><br/>

            注意，数组索引是从零开始的。所以，这行代码首先访问 people变量中的数据；然后移动到称为 programmers的条目，再移动到第一个记录（[0]）；最后，访问 lastName键的值。结果是字符串值 “McLaughlin”。
            下面是使用同一变量的几个示例。
            <p>
                <code>
                    people.authors[1].genre//Valueis"fantasy"<br/>
                    people.musicians[3].lastName//Undefined.Thisreferstothefourthentry,andthereisn'tone<br/>
                    people.programmers[2].firstName//Valueis"Elliotte"<br/>
                </code>
            </p>
            <p>利用这样的语法，可以处理任何 JSON 格式的数据，而不需要使用任何额外的 JavaScript 工具包或 API。</p>
            <h4>和XML的比较</h4>

<h5>可读性</h5>
JSON和XML的可读性可谓不相上下，一边是简易的语法，一边是规范的标签形式，很难分出胜负。
<h5>可扩展性</h5>
XML天生有很好的扩展性，JSON当然也有，没有什么是XML可以扩展而JSON却不能扩展的。不过JSON在Javascript主场作战，可以存储Javascript复合对象，有着xml不可比拟的优势。
<h5>编码难度</h5>
XML有丰富的编码工具，比如Dom4j、JDom等，JSON也有提供的工具。无工具的情况下，相信熟练的开发人员一样能很快的写出想要的xml文档和JSON字符串，不过，xml文档要多很多结构上的字符。
<h5>解码难度</h5>
<ul>XML的解析方式有两种：
<li>一是通过文档模型解析，也就是通过父标签索引出一组标记。例如：xmlData.getElementsByTagName("tagName")，但是这样是要在预先知道文档结构的情况下使用，无法进行通用的封装。
</li>
<li>另外一种方法是遍历节点（document 以及 childNodes）。这个可以通过递归来实现，不过解析出来的数据仍旧是形式各异，往往也不能满足预先的要求。
</li>
</ul>
<p>凡是这样可扩展的结构数据解析起来一定都很困难。</p>
<p>JSON也同样如此。如果预先知道JSON结构的情况下，使用JSON进行数据传递简直是太美妙了，可以写出很实用美观可读性强的代码。如果你是纯粹的前台开发人员，一定会非常喜欢JSON。但是如果你是一个应用开发人员，就不是那么喜欢了，毕竟xml才是真正的结构化标记语言，用于进行数据传递。

</p><p>而如果不知道JSON的结构而去解析JSON的话，那简直是噩梦。费时费力不说，代码也会变得冗余拖沓，得到的结果也不尽人意。但是这样也不影响众多前台开发人员选择JSON。因为json.js中的toJSONString()就可以看到JSON的字符串结构。当然不是使用这个字符串，这样仍旧是噩梦。常用JSON的人看到这个字符串之后，就对JSON的结构很明了了，就更容易的操作JSON。
</p><p>以上是在Javascript中仅对于数据传递的xml与JSON的解析。在Javascript地盘内，JSON毕竟是主场作战，其优势当然要远远优越于xml。如果JSON中存储Javascript复合对象，而且不知道其结构的话，我相信很多程序员也一样是哭着解析JSON的。
</p>    <p>除了上述之外，JSON和XML还有另外一个很大的区别在于有效数据率。JSON作为数据包格式传输的时候具有更高的效率，这是因为JSON不像XML那样需要有严格的闭合标签，这就让有效数据量与总数据包比大大提升，从而减少同等数据流量的情况下，网络的传输压力。
        </p>
        <div id="content-body-wrapper">
            <div id="content-body">
                <div class="line"></div>
                <h4 class="line title">JSON 标准:</h4>
                <h4 class="line title">RFC4627:</h4>
                <div class="line">The <span class="italic">application/json</span> Media Type for JavaScript Object Notation (JSON)</div>
                <h4 class="line title">发布日期:</h4>
                <div class="line">2006年7月</div>
                <h4 class="line title">最后修订:</h4>
                <div class="line">2010年7月</div>
                <h4 class="line title">作者信息:</h4>
                <div class="line">Douglas Crockford</div>
                <div class="line">JSON.org</div>
                <div class="line">EMail: douglas@crockford.com</div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>

                <div class="line">最新版`<span class="red bold">RFC4627</span>`下载</div>
                <div class="line">
                    <!-- TXT -->
                    <a style="padding:5px 20px;border:solid 2px #15b374;border-radius:5px;" href="http://www.rfc-editor.org/rfc/rfc4627.txt" target="_blank" title="RFC4627 TXT版下载">RFC4627 TXT版</a>
                    <!-- PDF -->
                    <a style="padding:5px 20px;border:solid 2px #15b374;border-radius:5px;"  href="http://www.rfc-editor.org/rfc/pdfrfc/rfc4627.txt.pdf" target="_blank" title="RFC4627 PDF版下载">RFC4627 PDF版</a>
                </div>
                <div class="clear"></div>

            </div>
        </div>
        </div>

    </div>
    <div class="col-md-3" style="padding:0;">

    <div id="brief-intro-wrapper">
        <div id="brief-intro">
            <div class="object">
                object
                <div class="form"><span class="value">{}</code></span></div>
                <div class="form"><span class="value">{</span> members <span class="value">}</span></div>
            </div>
            <div class="object">
                members
                <div class="form">pair</div>
                <div class="form">pair, members</div>
            </div>
            <div class="object">
                pair
                <div class="form"><code>string</code> : value</div>
            </div>
            <div class="object">
                array
                <div class="form"><span class="value">[]</span></div>
                <div class="form"><span class="value">[</span> elements <span class="value">]</span></div>
            </div>
            <div class="object">
                elements
                <div class="form">value</div>
                <div class="form"> value , elements</div>
            </div>
            <div class="object">
                value
                <div class="form"><code>string</code></div>
                <div class="form"><code>number</code></div>
                <div class="form"><code>object</code></div>
                <div class="form"><code>array</code></div>
                <div class="form"><span class="value"><code>true</code></span></div>
                <div class="form"><span class="value"><code>false</code></span></div>
                <div class="form"><span class="value"><code>null</code></span></div>
            </div>

            <!-- Split -->
            <div class="split"></div>
            <!-- //Split -->

            <div class="object">
                String
                <div class="form"><span class="value">""</span></div>
                <div class="form"><span class="value">"</span> chars <span class="value">"</span></div>
            </div>
            <div class="object">
                chars
                <div class="form"><code>char</code></div>
                <div class="form"><code>char chars</code></div>
            </div>
            <div class="object">
                char
                <div class="form">any-Unicode-character-<div class="form">except-"-or-\-or-</div><div class="form">control-character</div></div>
                <div class="form"><span class="value"><code>\"</code></span></div>
                <div class="form"><span class="value"><code>\\</code></span></div>
                <div class="form"><span class="value"><code>\/</code></span></div>
                <div class="form"><span class="value"><code>\b</code></span></div>
                <div class="form"><span class="value"><code>\f</code></span></div>
                <div class="form"><span class="value"><code>\n</code></span></div>
                <div class="form"><span class="value"><code>\r</code></span></div>
                <div class="form"><span class="value"><code>\t</code></span></div>
                <div class="form"><span class="value"><code>\u</code></span> four-hex-digits</div>
            </div>
            <div class="object">
                number
                <div class="form"><code>int</code></div>
                <div class="form"><code>int frac</code></div>
                <div class="form"><code>int exp</code></div>
                <div class="form"><code>int frac exp</code></div>
            </div>
            <div class="object">
                int
                <div class="form"><code>digit</code></div>
                <div class="form"><code>digit1-9 digits</code></div>
                <div class="form"><code>- digit</code></div>
                <div class="form"><code>- digit1-9 digits</code></div>
            </div>
            <div class="object">
                frac
                <div class="form">. digits</div>
            </div>
            <div class="object">
                exp
                <div class="form"><code>e digits</code></code></div>
            </div>
            <div class="object">
                digits
                <div class="form"><code>digit</code></div>
                <div class="form"><code>digit digits</code></div>
            </div>
            <div class="object">
                e
                <div class="form"><span class="value"><code>e</code></span></div>
                <div class="form"><span class="value"><code>e+</code></span></div>
                <div class="form"><span class="value"><code>e-</code></span></div>
                <div class="form"><span class="value"><code>E</code></span></div>
                <div class="form"><span class="value"><code>E+</code></span></div>
                <div class="form"><span class="value"><code>E-</code></span></div>
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