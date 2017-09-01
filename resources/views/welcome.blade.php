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
    border-bottom:solid 1px #ddd;
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
        <div class="col-md-3" style="min-height: 550px;padding:0;">
            <a class="abox current">
                <div class="title">
                    <i class="fa fa-cut"></i>
                    中文分词
                </div>
                <div class="abstract">切分中文句子和文章为单个词汇</div>
            </a>
            <a  class="abox">
                <div  class="title">
                    <i class="fa fa-tag"></i>
                    词性标注
                </div>
                <div class="abstract">标注显示中文词性</div>
            </a>
            <a  class="abox">
                <div  class="title">
                    <i class="fa fa-file-word-o"></i>
                    文本分类
                </div>
                <div class="abstract">对文本内容进行分类</div>
            </a>
            <a  class="abox">
                <div  class="title">
                    <i class="fa fa-heart"></i>
                    情感分析
                </div>
                <div class="abstract">分析评论内容情感倾向</div>
            </a>
            <a  class="abox">
                <div  class="title">
                    <i class="fa fa-file-word-o"></i>
                    关键词抽取
                </div>
                <div class="abstract">抽取文章中的关键词语</div>
            </a>
            <a  class="abox">
                <div  class="title">
                    <i class="fa fa-file-word-o"></i>
                    垃圾文本识别
                </div>
                <div class="abstract">识别无意义文本内容</div>
            </a>
        </div>
        <div class="col-md-9" style="border-left:solid 1px #fafafa;">
            <div style="padding:10px;text-align:center;border-bottom:solid 1px #f6f6f6;">
                <h3>中文分词</h3>
            </div>
            <div class="row" style="margin:10px;padding:10px 0;border-bottom:solid 1px #f6f6f6;line-height:25px;">

                <div class="col-md-6">
                    <div>试用token：</div>
                    <code class="green-light" style="background-color:#eee;padding:5px;">登录后可见</code>
                </div>
                <div class="col-md-6">
                    <div>请求方式</div>
                    <span>POST</span>
                </div>
                <div class="col-md-6">
                    <div>单IP访问限制：</div>
                    <span class="red-light">10次／秒</span>
                </div>
                <div class="col-md-6">
                    <div>单日访问限制：</div>
                    <span class="red-light">100w次／天</span>
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
                        <tbody id="param-note"></tbody>
                    </table>
                </div>
                <div class="col-md-6"  style="padding:20px;">
                    <h6>结果说明</h6>
                    <table class="table">
                        <tr><th>参数</th><th>类型</th><th>说明</th><th>是否必须</th></tr>
                        <tbody id="result-note"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('script')
<script src="{{ URL::asset('/') }}js/echarts-all.js"></script>
<script src="{{ URL::asset('/') }}js/jquery.json.js"></script>
<script>
loadApi();
function loadApi(){
    var api = {
        name:"中文分词",
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
    var param_html = new JSONFormat(api.param,4).toString();
    var result_html = new JSONFormat(api.result,4).toString();
    $('#param').html(param_html);
    $('#result').html(result_html);
    var param_note_html = '';
    var result_note_html = '';
    for(var i=0;i<api.paramNote.length;i++){
        param_note_html+="<tr>";
        param_note_html+="<td>"+api.paramNote[i].name+"</td>";
        param_note_html+="<td>"+api.paramNote[i].type+"</td>";
        param_note_html+='<td  style="width:50%">'+api.paramNote[i].note+'</td>';
        if(api.paramNote[i].require){
            param_note_html+='<td class="red-light">'+api.paramNote[i].require+'</td>';
        }else{
            param_note_html+='<td>'+api.paramNote[i].require+'</td>';
        }
        param_note_html+="</tr>";
    }
    $('#param-note').html(param_note_html);
    for(var i=0;i<api.resultNote.length;i++){
        result_note_html+="<tr>";
        result_note_html+="<td>"+api.resultNote[i].name+"</td>";
        result_note_html+="<td>"+api.resultNote[i].type+"</td>";
        result_note_html+='<td   style="width:50%">'+api.resultNote[i].note+'</td>';
        if(api.resultNote[i].require){
            result_note_html+='<td class="red-light">'+api.resultNote[i].require+'</td>';
        }else{
            result_note_html+='<td>'+api.resultNote[i].require+'</td>';
        }
        result_note_html+='</tr>';
    }
    $('#result-note').html(result_note_html);
}

</script>
@endsection
