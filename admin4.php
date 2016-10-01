<head>
<style>
    .logout{
         text-align:center;
         font-size:50px;
         color:red;
     }
	 body{
	// background-image:url("admin.jpg");
	background-color:black;
	 background-repeat:no-repeat;
	 background-size:400px;
	 background-attachment:fixed;
	 }
	 .big{
			font-size:30px;
			background-color:darkblue;
			color:lightblue;
	 }
	 .big2{
			font-size:30px;
			background-color:lightblue;
			color:darkblue;
	 }
	 .div2{
		 height:40px;
		 width:40px;
		 float:right;
	 }

</style>
</head>
<body>

<h1 class="logout">WELCOME ADMIN</h1>
<form action="main.php">
<button class="big2" onclick="main.php"  style="float:right">LOGOUT</button>
</form>
<br />
<br />
<hr />
<br />
<br />
<br />
<form action="bookform.php">
<button class="big" onclick="bookform.php">ADD BOOK</button>
</form>
</body>
</html>