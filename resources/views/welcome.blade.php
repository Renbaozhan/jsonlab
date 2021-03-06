@extends('layout')
@section('meta')
<meta name="keywords" content="json,人工智能,自然语言处理,json实验室,实验室,json.cn"/>
<meta name="description" content="Json中文网2017年成立实验室，对自然语言处理方向进行研究和探索，并推出一系列相关json接口及服务，降低相关技术门槛，提升用户体验"/>
@endsection
@section('title', '实验室')
@section('style')
<style>
.abox{
    font-size:10px;
    padding:10px;
    width: 100%;
    border-bottom:solid 1px #f6f6f6;
    color: #666;
}
.abox.current {
    background-color: #fff;
    box-shadow: 1px 0px 1px #eee;
    border-bottom:solid 1px #eee;
    border-left: solid 1px #eee;
    margin-left: -5px;
    width: 102%;
    font-weight: bold;
}

.abox .title{
    font-size:14px;
    padding:5px;
}
.abox .title i{
    font-size:14px;
    padding:5px;
}
.abox .abstract{
    padding:0px 10px;
}
</style>
@endsection
@section('main')
<main class="main container">
    <div class="row">
        <div class="col-md-3" style="min-height: 550px;padding:0;" id="list-data" >
            <a class="abox" v-for="item in list">
                <div class="title">
                    <i :class="item.icon"></i>
                    @{{item.name}}
                </div>
                <div class="abstract">@{{item.note}}</div>
            </a>
        </div>

        <div class="col-md-9" style="border-left:solid 1px #fafafa;" id="api-data">

            <div style="padding:10px;text-align:center;border-bottom:solid 1px #f6f6f6;">
                <h3>@{{api.name}}</h3>
            </div>

            <div class="row" style="margin:10px;padding:10px 0;border-bottom:solid 1px #f6f6f6;line-height:25px;">

                <div class="col-md-6">
                    <div>试用token：</div>
                    <code class="green-light" style="background-color:#eee;padding:5px;">登录后可见</code>
                </div>
                <div class="col-md-6">
                    <div>请求方式</div>
                    <span>@{{api.method}}</span>
                </div>
                <div class="col-md-6">
                    <div>单IP访问限制：</div>
                    <span class="red-light">@{{api.ipLimit}}次／秒</span>
                </div>
                <div class="col-md-6">
                    <div>单日访问限制：</div>
                    <span class="red-light">@{{api.dailyCallLimit}}次／天</span>
                </div>
                <div class="col-md-12">
                    <div>接口地址：</div>
                    <a class="blue-light" style="text-decoration:underline;" href="{{ URL::asset('/') }}api/wordcut" target="_blank">
                        {{ URL::asset('/') }}api/wordcut
                    </a>
                </div>
            </div>

            <div  class="row" style="font-size:10px;padding:0 20px;border-bottom:solid 1px #f6f6f6;">
                <div class="col-md-6" style="padding:20px;">
                    <h6>输入参数</h6>
                    <div id="param"></div>
                </div>
                <div class="col-md-6"  style="padding:20px;">
                    <h6>返回结果</h6>
                    <div id="result"></div>
                </div>
            </div>

            <div  class="row" style="font-size:10px;padding:0 20px;">
                <div class="col-md-6" style="padding:20px;">
                    <h6>参数说明</h6>
                    <table class="table">
                        <tr><th>参数</th><th>类型</th><th>说明</th><th>是否必须</th></tr>
                        <tbody>
                            <tr v-for="item in api.paramNote">
                                <td>@{{item.name}}</td>
                                <td>@{{item.type}}</td>
                                <td  style="width:50%">@{{item.note}}</td>
                                <td>@{{item.require}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6"  style="padding:20px;">
                    <h6>结果说明</h6>
                    <table class="table">
                        <tr><th>参数</th><th>类型</th><th>说明</th><th>是否必须</th></tr>
                        <tbody>
                            <tr v-for="item in api.resultNote">
                                <td>@{{item.name}}</td>
                                <td>@{{item.type}}</td>
                                <td  style="width:50%">@{{item.note}}</td>
                                <td>@{{item.require}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
</main>
@endsection
@section('script')
<script src="{{ URL::asset('/') }}js/jquery.json.js"></script>
<script>
loadApi();
loadList();
function loadApi(){
    var api = {
        name:"中文分词",
        method:'POST',
        ipLimit:10,
        dailyCallLimit:1000000,
        address:'{{ URL::asset('/') }}api/wordcut',
        param:'{"token":"public","text":"张三李四"}',
        result:'{"code":200,"msg":"success","data":["张三","李四"]}',
        paramNote:[
            {
                name:"token",
                type:"string",
                require:true,
                note:"用于接口身份认证及数据统计"
            },{
                name:"text",
                type:"string",
                require:true,
                note:"待分词文本内容"
            }
        ],
        resultNote:[
            {
                name:"code",
                type:"int",
                require:true,
                note:"接口状态码，200时正常，其他值为异常，具体含义参考http状态码"
            },{
                name:"msg",
                type:"string",
                require:true,
                note:"接口返回结果提示信息，正常为success"
            },{
                name:"data",
                type:"array",
                require:true,
                note:"接口返回数据数组，接口数据均在此数组内"
            }
        ]
    };
    var app = new Vue({
        el: '#api-data',
        data: {
            api: api
        }
    });
    var param_html = new JSONFormat(api.param,4).toString();
    var result_html = new JSONFormat(api.result,4).toString();
    $('#param').html(param_html);
    $('#result').html(result_html);
}
function loadList(){
    var list = [
        {id:1031,name:'中文分词',note:'切分中文句子和文章为单个词汇',icon:'fa fa-cut'},
        {id:1032,name:'词性标注',note:'标注显示中文词性',icon:'fa fa-tag'},
        {id:1033,name:'情感分析',note:'分析评论内容情感倾向',icon:'fa fa-heart'},
        {id:1034,name:'关键词抽取',note:'抽取长文本中的关键词',icon:'fa fa-file-word-o'}
    ];
    var app = new Vue({
        el: '#list-data',
        data: {
            list: list
        }
    });
}
</script>
@endsection
