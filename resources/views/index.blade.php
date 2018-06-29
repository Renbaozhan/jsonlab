@extends('layout')
@section('meta')
<meta name="keywords" content="json,人工智能,自然语言处理,json.cn"/>
<meta name="description" content="Json中文网2017年开始对自然语言处理方向进行研究和探索，并推出一系列相关json接口及服务，降低相关技术门槛，提升用户体验"/>
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
a.abox.current {
    margin-right: -2px;
    border-top:solid 1px #eee;
    border-bottom:solid 1px #eee;
    border-right:solid 1px #fff;
    font-weight: bold;
    background: #fff;
    color:#4285f4;
    z-index: 10000;
}

.abox .title{
    font-size:14px;
    padding:10px;
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
<main class="main container" style="text-align:center;">

    <div class="row" style="text-align:center;min-width:800px;padding:50px 0;font-size:14px;" >
      <h4 style="text-align:left;padding-left:55px;padding-bottom:10px;">探索发现</h4>
      <div class="col-md-3  col-md-offset-1 card">
        <h4 ><span class="red">词</span>性标注</h4>
        <div>
            对文本资料进行分词后，对分词结果进行词性标注
        </div>
      </div>
      <div class="col-md-3 card">
        <h4 ><span class="green">关</span>键词提取</h4>
        <div>
            从文本资料中提取关键词，并给出关键词权重
        </div>
      </div>
      <div class="col-md-3 card">
        <h4 ><span class="blue">文</span>本分类</h4>
        <div>
            根据特定规则对文本资料进行分类，给出分类信息和结果
        </div>
      </div>
    </div>

    <h4 style="text-align:left;padding-left:45px;padding-bottom:10px;">相关接口</h4>

    <div class="row"
    style="padding:0;text-align:center;min-width:800px;width:98%;margin:auto;">
        <div class="col-md-3"
          style="z-index: 100;text-align: center;min-height: 550px;padding:0;margin:0 auto;"
          id="list-data" >
            <a class="abox" v-for="(item,index) in list" :class="{'current': index === selected}"  v-on:click="load(index)" :data-key="item.id" >
                <div class="title">
                    @{{item.name}}
                </div>
            </a>
        </div>

        <div class="col-md-9" style="z-index: 0;text-align: left;border-left:solid 1px #eee;" id="api-data">

            <div class="row" style="margin:10px;padding:10px;border-bottom:solid 1px #f6f6f6;line-height:30px;">
                <div class="row" style="padding:10px;">
                  <div class="col-md-6">
                      <div>试用token：</div>
                      <code class="green" style="background-color:#eee;padding:5px;">jsoncn</code>
                  </div>
                  <div class="col-md-6">
                      <div>请求方式:</div>
                      <span>@{{api.method}}</span>
                  </div>
                </div>
                <div class="row" style="padding:10px;">
                  <div class="col-md-6">
                      <div>单IP访问限制：</div>
                      <span class="red">@{{api.ipLimit}}次／秒</span>
                  </div>

                  <div class="col-md-6">
                      <div>单日访问限制：</div>
                      <span class="red">@{{api.dailyCallLimit}}次／天</span>
                  </div>
                </div>
                <div class="row" style="padding:10px;">
                  <div class="col-md-12">
                      <div>接口地址：</div>
                      <a  style="text-decoration:underline;" href="{{ URL::asset('/') }}api/wordcut" target="_blank">
                          {{ URL::asset('/') }}@{{api.address}}
                      </a>
                  </div>
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

            <div  class="row" style="font-size:12px;padding:0 20px;">
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
    <!--<div class="spinner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
    </div>-->
</main>
@endsection
@section('script')
<script src="{{ URL::asset('/') }}js/jquery.json.js"></script>
<script>
var app = new Vue({
    el: '#api-data',
    data: {
        api: {}
    }
});
var applist = new Vue({
    el: '#list-data',
    data: {
        list: [],
        selected: 0,
    },
    methods: {
        load: function (index) {
            this.selected = index;
            loadService(index);
        }
    }

});


loadServiceList();

function loadService(index){
    $.get('/services/'+applist.list[index].id,function(response){
        response.paramNote = JSON.parse(response.paramNote);
        response.resultNote = JSON.parse(response.resultNote);
        app.api = response;
        var param_html = new JSONFormat(response.param,4).toString();
        var result_html = new JSONFormat(response.result,4).toString();
        $('#param').html(param_html);
        $('#result').html(result_html);
    });
}
function loadServiceList(){
    $.get('/services',function(response){
        applist.list = response;
        loadService(applist.selected);
    });
}
</script>
@endsection
