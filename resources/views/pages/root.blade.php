@extends('layouts.app')
@section('title', '公司简介')

@section('content')
<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 root_page">
  <div class="panel panel-default ">
    <div class="panel-body">
      <div class="root_content col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="root_title">
          公司详情 Company details
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

    <h5 class="page-header"></h5>

    <div class="panel-body">
      <div class="root_content col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="root_title">
          发展历程 History
        </div>
        <div class="root_row">
          <div class="root_sub_row1">1998年5月  辉昂公司前身成立</div>
          <div class="root_sub_row2">May 1998 HuiANG Company was established</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">1999年1月  正式开始量产</div>
          <div class="root_sub_row2">January 1999 officially began mass production</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2000年12月 产量达到200万只/年</div>
          <div class="root_sub_row2">Production reached 2 million per year in December 2000</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2001年5月  公司成立3周年</div>
          <div class="root_sub_row2">May 2001 3rd anniversary of the establishment of the company</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2002年3月  中兴客户认证</div>
          <div class="root_sub_row2">March 2002 ZTE Customer Certification</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2004年4月  公司销售额到达800万元/年</div>
          <div class="root_sub_row2">In April 2004, the company's sales reached 8 million yuan per year</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2005年3月  扎管生产线投入</div>
          <div class="root_sub_row2">Rolling pipe production line put into operation in March 2005</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2006年1月  扎管线正式量产</div>
          <div class="root_sub_row2">In January 2006, the rolling pipeline was officially mass-produced</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2007年4月  手动仪表车床改制半自动仪表</div>
          <div class="root_sub_row2">April 2007 Manual instrument lathe reform semi-automatic</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2009年9月  数控设备导入</div>
          <div class="root_sub_row2">September 2009 Digital Control Device Import</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2012年12月 KYB客户认证</div>
          <div class="root_sub_row2">December 2012 KYB customer certification</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2013年5月  通过ISO/TS16949 </div>
          <div class="root_sub_row2">Adoption of ISO/TS 16949 in May 2013</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2015年12月 自动化数控上下料设备开发 </div>
          <div class="root_sub_row2">Development of Automatic CNC Up-and-Down Equipment in December 2015</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2016年6月  自动化数控上下料设备导入</div>
          <div class="root_sub_row2">Automatic CNC Up-and-Down Equipment Import June 2016</div>
        </div>
        <div class="root_row">
          <div class="root_sub_row1">2018年1月  新厂搬迁  更名：宁波市辉昂管业有限公司</div>
          <div class="root_sub_row2">January 2018 New Factory Relocation Renamed: Ningbo Huiang Pipe Industry Co., Ltd</div>
        </div>
      </div>
      <div class="root_img col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img class="img-responsive" src="{{config('app.url')}}/root_pic_1.png" alt="">
      </div>
    </div>

    <h5 class="page-header"></h5>

    <div class="panel-body">
      <div class="root_content col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="root_title">
          公司组织体系　The company organization system
        </div>
      </div>
      <div class="root_img col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img class="img-responsive" src="{{config('app.url')}}/root_pic_2.png" alt="">
      </div>
    </div>

    <h5 class="page-header"></h5>

    <div class="panel-body">
      <div class="root_content col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="root_title">
          加工工艺流程 Processing process
        </div>
      </div>
      <div class="root_img col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img class="img-responsive" src="{{config('app.url')}}/root_pic_3.png" alt="">
      </div>
    </div>

    <h5 class="page-header"></h5>

    <div class="panel-body">
      <div class="root_content col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="root_title">
          品质检测设备 Quality inspection equipment
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="root_row">
            <div class="root_sub_row1">■尺寸形状的检测设备：轮廓仪</div>
            <div class="root_sub_row2">Detecting equipment for size and shape: profiler</div>
          </div>
          <div class="root_row">
            <div class="root_sub_row1">对产品的外观轮廓进行检测</div>
            <div class="root_sub_row2">Detection of product appearance profile</div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="root_row">
            <div class="root_sub_row1">■材料的检测设备：硬度计</div>
            <div class="root_sub_row2">Material detection equipment: Hardenometer</div>
          </div>
          <div class="root_row">
            <div class="root_sub_row1">对原材料材质硬度的检测</div>
            <div class="root_sub_row2">Testing of Hardness of Raw Materials</div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="root_row">
            <div class="root_sub_row1">■材料的检测设备：拉力机</div>
            <div class="root_sub_row2">Equipment for the detection of materials: pull machine</div>
          </div>
          <div class="root_row">
            <div class="root_sub_row1">对产品压力和拉力的检测</div>
            <div class="root_sub_row2">Testing of product pressure and tension</div>
          </div>
        </div>
      </div>
      <div class="root_img col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{config('app.url')}}/root_pic_4.png" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{config('app.url')}}/root_pic_5.png" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{config('app.url')}}/root_pic_6.png" alt="">
          </div>
      </div>
    </div>

    <h5 class="page-header"></h5>

    <div class="panel-body">
      <div class="root_content col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="root_title">
          主要生产设备Main production equipment
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="root_row">
            <div class="root_sub_row1">精轧机（8）台</div>
            <div class="root_sub_row2">Precision mill(8)</div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="root_row">
            <div class="root_sub_row1">自动下料机（20）台</div>
            <div class="root_sub_row2">Automatic Discharge Machine(20)</div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="root_row">
            <div class="root_sub_row1">手动/ 半自动仪表（45）台</div>
            <div class="root_sub_row2">Manual / semi-automatic instrument(45)</div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="root_row">
            <div class="root_sub_row1">NC加工机（26）台</div>
            <div class="root_sub_row2">NC Machines(26)</div>
          </div>
        </div>
      </div>
      <div class="root_img col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <img class="img-responsive" src="{{config('app.url')}}/root_pic_7.png" alt="">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <img class="img-responsive" src="{{config('app.url')}}/root_pic_8.png" alt="">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <img class="img-responsive" src="{{config('app.url')}}/root_pic_9.png" alt="">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <img class="img-responsive" src="{{config('app.url')}}/root_pic_10.png" alt="">
          </div>
      </div>
    </div>

    <h5 class="page-header"></h5>

    <div class="panel-body">
      <div class="root_content col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="root_title">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="root_row">
            <div class="root_sub_row1">全自动NC加工机（19）台  自动上料和下料</div>
            <div class="root_sub_row2">Automatic NC processing machine(19) automatic feed and discharge</div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="root_row">
            <div class="root_sub_row1">压机（6）台</div>
            <div class="root_sub_row2">Press(6)</div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="root_row">
            <div class="root_sub_row1">焊接机（3）台</div>
            <div class="root_sub_row2">Welding machine(3)</div>
          </div>
        </div>
      </div>
      <div class="root_img col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{config('app.url')}}/root_pic_11.png" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{config('app.url')}}/root_pic_12.png" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img class="img-responsive" src="{{config('app.url')}}/root_pic_13.png" alt="">
          </div>
      </div>
    </div>

    <h5 class="page-header"></h5>

    <div class="panel-body">
      <div class="root_content col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="root_title">
          生产推移图 Production progress map
        </div>
      </div>
      <div class="root_img col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img class="img-responsive" src="{{config('app.url')}}/root_pic_14.png" alt="">
      </div>
    </div>

    <h5 class="page-header"></h5>

    <div class="panel-body">
      <div class="root_content col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="root_title">
          销售额构成比例图 Sales Composition Chart
        </div>
      </div>
      <div class="root_img col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img class="img-responsive" src="{{config('app.url')}}/root_pic_15.png" alt="">
      </div>
    </div>

    <h5 class="page-header"></h5>

    <div class="panel-body">
      <div class="root_content col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="root_title">
          主要客户 Principal client
        </div>
      </div>
      <div class="root_img col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img class="img-responsive" src="{{config('app.url')}}/root_pic_16.png" alt="">
        <img class="img-responsive" src="{{config('app.url')}}/root_pic_17.png" alt="">
      </div>
    </div>

  </div>
</div>
@stop
