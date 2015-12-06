<!DOCTYPE html>
<html>
	<head>
 	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犀视科技</title>
    <meta name="keywords" content="犀视,客流分析,客流系统,客流计数器,犀视科技">
    <meta property="og:title" content="犀视科技" >
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<style>
	.grayBlock{
		background:#f5f5f5;
	}
	.carousel-caption1{
  	position:absolute;
	right:9%;
	left:9%;
	z-index:10;
	padding-top:10px;
	padding-bottom:0px;
	color:#000;
	text-align:center;
	text-shadow:0 1px 2px rgba(0,0,0,.6);
	}
	</style>

 </head>
 <body data-spy="scroll" data-target="#navbar-example">
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-example" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">上海犀视科技有限公司</a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div id="navbar-example" class="collapse navbar-collapse">
	      <ul class="nav navbar-nav navbar-right">
	      	<li class="active"><a href="#home">首页</a></li>
	        <li><a href="#about">产品介绍</a></li>
           	<li><a href="#team">犀视团队</a></li>
           	<li><a href="#contact">联系我们</a></li>	
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">登录<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">员工登录</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">外部登录</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div id="home" class="row">
			<div>&nbsp;</div>
			<div>&nbsp;</div>
			<div>&nbsp;</div>
			<div>&nbsp;</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

  					<!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  	<div class="item">
				      <img src="images/slide1.jpg" alt="..." class="img-responsive">
				      <div class="carousel-caption" style="right:9%;left:9%;">
				        <h4>基于客流分析的扩展</h4>
				        <p>在客流分析的基础，可结合客户提供的数据进行功能上的扩展</p>
						<a href="#wevisitmore" class="btn btn-primary btn-sm">了解更多</a>
				      </div>
				    </div>
				    <div class="item active">				
				      	<img src="images/slide2.jpg" alt="..." class="img-responsive">
				      	<div class="carousel-caption" style="right:9%;left:9%;">
					        <h4>客流分析</h4>
					        <p>客流分析是基于实时视频流的客流分析云平台，主要用于分析通道口出入人数并基于统计数据生成商业智能报告。</p>
					        <a href="#wevisit" class="btn btn-primary btn-sm">了解更多</a>
				      	</div>
				    </div>
				    <div class="item">				
				      	<img src="images/slide3.jpg" alt="..." class="img-responsive">
				      	<div class="carousel-caption" style="right:9%;left:9%;">
					       <h4>视频检索</h4>
					        <p>视频检索能将原始海量视频浓缩为几分钟的视频摘要片段，缩短了查看视频时间，方便快速浏览，锁定检索目标对象。<p>
					        <a href="#video" class="btn btn-primary btn-sm">了解更多</a>
				      	</div>
				    </div>
				  </div>

			  		<!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
		<div id="about" class="row">
			<div id="wevisit" class="col-xs-12 col-sm-12 col-md-12">
				<div class="text-center">
					<h3>客流分析系统</h3>
					<hr style="max-width:100px">
				</div>
				<h5>1、什么是客流分析系统</h5>
				<p style="text-indent:2em">客流分析系统是基于实时视频流的客流分析云平台，主要用于分析通道口出入人数并基于统计数据生成商业智能报告。平台支持BS管理页面，其主要包括用户权限管理、计数盒子管理、客流数据管理、WEBAPP客户端管理、第三方数据接口管理。计数盒子24小时运行，内置检测器（客流识别跟踪软件）和WEB服务器，通过WEB在检测器上设定区域和方向，分析RTSP视频流以统计通过人数。授权用户通过WEB查看实时和检索历史客流数据。</p>	
				<div class="table-responsive">
					<table class="table">	
						<thead>
							<tr><th>名称</th><th> </th><th>描述</th><th>单位</th><th>备注</th></tr>
						</thead>
						<tbody>
							<tr><td>wevisit.net</td><td></td><td>基于实时视频流的客流分析云平台</td><td></td><td></td></tr>
							<tr><td>感兴趣区域</td><td>ROI</td><td>标记用户感兴趣的区域以获取通过区域或区域内客流信息</td><td></td><td></td></tr>
							<tr><td>数字摄像机</td><td>IPC</td><td>获取ROI范围的实时视频流</td><td></td><td></td></tr>
							<tr><td>计数盒子</td><td>People counting box</td><td>用于分析实时视频流的硬件设备，每个计数盒子支持接入4-8路IPC</td><td></td><td></td></tr>
							<tr><td>检测器</td><td>XPCDetector</td><td>客流检测跟踪软件</td><td></td><td></td></tr>
							<tr><td>客流量</td><td>NoC(Number of Customers)</td><td>进入店铺的顾客人数</td><td>人次</td><td>以进人次作为客流量数据</td></tr>
							<tr><td>滞留量</td><td>SC(Staying Customers)</td><td>店内实时顾客人数</td><td>人次</td><td>进人次 - 出人次</td></tr>
							<tr><td>平均滞留时间</td><td>AST(Average Stay Time)</td><td>顾客在店内平均停留时间</td><td>分钟</td><td></td></tr>
							<tr><td>客流密度</td><td>CD(Customer Density)</td><td>反映出某时段某区域顾客密集程度</td><td>人/m<sup>2</sup></td><td>区域总人数/区域面积</td></tr>
							<tr><td>集客力</td><td>UAA(Unit Arer Attraction)</td><td>反映出门店的吸引力</td><td>人次</td><td>NoC/门店面积</td></tr>
						</tbody>
					</table>
				</div>	
				<h5>2、解决方案</h5>
				<div class="table-responsive">
				  <table class="table">
				  	<thead>
						<tr><th></th><th>店铺</th><th>连锁店</th><th>商超</th></tr>
					</thead>
					<tbody>
						<tr><td>硬件</td><td>IPC × n<br>服务器 × 1<br>计数盒子 × 0</td><td>IPC × n<br>服务器 × 1<br>计数盒子 × m</td><td>IPC × n<br>服务器 × 1<br>计数盒子 × m</td></tr>
						<tr><td>软件</td><td>检测器 × n</td><td>检测器 × n</td><td>检测器 × n</td></tr>
						<tr><td>可选</td><td>云服务器</td><td>云服务器</td><td>云服务器</td></tr>
					</tbody>
				  </table>
				</div>
				<h5>3、如何实施</h5>
				<div class="table-responsive">
				  <table class="table">
				  	<thead>
						<tr><th>1准备</th><th>2项目启动</th><th>3工程施工</th><th>4系统设置</th><th>5试运行</th><th>6项目验收</th></tr>
					</thead>
					<tbody>
						<tr><td>现场勘查报告</td><td>材料设备申请</td><td>施工布线摄像头安装</td><td>摄像头调试<br>客流检测器调试<br>用户权限设置</td><td>客流分析系统自检<br>客户培训</td><td>工程验收<br>客流分析系统验收<br>项目完成报告</td>
					</tbody>
				  </table>
				</div>
			</div>
			<div id="video" class="col-xs-12 col-sm-12 col-md-12">
				<div class="text-center">
					<h3>视频摘要系统</h3>
					<hr style="max-width:100px">
				</div>
				<p style="text-indent:2em">视频摘要又称视频浓缩，是对视频内容的一个简单概括，以自动或半自动的方式，先通过运动目标分析，提取运动目标，然后对各个目标的运动轨迹进行分析，将不同的目标拼接到一个共同的背景场景中，并将它们以某种方式进行组合。视频摘要在视频分析和基于内容的视频检索中扮演着重要角色。</p>
			</div>
			<div id="wevisitmore" class="col-xs-12 col-sm-12 col-md-12 text-center">
				<div class="text-center">
					<h3>基于客流系统的扩展</h3>
					<hr style="max-width:100px">				
				</div>
				<p style="text-indent:2em">基于客流系统的扩展就是在客流分析上，加上各种数据的分析，可以说视一种大数据的分析。</p>
			</div>
		</div>
		<div id="team" class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<h3>犀视团队</h3>
				<hr style="max-width:100px">	
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 text-center">
				 <div class="thumbnail">
			      <img src="images/121.jpg" alt="..." class="img-responsive img-circle">
			      <div class="caption">
			        <h4>陈奕迅</h4>
					<p>他唱的了歌，演的了电影，他……</p>
			        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#IDcard1">了解更多</button>
			      </div>
			    </div>	
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 text-center">
				 <div class="thumbnail">
			      <img src="images/121.jpg" alt="..." class="img-responsive img-circle">
			      <div class="caption">
			        <h4>陈奕迅</h4>
					<p>他唱的了歌，演的了电影，他……</p>
			        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#IDcard2">了解更多</button>		  
				  </div>
			    </div>	
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 text-center">
				 <div class="thumbnail">
			      <img src="images/121.jpg" alt="..." class="img-responsive img-circle">
			      <div class="caption">
			        <h4>陈奕迅</h4>
					<p>他唱的了歌，演的了电影，他……</p>
			        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#IDcard3">了解更多</button>
			      </div>
			    </div>	
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 text-center">
				 <div class="thumbnail">
			      <img src="images/121.jpg" alt="..." class="img-responsive img-circle">
			      <div class="caption">
			        <h4>陈奕迅</h4>
					<p>他唱的了歌，演的了电影，他……</p>
			        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#IDcard4">了解更多</button>
			      </div>
			    </div>	
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="IDcard1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">陈奕迅</h4>
		      </div>
		      <div class="modal-body">
		        介绍内容……
		      </div>
		      <div class="modal-footer">
		       	<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="IDcard2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">陈奕迅2</h4>
		      </div>
		      <div class="modal-body">
		        介绍内容……
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="IDcard3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">陈奕迅3</h4>
		      </div>
		      <div class="modal-body">
		        介绍内容……
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>		       
		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="IDcard4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">陈奕迅4</h4>
		      </div>
		      <div class="modal-body">
		        介绍内容……
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		      </div>
		    </div>
		  </div>
		</div>
		<div id="contact" class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<h3>联系犀视</h3>
				<hr style="max-width:100px">
				<p>xx省xx市xx区xx路</p>
				<p>电话：11234577542</p>
			</div>
		</div>
		
	</div>
	<hr>
	<footer>
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<p>&copy; 2014-2015 上海犀视科技有限公司 All Rights Reserved.</p>
		</div>
	</footer>

 <script src="jquery/1.11.3/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script type="text/javascript">
 $('body').scrollspy({ target: '#navbar-example' })
 </script>
 </body>
 </html>
