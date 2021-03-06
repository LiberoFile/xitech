<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
 	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犀视科技</title>
    <meta name="keywords" content="犀视,客流分析,客流系统,客流计数器,犀视科技">
    <meta property="og:title" content="犀视科技" >
	<!-- Bootstrap -->
	<link href="/xitech/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	
	<![endif]-->
	<script src="/xitech/Public/video.js"></script>
	<!--video所需css文件-->
	<link href="/xitech/Public/video-js.css" rel="stylesheet" type="text/css">
	<!--video所需flash文件-->
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
	      <a class="navbar-brand" href="#">上海犀视信息科技有限公司</a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div id="navbar-example" class="collapse navbar-collapse">
	      <ul class="nav navbar-nav navbar-right">
	      	<li class="active"><a href="#home">首页</a></li>
	        <li><a href="#about">产品介绍</a></li>
           	<li><a href="#team">犀视团队</a></li>
           	<li><a href="#contact">联系我们</a></li>	
	       <!-- <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">登录<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">员工登录</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">外部登录</a></li>
	          </ul>
	        </li>-->
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
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
				  <!--  <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
				  </ol>

  					<!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  	<div class="item active">
				      <img src="/xitech/Public/images/slide1.jpg" alt="..." class="img-responsive">
				      <div class="carousel-caption" style="right:9%;left:9%;">
				        <h4>犀视科技</h4>
				        <p>上海犀视信息科技有限公司成立于2013年9月，在上海、厦门两地设有研发中心。犀视科技专注于计算机视觉技术研究及其在安全监控、智能家居、商业分析中的应用。</p><p class="hidden-xs">我们的产品包括视频检索系统和实时客流分析平台wevisit.net。</p>
						
				      </div>
				    </div>
				    <div class="item">		
				      	<img src="/xitech/Public/images/peoplecounting-collage.jpg" alt="..." class="img-responsive">
				      	<div class="carousel-caption" style="right:9%;left:9%;">
					        <h4>WEVISIT.NET 1.0</h4>
					        <p>WEVISIT.NET是基于实时视频流的客流分析云平台，主要用于分析通道口出入人数并基于统计数据生成商业智能报告。</p>
					        <a href="#wevisit" class="btn btn-primary btn-sm">了解更多</a>
				      	</div>
				    </div>
				  <!--   <div class="item">				
				      	<img src="/xitech/Public/images/slide3.jpg" alt="..." class="img-responsive">
				      	<div class="carousel-caption" style="right:9%;left:9%;">
					       <h4>视频检索</h4>
					        <p>在海量视频中找到感兴趣的对象。<p>
					        <a href="#video" class="btn btn-primary btn-sm">了解更多</a>
				      	</div>
				    </div> -->
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
					<h3>WEVISIT.NET 1.0</h3>
					<hr style="max-width:100px">
				</div>
				<h4>INTRODUCTION</h4>
				<p style="text-indent:2em">We're ready to deliver public or private cloud based people counting service. With powerful detection and tracking engine, we're able to analysis video in real time to count the number of people passing by and in which direction. With related 3rd party API, such as weather, POS records, events, customer properties (age, sex, loyalty), we provide inside footfall analysis which is a valuable quantified tool for making business decision.</p>	
				<h4>FEATURES</h4>
				<p style="text-indent:2em">Features of wevisit.net solutions are highlighted as below:</p>
				<ul>
				  <li>支持主流厂商IPC，仅需获取视频流RTSP地址；
Support IPC from mainstream manufactures and only require RTSP video stream from the IPC.</li>
				  <li>实时视频流数据分析；
Video analysis in real-time.</li>
				  <li>用户可任意设置检测区域；
Customer defined detect zone.</li>
				  <li>检测速度快，准确定位场景中人的位置，可单人多人同时进出检测区域；
Fast people detection and detect single/multiple person passing in both directions simultaneously.
</li>
				  <li>自动判断人运动的方向，多方向计数；
Automatically track people moving paths and bi-directionally count people .
</li>
				  <li>自适应室内外场景，对光照、阴影、动态背景等干扰因素不敏感；
Work irrespective of indoor/outdoor ambient conditions and insensitive to disturbing factors, such as light, shadow, dynamic background.
</li>
				  <li>在成像清晰、人头轮廓明显、尺寸满足要求的条件下，准确率高；
High people detection accuracy when the image is clear and with suitable people head contour and size.
</li>
				  <li>平台BS架构，用户可通过浏览器访问前后端；
B/S structure platform. User can visit webapp and dashboard through web browser.
</li>
				  <li>平台基于Linux开发，稳定性高；
Linux based platform with high stability.
</li>
				  <li>用户权限管理；
User rights management.</li>
				  <li>商业智能报告PDF或EXCEL导出；
Export BI report with PDF/EXCEL.</li>
				  <li>邮件推送设备故障信息；
Push device error messages by Email.</li>
				  <li>远程维护，在线升级。
