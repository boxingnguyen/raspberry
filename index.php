<!DOCTYPE html>
<html>
<head>
	<title>Controller</title>
	<script src="bower_components/jquery/dist/jquery.min.js" async></script>
	<script src="main.js" type="text/javascript" async></script>
	<style type="text/css">
		h1 {
			text-align: center;
		}
		.btn {
			margin: 15% 32%;
			position: relative;
		}
		.btn1 {
			position: absolute;
			margin: -45px 0 0 71px; /* top right bottom left*/
		} 
		.btn2 {
			position: absolute;
			margin: 102px 0 0 72px;
		}
		.btn3 {
			position: absolute;
			margin: 27px 0 0 157px;
		}
		.btn4 {
			margin: 27px 0 0 -17px;
		}
		button.btn-camera	{
			position: absolute;
			margin: 28px 0px 0 247px;
			width: 90px;
			height: 62px;
			border-radius: 5px;
		}
		button {
			width: 83px;
			height: 62px;
			border-radius: 8px;
		}
	</style>
</head>
<body>
	<h1>Controller</h1>
	<div class="btn">
		<button class="btn1">forward</button>
		<button class="btn2">backward</button>
		<button class="btn3">right</button>
		<button class="btn4">left</button>
		<button class="btn-camera">Stop</button>
	</div>
</body>
</html>
