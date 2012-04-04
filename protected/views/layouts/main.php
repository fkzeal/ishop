<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>ishop</title>
		<meta name="description" content="" />
		<meta name="author" content="softwware" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link type="text/css" rel="stylesheet" href="css/bootstrap/bootstrap.css"/>
		<link type="text/css" rel="stylesheet" href="css/bootstrap/bootstrap-responsive.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/application.css"/>		
		
		<script type="text/javascript" src="js/jquery/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>			
		<script type="text/javascript" src="js/bootstrap/bootstrap-transition.js"></script>		
		<script type="text/javascript" src="js/bootstrap/bootstrap-tab.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap-carousel.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap-typeahead.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap-scrollspy.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap-modal.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap-button.js"></script>	
		<script type="text/javascript" src="js/bootstrap/bootstrap-collapse.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap-popover.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap-tooltip.js"></script>		
		<script type="text/javascript" src="js/bootstrap/bootstrap-alert.js"></script>
		<script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
		<script type="text/javascript" src="js/application.js"></script>		
		
	</head>
	<body>
		<div class="navbar ">
			<div class="navbar-inner">
				<div class="container">
					  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
					 </a> 
					 <a class="brand" href="#">欢迎光临 iShop!</a>
					 <div class="nav-collapse"> 
						    <ul class="nav">
						        <li><a href="<?php echo Yii::app()->createUrl('site/login');?>">登录</a></li>						        
						        <li><a href="#">注册</a></li>
							</ul>							
							<ul class="nav pull-right">
								  <li ><a href="index.html"><i class="icon-home icon-white"></i>iShop</a></li>
								  <li><a href="#" ><i class=" icon-shopping-cart icon-white"></i>购物车</a></li>	
								  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">会员服务<b class="caret"></b></a>
								    <ul class="dropdown-menu">
								    	<li><a href="#">我的订单</a></li>								    	
									    <li><a href="#">我的积分</a></li>
									    <li><a href="#">个人信息</a></li>
									    <li class="divider"></li>
									    <li><a href="#">我要注销 </a></li>									    								    									    
								    </ul>
								  </li>	
								  <li><a href="#"><i class="icon-comment icon-white"></i>留言板</a></li>							  
								  <li><a href="#">ishop论坛</a></li>
								  <li class="divider-vertical"></li>								  
								  <li class="dropdown">
								  	<a href="#" class="dropdown-toggle" data-toggle="dropdown">管理员<b class="caret"></b></a>
								    <ul class="dropdown-menu">
								    	<li><a href="#">管理员登录</a></li>
								    	<li class="divider"></li>
									    <li><a href="#">商品管理</a></li>
									    <li><a href="#">订单管理</a></li>
									    <li><a href="#">投诉管理 </a></li>
									    <li><a href="#">用户管理 </a></li>									    									    
								    </ul>
								  </li>
							</ul>
					 </div>
				</div>
			</div>
		</div>
		<header class="row">
			<div id="logo" class="span3 offset1">
					<img src="images/logo.png" alt="logo" />
			</div>
			<div class="span6 offset1">
				<form class="well form-search" >
				  <input type="search"  class="span4 search-query" style="margin:0 5px 0 15px;" placeholder="输入您想要的宝贝">
				  <button type="submit" class="btn btn-warning"><i class="icon-search"></i>搜索</button>				  
				</form>				
			</div>			
		</header>
		<nav class="row">				
				<ul id="menu" class="span3 offset1">
					<li ><a href="index.html"><i class="icon-home"></i>iShop</a></li>
					<li ><a href="#floor2"><i class="icon-fire"></i>品牌热销</a></li>
					<li ><a href="#floor1"><i class="icon-list-alt"></i>推荐专区</a></li>
					<li ><a href="#floor3"><i class="icon-gift"></i>新品上架</a></li>
					<li ><a href="#"><i class=" icon-shopping-cart"></i>购物车</a></li>
					<li ><a href="#"><i class=" icon-leaf"></i>我的订单</a></li>
					<li ><a href="#"><i class=" icon-asterisk"></i>我的积分</a></li>
					<li ><a href="#"><i class=" icon-comment"></i>留言板</a></li>									
				</ul> 
		</nav>
		
			
		<?php echo $content; ?>
		
		<hr>
		<footer >
					<ul>
						<li><a href="#" >关于我们</a></li>
						<li><a href="#" >联系我们</a></li>
						<li><a href="#" >人才招聘</a></li>
						<li><a href="#" >商家入驻</a></li>						
						<li><a href="#" >广告服务</a></li>
						<li><a href="#" >移动终端</a></li>
						<li><a href="#" >友情链接</a></li>
						<li><a href="#" >销售联盟</a></li>
						<li><a href="#" >爱购论坛</a></li>										
					</ul>
					<p>Copyright 2011 - 2012 loveshopping.com All Rights Reserved京ICP证100557号 京公网安备110105001124号</p>					
					<div class="footer-image">
						<img src="images/footer1.gif" alt="footer1"/>
						<img src="images/footer2.jpg" alt="footer2"/>
						<img src="images/footer3.jpg" alt="footer3"/>
						<img src="images/footer4.png" alt="footer4"/>
						<img src="images/footer5.gif" alt="footer5"/>
					</div>
		</footer>	
		
	</body>
</html>
