<?php include('server.php') ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>
<style>

#full{
			margin-top:10%;
			width:40%;
			margin-left:30%;
			background-color:#ffffff;
			color:black;
			margin-bottom: 10%;
		}

		.header{
			height:10%;
			text-align:center;
			padding:4%;
			background-color:#595959;
			color:white;

		}

		#form{
			padding:5%;
			text-align:left;
			font-size:24px;
		}
		#input{
			padding:2%;
			width:93%;
		}

		.btn{
			width:30%;
			margin:auto;
			padding:3%;
			background-color:#99cc00;
			color:white;
			margin-top:8%;
			border:none;
			font-size:18px;
			margin-bottom:5%;

		}
</style>
</head>
<body style="background-image:url('/img/back7.jpg')">
<div id="full">
	<div class="header">
		<h2>SEARCH</h2>
	</div>
	
	<form method="post" action="searchbook.php" id="form">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Search Here</label>
			<input type="text" name="search_term" id="input">
		</div>
		<div class="input-group">
			<center><button type="submit" class="btn" name="searchterm"><span>Search</span></button></center>
		</div>
	</form>


	
				
</div>	
</body>
</html>