@extends('layout')
@section('title', '实验室')
@section('style')
<style>
.abox{
    font-size:10px;
    padding:10px;
    width: 100%;
    border-bottom:solid 1px #f6f6f6;
    color:#39414F;
}
.abox.current {
    background-color: #fff;
    background: linear-gradient(to bottom,#fff, #fafafa);
    box-shadow: 0 1px 1px #ddd;
    width: 101%;
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
    padding:5px 15px;
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
        </div>
        <div class="col-md-9">
            <div style="padding:20px;text-align:center;border-bottom:solid 1px #f6f6f6;">
                <h3>中文分词</h3>
            </div>
            <div  class="row" style="font-size:10px;">
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
