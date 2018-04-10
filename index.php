<!DOCTYPE html>
<html>
<head>
	<title>DEMO</title>
	<style>
	.txt {
		position:absolute;
		top:100px;
		left:350px;
		color: #02422F;
		font-size: 45px;
	}
	
	.txt1 {
		position:absolute;
		top:350px;
		left:500px;
		color: black;
		font-size: 45px;
	}
	
	img{
		opacity: 0.8;
		 height: 100%;
		 width: 100%;
	}
	</style>
</head>
<body>
<img src="img.jpg"></img>
	<div class="txt">
		<strong>WELCOME TO HNG INTERNSHIP 4.0</strong>
	</div>
	<div class="txt1">
	 <?php echo "The time is " . date("h:i:sa"); ?>
	</div>
</body>
</html>