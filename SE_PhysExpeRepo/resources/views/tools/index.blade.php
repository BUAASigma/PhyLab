	<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PhyLabReportTools</title>
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/seven-style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/mystyle.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/3d-layout.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/canvas-normalize.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/canvas-style.css')}}">
</head> 
<body>
<div class="modal fade" id="successive-difference-modalOk">
    <div class="modal-dialog modal-lab">
        <div class="modal-content">
            <div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h3><span>逐差法&nbsp >&nbsp计算结果 </span></h3>
			</div>
				<div class="table-autoscroll well" style="text-aligh:center;">
					<div class="span7 container" style="width:60%;margin: 0 auto;">
						<div id="s-chart_div"  >
						</div>
						<div class="s-result table table-striped" style="float:left">
						  <div class="row">
							<div class="span3 offset1">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20k="
								/>
								<span id="k">
								  未知数 &nbsp &nbsp &nbsp 
								</span>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20n="
								/>
								<span id="n">
								  未知数
								</span>
							  </p>
							</div>
							<div class="span3">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\sum%20x_{i}="
								/>
								<span id="xSum">
								 &nbsp 未知数 &nbsp &nbsp &nbsp 
								</span>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\sum%20y_{i}="
								/>
								<span id="ySum">
								 &nbsp 未知数
								</span>
							  </p>
							</div>
						  </div>
						  <p></p><p></p>
						  <div class="row">
							<div class="span6 offset1 ">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\overline{a}=\frac{1}{n}\cdot%20(\sum%20y_{i}-\bar{b}\cdot%20\sum%20x_{i}%20)="
								/>
								<span id="a">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						  <p></p>
						  <div class="row">
							<div class="span6 offset1">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\bar{b}=\frac{1}{n}\cdot%20\sum%20\frac{\Delta%20y_{i}}{\Delta%20x_{i}}="
								/>
								<span id="b">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						  <p></p>
						  <div class="row">
							<div class="span6 offset1">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\mu_a(\bar{b})=\sqrt{\frac{\sum%20(b_{i}-\bar{b})}{n(n-1)}}="
								/>
								<span id="muaB">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						</div>
					</div>
				</div>
				<button class="btn btn-block btn-lg btn-danger" data-dismiss="modal"  data-toggle="modal" data-target="#successive-difference-modal" type="button">
					重新计算
				</button>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="successive-difference-modal">
    <div class="modal-dialog modal-lab">
        <div class="modal-content">
            <div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h3><span>逐差法&nbsp >&nbsp数据输入 </span></h3>
			</div>
			<div class="table-autoscroll well">
				<div role="tabpanel" class="tab-pane fade in active" id="lab_1091_1">
					<table class="table table-condensed table-hover table-striped s-coordinate">
						  <thead>
							<tr>
							  <th>
								#
							  </th>
							  <th>
								X轴坐标
							  </th>
							  <th>
								Y轴坐标
							  </th>
							</tr>
						  </thead>
						</table>
					<label>&nbsp 第一组数据</label>
					<table class="table table-condensed table-hover table-striped s-coordinate s-coordinate1">
						  <tbody>
						  </tbody>
						</table>
					<hr />
					<label>&nbsp 第二组数据</label>
					<table class="table table-condensed table-hover table-striped s-coordinate s-coordinate2">
						  <tbody>
						  </tbody>
						</table>
				</div>
			</div>
				<div class="modal-footer span4">
					<div style="float:left">
						<h4><span class="label label-info">
						Supported by
							<a href="http://malash.me/" style="color:#eff">
							  Malash
							</a>
						</span></h4>
					</div>
					<div style="float:right">
						<button class="btn btn-large btn-warning s-btn-example">
							试一试
						</button>
						<button class="btn btn-large s-btn-add-row">
							添加一组
						</button>
						<button class="btn btn-large s-btn-empty">
							清空
						</button>
						<button class="btn btn-large btn-danger s-btn-cacl">
							计算
						</button>
					</div>
				</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="linear-regression-modalOk">
    <div class="modal-dialog modal-lab">
        <div class="modal-content">
            <div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h3><span>线性回归&nbsp >&nbsp计算结果 </span></h3>
			</div>
				<div class="table-autoscroll well" style="text-aligh:center;">
					<div class="span7 container" style="width:60%;margin: 0 auto;">
						<div id="l-chart_div"  >
						</div>
						<div class="l-result table table-striped" style="float:left">
						  <div class="row">
							<div class="span3 offset1">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\overline{x}="
									/>
								<span id="xAvg">
									未知数
								</span>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\overline{y}="
								/>
								<span id="yAvg">
								  未知数
								</span>
							  </p>
							</div>
							<div class="span3">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\overline{xy}="
								/>
								<span id="xyMulAvg">
								  未知数
								</span>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\bar{x}%20\bar{y}="
								/>
								<span id="xAvgYAvgMul">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						  <p></p><p></p>
						  <div class="row">
							<div class="span6 offset1 ">
							  <p>
								 <img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\overline{x^2}="
								/>
								<span id="xSquareAvg">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						  <p></p>
						  <div class="row">
							<div class="span6 offset1">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\overline{y^2}="
								/>
								<span id="ySquareAvg">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						  <p></p>
						  <div class="row">
							<div class="span6 offset1">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20{\overline{x}}^2="
								/>
								<span id="xAvgSquare">
								  未知数
								</span>
							  </p>
							</div>
							<div class="span3">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20{\overline{y}}^2="
								/>
								<span id="yAvgSquare">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						  <p></p>
						  <div class="row">
							<div class="span6 offset1 ">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20a=\overline{y}-b\overline{x}="
								/>
								<span id="a">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						  <p></p>
						  <div class="row">
							<div class="span6 offset1">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20b=\frac{\bar{x}\bar{y}-\overline{xy}}@{{\overline{x}}^2-\overline{x^2}}="
								/>
								<span id="b">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						  <p></p>
						  <div class="row">
							<div class="span6 offset1">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20r=\frac{\overline{xy}-\bar{x}\bar{y}}{\sqrt{({\overline{x}}^2-\overline{x^2})({\overline{y}}^2-\overline{y^2})}}="
								/>
								<span id="r">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						  <div class="row">
							<div class="span6 offset1">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\mu_a(a)=\sqrt{\overline{x^2}}\cdot\mu_a(b)="
								/>
								<span id="muaA">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						  <div class="row">
							<div class="span6 offset1">
							  <p>
								<img src="https://chart.googleapis.com/chart?cht=tx&chl=\Large%20\mu_a(b)=b\cdot\sqrt{\frac1{k-2}(\frac1{r^2}-1)}="
								/>
								<span id="muaB">
								  未知数
								</span>
							  </p>
							</div>
						  </div>
						</div>
					</div>
				</div>
				<button class="btn btn-block btn-lg btn-danger" data-dismiss="modal"  data-toggle="modal" data-target="#linear-regression-modal" type="button">
					重新计算
				</button>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="linear-regression-modal">
    <div class="modal-dialog modal-lab">
        <div class="modal-content">
            <div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h3><span>线性回归&nbsp >&nbsp数据输入 </span></h3>
			</div>
			<div class="table-autoscroll well">
				<div role="tabpanel" class="tab-pane fade in active" id="lab_1091_1">
					<table class="table table-condensed table-hover table-striped l-coordinate">
						  <thead>
							<tr>
							  <th>
								#
							  </th>
							  <th>
								X轴坐标
							  </th>
							  <th>
								Y轴坐标
							  </th>
							</tr>
						  </thead>
						</table>
					<label>&nbsp 第一组数据</label>
					<table class="table table-condensed table-hover table-striped l-coordinate l-coordinate1">
						  <tbody>
						  </tbody>
						</table>
					<hr />
					<label>&nbsp 第二组数据</label>
					<table class="table table-condensed table-hover table-striped l-coordinate l-coordinate2">
						  <tbody>
						  </tbody>
						</table>
				</div>
			</div>
				<div class="modal-footer span4">
					<div style="float:left">
						<h4><span class="label label-info">
						Supported by
							<a href="http://malash.me/" style="color:#eff">
							  Malash
							</a>
						</span></h4>
					</div>
					<div style="float:right">
						<button class="btn btn-large btn-warning l-btn-example">
							试一试
						</button>
						<button class="btn btn-large l-btn-add-row">
							添加一组
						</button>
						<button class="btn btn-large l-btn-empty">
							清空
						</button>
						<button class="btn btn-large btn-danger l-btn-cacl">
							计算
						</button>
					</div>
				</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

   <div class="wrapper wrapper_navbar_top">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
		 　	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img src="./img/phylab_logo_single.svg" href="{{URL::route('index')}}" style="float:left;margin:0 0 0 20px;height:50px;"></img>
			<a class="navbar-brand" href="{{URL::route('index')}}" style="margin:0 40px 0 0px;">PhyLab</a>
		</div>
		<div class="collapse navbar-collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="{{URL::route('index')}}"><span class="glyphicon glyphicon-home"></span>&nbsp主页</a></li>
				<li><a href="{{URL::route('wc_login')}}">社区</a></li>
                <li class="dropdown active">
					<a href="##" data-toggle="dropdown" class="dropdown-toggle">服务<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a data-toggle="modal" data-target="#mymodal-signin"><span class="glyphicon glyphicon-flag"></span>&nbsp实验报告中心</a></li>
						<li class="disabled"><a>其他功能</a></li>
					</ul>
				</li>
				<li><a href="##" data-toggle="modal" data-target="#mymodal-party">反馈</a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
                <li><a data-toggle="modal" data-target="#mymodal-star" href="#">{{$username}}的收藏夹</a></li>
                <li><a href="{{URL::route('logout')}}">登出</a></li>
            </ul>
		</div>
	</nav>
