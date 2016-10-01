<?php
	session_start();
		$name=$_SESSION["username"];
		$hand = @fopen("books.txt","r");
		$a = array();
		$b = array();
		if($hand){
			$i=0;
			while(!feof($hand)){
				$buffer = fgets($hand);
				$a[$i]=$buffer;
				$i++;
			}
		}
?>

<html>
	<head>
		<title>
			BOOK LIBRARY
		</title>
		<style>
		
		body{
			background-image:url(signup.jpg);
			background-color:black;
			background-repeat:no-repeat;
			background-size:100%;
			background-attachment:fixed;
			background-position:0px -150px;
		}

		h1.block1{
			font-size: 70px;
			text-shadow: 5px 5px 5px green;
			color: yellow;		
			text-decoration: underline;
		}
		h3.block1{
			font-size:50px;
			text-shadow: 5px 5px 5px white;
			color:aqua;
		}
		
		#navmenu,ul.sub1{
			list-style-type: none;
			margin-left: 20px;
		}
		#navmenu ul.sub1 li{
			margin-left:110px;
		}
	
		#navmenu li{
			width:300px;
			text-align:center;
			position:relative;
			margin-left: 20px;
			margin-top:5px;
		}
		
		#navmenu a{
			text-decoration: none;
			font-size: 25px;
			padding: 5px;
			display:block;
			min-width:700px;
			height:30px;
			background-color: #4d5d2e;
			color: white;
			border:2px solid gray;
			border-radius: 20px;
		}

		#navmenu .sub1 input{
			width:300px;
			margin-left: 0px;
			margin-right:20px;
			margin-top: 10px;
			background-color: #1e3c3c;
			color:white;
			padding:5px;
		}
	
		#navmenu li:hover > input{
			background-color: #858585;
			margin-left: 10px;
			margin-right: 20px;
		}
		
		#navmenu li:hover,ul#navmenu li:hover input:hover {
			-webkit-transform:scale(1.1,1.1);
			moz-transform:scale(1.1,1.1);
			transform:scale(1.1,1.1);
		}
		
		#navmenu li:hover input:hover{
			background-color: #633232;
		}
		
		#navmenu ul.sub1{
			display:none;
			position:relative;
			right:5px;
		}
	
		#navmenu li:hover .sub1{
			display:block;
		}
		#navmenu li:hover ul{
			display:block;
			background-color: #cccccc;
			width:500px;
			padding: 5px;
			min-height:100px;
			margin-top:0px;
		}
		
		.sub2{
			width:20px;
		}
		</STYLE>
	</head>
	<script>
		function validateForm() {
			var a = document.getElementById("issue_date").value;
			if(a==null || a==""){
				alert("Enter the ISSUE DATE");
				return false;
			}
			var b = document.getElementById("return_date").value;
			if(b==null || b==""){
				alert("Enter the RETURN DATE");
				return false;
			}
			return true;
		}
	</script>
	<body>
	<h1 align="center" class="block1"> <marquee> 
			WELCOME USER
			</marquee>
		</H1>
	<?php include "weluser.php"  ?>	
		
		<h3 align="center" class="block1">BOOKS</H3>
		<ul id="navmenu">
		<?php
			for($u=0;$u<$i;$u++){?>
				<li><a href=""><?php echo $a[$u] ?> </a>
				<ul class="sub1" color="yellow">
					<form action="check.php" onsubmit="return validateForm()" method="post">
						<li>ISSUE DATE (DD/MM/YYYY): 
							<input type="text" ID="issue_date" name="issue_date" >
						</li>
						<li>RETURN DATE (DD/MM/YYYY): 
							<input type="text" ID="return_date" name="return_date" > 
						</li>
						<LI>CONFIRM THE BOOK NAME
							<input type="text" name="book_name" value=<?php echo $a[$u] ?>></LI>
						<LI> YOUR NAME: <input type="text" name="name" value=<?php echo $name?> ></LI>
						<li>
							<button type="submit" name="submit">ISSUE</button>
						</li>
					</form>					
					</ul>
				</li>
			
			<?php } ?>
			</ul>
			<br />
			<br />
	</body>
</html>