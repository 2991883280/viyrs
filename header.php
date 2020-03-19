<!--
疯癫工作室官网（1周年庆典版本）
开发者：冷鱼花茶
日期：2019.3.16
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>疯癫工作室</title>
	<link rel="stylesheet" href="css/header.css">
	
</head>
<body>
<nav >
	<!-- logo -->
	<div class="nav-logo">
	
	<img src="img/logo.png" alt="">

	</div>

	<!-- 控制menu -->
	<div class="nav-menu">
		<span></span>
		<span></span>
		<span></span>
	</div>

	<!-- 菜单 -->
	<ul class="nav-list" >
	<!--class="active"-->
		<li><a href="./index.php" >首页</a></li>
		<li><a href="./dy.php?ID=1">作品中心</a></li>
		<li><a href="./cy.php">成员中心</a></li>
		<li><a href="">博客</a></li>
	
	<li>
			<a href="" >更多<div class="carect"></div></a>
			<ul class="menu">
				<li><a href="">不断学习</a></li>
				<li><a href="">不断进步</a></li>
			</ul>
		</li>
		</ul>
		
	
</nav>


<script src="js/jquery.min.js"></script>
<script>
	$(document).click(function(){
		$('.nav-list').removeClass('open')
	})
	$('.nav-menu,.nav-list').click(function(e){e.stopPropagation()})
	$('nav').find('.nav-menu').click(function(e){
		$('.nav-list').toggleClass('open')
	})
	
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");

</script>
