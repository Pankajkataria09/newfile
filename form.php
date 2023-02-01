<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>data store</title>
</head>
<body>
	<style type="text/css">
		h1{
			background-color: skyblue;
			margin-top: 1px;
			margin: 1px;
		}
		center{
			background-color: lightblue;
			margin-top: 35px; 
			border: solid black 1px;
			width: 40%;
			padding: 35px;
			margin: 10% auto;
			border-radius: 20px;
		}
		p{
			text-align: center;
		}
		label{
			position: absolute;
			padding: 0px 10px;
			background:#0000;
			color: black;
		}
		input{
			margin-left: 20px;
			margin-left: 20%; 
			height: 20px;
		}
		.btn{
			height: 35px;
			width: 50%;
			margin-left: 20px;
			border-radius: 5px;
		}
	</style>
	<center>
		<h1>LOGIN FORM</h1>
	<form action="formaction.php" method="POST">
<p>
	<label for="reg">reg:</label>
	<input type="text" name="reg" id="reg">
</p>

<p>
	<label for="name">name:</label>
	<input type="text" name="name" id="name">
	</p>
<p>
    <label for="email">email:</label>
    <input type="text" name="email" id="email">
    </p>
<p>    
    <label for="password">password:</label>
    <input type="password" name="password" id="password">
    </p>

	 
	 <input class="btn" type="submit" value ="submit">

	</form>
</center>
	


</body>
</html>