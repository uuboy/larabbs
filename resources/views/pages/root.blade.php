@extends('layouts.app')
@section('title', '公司简介')

@section('content')
<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 root_page">
  <div class="panel panel-default ">
    <div class="panel-body">
      <div class="root_content col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="root_title">
          公司简介
        </div>
        <div class="root_row">
          <div class="root_sub_row1">公司名称：宁波市辉昂管业有限公司</div>
          <div class="root_sub_row2">Company name: Ningbo Huiang Pipe Industry Co., Ltd</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">公司占地面积：约10000平方</div>
          <div class="root_sub_row2">The company covers an area of about 10,000 square feet</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">作业人员：82名</div>
          <div class="root_sub_row2">Operators: 82</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">主要经营产品：汽车减震配件</div>
          <div class="root_sub_row2">Main business products: auto shock absorber accessories</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">■吊环ring  ■套管bush ■油封座Oil seat  ■螺栓bolt
          </div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">■螺母体Spiral  ■吊环总成Ring Assembly  ■限位块 Limit Block  ■螺母体总成Screw matrix assembly
          </div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">产量：3000万只/年</div>
          <div class="root_sub_row2">Production: 30 million per year</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">销售额：4000万元人民币</div>
          <div class="root_sub_row2">Sales: 40 million yuan</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">班制：1班制（7:30 ∽ 16：30） 中午午休60分钟</div>
          <div class="root_sub_row2">Class system: 1 class system(7:30 <UNK> 16:30) 60 minutes lunch break at noon</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">所在地：浙江省宁波市鄞州区云龙镇石桥村太平桥</div>
          <div class="root_sub_row2">Location: Taiping Bridge, Shiqiao Village, Yunlong Town, Yinzhou District, Ningbo, Zhejiang Province</div>
        </div>
      </div>
      <div class="root_img col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img class="img-responsive" src="{{config('app.url')}}/hagy.png" alt="">
      </div>

    </div>
  </div>
</div>
@stop
