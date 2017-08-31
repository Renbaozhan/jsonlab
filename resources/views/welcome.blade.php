@extends('layout')
@section('meta')
<meta name="keywords" content="json,人工智能,自然语言处理,json实验室,实验室"/>
<meta name="description" content="Json中文网2017年成立人工智能实验室，对自然语言处理方向进行研究和探索，并推出一系列相关json接口及服务，降低人工智能门槛，提升用户体验"/>
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
        <div class="col-md-3" style="min-height: 550px;padding:0;box-shadow:0 1px 1px #eee;">
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
        <div class="col-md-9">
            <div style="padding:10px;text-align:center;border-bottom:solid 1px #f6f6f6;">
                <h3>中文分词</h3>
            </div>
            <div class="row" style="margin:10px;padding:10px 0;border-bottom:solid 1px #f6f6f6;line-height:25px;">

                <div class="col-md-6">
                    <div>试用token：</div>
                    <code class="green-light">登录后可见</code>
                </div>
                <div class="col-md-6">
                    <div>请求方式</div>
                    <span>POST</span>
                </div>
                <div class="col-md-6">
                    <div>单IP访问限制：</div>
                    <span class="red-light">100次请求／秒</span>
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
            <div  class="row" style="font-size:10px;padding:0 20px;">
                <div class="col-md-6" style="padding:20px;">
                    <h6>输入参数</h6>
                    <div id="param"></div>
                </div>
                <div class="col-md-6"  style="padding:20px;">
                    <h6>返回结果</h6>
                    <div id="result"></div>
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
var param = '{"token":"public","text":"张三李四"}';
var result = '{"code":200,"msg":"success","data":["张三","李四"]}';
var param_html = new JSONFormat(param,4).toString();
var result_html = new JSONFormat(result,4).toString();
$('#param').html(param_html);
$('#result').html(result_html);
</script>
@endsection