</div>
<div style="postion:relative;"><br/><br/><br/><br/><br/></div>
<canvas id = 'canv' style="position:absolute;top:0px;"></canvas>
		<div class="scene">
		  <div class="level level-1 active">
			<div class="rotater">
			  <div class="elem active">
				<div class="inner inner-3">
					<h2 class="art-heading ch">逐差法计算器</h2>
					<button class="art-btn" data-toggle="modal" data-target="#successive-difference-modal" type="button">立即使用</button>
				</div>
			  </div>
			  <div class="elem">
				<div class="inner inner-4">
					<h2 class="art-heading ch">线性回归分析</h2>
					<button class="art-btn" data-toggle="modal" data-target="#linear-regression-modal" type="button">立即使用</button>
				</div>
			  </div>
			  <div class="elem">
				<div class="inner inner-3">
					<h2 class="art-heading ch">逐差法计算器</h2>
					<button class="art-btn" data-toggle="modal" data-target="#successive-difference-modal" type="button">立即使用</button>
				</div>
			  </div>
			  <div class="elem">
				<div class="inner inner-4">
				  <h2 class="art-heading ch">线性回归分析</h2>
					<button class="art-btn" data-toggle="modal" data-target="#linear-regression-modal" type="button">立即使用</button>
				</div>
			  </div>
			
			</div>
		  </div>
	</div>
		<div class="nav-top" style="margin-top:12vh;">
		<button class="btn btn-danger" id="btnTitle">
			<h2 class="nav-top__heading" style="text-aligh:center;">
				<span class="nav-top__btn up ch">-</span>
				<span class="ch">小工具</span>
				<span class="nav-top__btn down">-</span>
			</h2>
		</button>
		</div>
		<div class="nav-bot" style="margin-bottom:8vh">
			 <span class="nav-bot__btn left"></span>
			 <span class="nav-bot__pagi active" data-page="1"></span>
			 <span class="nav-bot__pagi" data-page="2"></span>
			 <span class="nav-bot__pagi" data-page="3"></span>
			  <span class="nav-bot__pagi" data-page="4"></span>
			 <span class="nav-bot__btn right"></span>
		</div>
    </div>
	<div class="wrapper wrapper_navbar_foot">
		<nav class="navbar navbar-inverse navbar-fixed-bottom" style="min-height:20px;">
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right text-ch"  style="padding-top:0.25%;">
					<li class="text-white ch" style="float:right;opacity:0.7;font-size:13px">Developed By BUAA-SCSE 软件攻城队&nbsp &nbsp &nbsp &nbsp &nbsp </li>
				</ul>
			</div>
		</nav>
	</div>
	
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/phycacl.js"></script>
    <script src="js/successive-difference.js"></script>
	<script src="js/linear-regression.js"></script>
	<script id="google-jsapi"></script>
	<script id="google-jsapi2"></script>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-25658471-1']);
      _gaq.push(['_setDomainName', 'malash.me']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
	<script src="js/3d-layout.js"></script>
	<script type="text/javascript">
		document.getElementById("btnTitle").setAttribute("disabled","disabled")
	</script>
	<script src="js/canvas-draw.js"></script>
  </body>
</html>
