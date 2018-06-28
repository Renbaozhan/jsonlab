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
  <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
  </div>
    <div class="row">
      <div class="col-md-4">1</div>
      <div class="col-md-4">2</div>
      <div class="col-md-4">3</div>
    </div>
    <div class="row">
        <div class="col-md-3" style="min-height: 550px;padding:0;" id="list-data" >
            <a class="abox" v-on:click="load(item.id)" :data-key="item.id" v-for="item in list">
                <div class="title">
                    <i :class="item.icon"></i>
                    @{{item.name}}
                </div>
                <div class="abstract">@{{item.note}}</div>
            </a>
        </div>

        <div class="col-md-9" style="border-left:solid 5px #59d9a4;" id="api-data">

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
                        {{ URL::asset('/') }}@{{api.address}}
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
var init_id = 1;
var app = new Vue({
    el: '#api-data',
    data: {
        api: {}
    }
});
var applist = new Vue({
    el: '#list-data',
    data: {
        list: []
    },
    methods: {
        load: function (id) {
            loadService(id);
        }
    }

});

loadService(init_id);
loadServiceList();
function loadService(id){
    $.get('/services/'+id,function(response){
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
    });
}
</script>
@endsection
