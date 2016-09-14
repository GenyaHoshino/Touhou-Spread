
<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>HomePage</title>

    	<!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">

	    <link href="fonts/REIMU-webfont/stylesheet.css" rel="stylesheet">

	    <link href="css/style.css" rel="stylesheet">

    	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

	    <!--
	    “行（row）”必须包含在 .container （固定宽度）或 .container-fluid （100% 宽度）中
		只有“列（column）”可以作为行（row）”的直接子元素。 -->

		<!-- 超小屏幕xs 手机 (<768px) 	小屏幕sm 平板 (≥768px)	中等屏幕md 桌面显示器 (≥992px)	大屏幕lg 大桌面显示器 (≥1200px) -->

		<!-- xs lg -->

	</head>
	<body>

		<div class="container-fluid">
			<div class="row">
				<header class="header blur col-xs-12"></header>
				<div class="contentBg col-xs-12">
					<div class="row">
						<div class="profileBg col-xs-12 col-lg-4"></div>
					</div>
				</div>
				<div class="content col-xs-12">
					<div class="row">
						<div class="profile col-xs-12 col-lg-4">
							<div class="row">
								<div class="avatar col-xs-12">
							<!-- 		<img src="http://tva3.sinaimg.cn/crop.900.257.114.114.180/a48acbbbjw8f7omn0bek7j20xc1bpapq.jpg" alt=""> -->
									<img src="img/avatar.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="footer blur col-xs-12"></footer>
			</div>
			<div class="row">
				<div class="music col-xs-12 col-lg-4 col-lg-push-4">
					<i class="glyphicon glyphicon-play" id="btn"></i>
					<i class="glyphicon glyphicon-forward" id="forward"></i>
				</div>
			</div>
		</div>
		
		
		<audio id="player" src=""></audio>


	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <!--  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script> -->
	   	<script src="js/jquery.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/player.js"></script>
	    <script src="js/script.js"></script> 
	</body>
</html>