Remote maintaince and online software update.</li>
				</ul>
				<h4>HOW IT WORKS</h4>
				<div class="text-center">
					<a><img src="/xitech/Public/images/0.png" alt="" class="img-thumbnail"></a>
				</div>
				
				<h4>DEMO: HOW TO COUNT PEOPLE</h4>
				<div class="row">
					<div id="video_show" class="col-xs-12 col-sm-6 col-md-6">
						<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="100%" height="auto"
						    src="/xitech/Public/01.mp4"  poster="/xitech/Public/images/peoplecounting-collage.jpg"
						      data-setup="{}">
						    <source src="http://imgcache.qq.com/tencentvideo_v1/player/TencentPlayer.swf?max_age=86400&amp;v=20140714" type='video/mp4' />
						  
						    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
						 </video>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<video id="example_video_2" class="video-js vjs-default-skin" controls preload="none" width="100%" height="auto"
						    src="/xitech/Public/02.mp4"  poster="/xitech/Public/images/peoplecounting-collage.jpg"
						      data-setup="{}">
						    <source src="http://imgcache.qq.com/tencentvideo_v1/player/TencentPlayer.swf?max_age=86400&amp;v=20140714" type='video/mp4' />
						  
						    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
						 </video>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<video id="example_video_3" class="video-js vjs-default-skin" controls preload="none" width="100%" height="auto"
						    src="/xitech/Public/03.mp4"  poster="/xitech/Public/images/peoplecounting-collage.jpg"
						      data-setup="{}">
						    <source src="http://imgcache.qq.com/tencentvideo_v1/player/TencentPlayer.swf?max_age=86400&amp;v=20140714" type='video/mp4' />
						  
						    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
						 </video>
					</div>
				</div>
				<h4>HARDWARE AND SOFTWARE</h4>
				<p style="text-indent:2em">The platform are easy to install and test within one working day.</p>
				<h4>DEMO: HOW TO COUNT PEOPLE</h4>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr><th></th><th>店铺<br>single shop</th><th>连锁店<br>chain shops</th><th>商超<br>mall<br>supermarke</th></tr>
						</thead>
						<tbody>
							<tr>
								<td>硬件<br>hardware</td>
								<td>IPC × n<br>服务器× 1<br>server×1<br>计数盒子 × 0<br>people-counting-box×0</td>
								<td>IPC × n<br>服务器× 1<br>server×1<br>计数盒子 × m<br>people-counting-box×m</td>
								<td>IPC × n<br>服务器× 1<br>server×1<br>计数盒子 × m<br>people-counting-box×m</td>
							</tr>
							<tr>
								<td>软件<br>software</td>
								<td>检测器× n<br>XPCDetecto</td>
								<td>检测器× n<br>XPCDetecto</td>
								<td>检测器× n<br>XPCDetecto</td>
							</tr>
						</tbody>
					</table>	
				</div>	
				<p>&nbsp;&nbsp;n = the number of detect zone (ROI)<br>
					&nbsp;&nbsp;1 people-counting-box has 4-8 XPCDetectors.</p>			
			</div>
			
			<div id="video" class="col-xs-12 col-sm-12 col-md-12">
			
		 <!--	<div id="video" class="col-xs-12 col-sm-12 col-md-12">
				<div class="text-center">
					<h3>视频检索</h3>
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
			</div>-->
		</div>
		<div id="team" class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<h3>犀视团队</h3>
				<hr style="max-width:100px">	
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 text-center">
				 <div class="thumbnail">
			      <img src="/xitech/Public/images/oxh.png" alt="..." class="img-responsive img-circle">
			      <div class="caption">
			        <h4>欧湘辉</h4>
					<p>五年研发经验的软件工程师</p>
			        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#IDcard1">了解更多</button>		  
				  </div>
			    </div>	
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 text-center">
				 <div class="thumbnail">
			      <img src="/xitech/Public/images/oxl.png" alt="..." class="img-responsive img-circle">
			      <div class="caption">
			        <h4>欧湘龙</h4>
					<p>多年开发经验的软件工程师</p>
			        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#IDcard2">了解更多</button>
			      </div>
			    </div>	
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 text-center">
				 <div class="thumbnail">
			      <img src="/xitech/Public/images/ytf.png" alt="..." class="img-responsive img-circle">
			      <div class="caption">
			        <h4>杨添福</h4>
					<p>两年经验的PHP工程师</p>
			        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#IDcard3">了解更多</button>
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
		        <h4 class="modal-title" id="myModalLabel">欧湘辉</h4>
		      </div>
		      <div class="modal-body">
		        欧湘辉已经从事软件开发五年，主要是在计算机视觉领域。开发过视频检索系统、客流分析系统
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
		        <h4 class="modal-title" id="myModalLabel">欧湘龙</h4>
		      </div>
		      <div class="modal-body">
		        欧湘龙从事多年的软件开发工作，参与过的项目有视频检索系统、客流分析系统
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
		        <h4 class="modal-title" id="myModalLabel">杨添福</h4>
		      </div>
		      <div class="modal-body">
		        杨添福从事PHP开发两年，参与了客流分析系统的前端的开发
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
				<div class="col-xs-12 col-sm-4 col-md-2 col-md-offset-4">
					 <div class="thumbnail">
						 <div class="caption">
							<p>QQ联系我们</p>
					     </div>
				      	 <img src="/xitech/Public/images/wevisit.net-qq.jpg" alt="..." class="img-responsive">
				    </div>	
				</div>
				<div class="col-xs-12 col-sm-4 col-md-2 ">
					 <div class="thumbnail">
						 <div class="caption">
							<p>关注微信公众号</p>
					     </div>
				      	 <img src="/xitech/Public/images/wevisit-wechat-qrcode.jpg" alt="..." class="img-responsive">
				    </div>	
				</div>
			</div>
		</div>
		
	</div>
	<hr>
	<footer>
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<p>&copy; 2014-2015 上海犀视信息科技有限公司 All Rights Reserved.</p>
			<p>沪ICP备15051127号-1</p>
		</div>
	</footer>

 <script src="/xitech/Public/jquery/1.11.3/jquery.min.js"></script>
 
 <script src="/xitech/Public/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 $('body').scrollspy({ target: '#navbar-example' });

	var w = $("#video_show").width();
	$("#example_video_3").height(3/4*w);
	$("#example_video_1").height(3/4*w);
	$("#example_video_2").height(3/4*w);
 </script>
 </body>
 </html>