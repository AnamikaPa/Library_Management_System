<?php
	$url = 'library.jpg';
?>

<html>
	<title>
		CENTRAL LIBRARY MANAGEMENT
	</title>
	
	<style>
		a:link{color:blue;text-decoration:none;background-color:#B2FF99;}
		a:visited{color:red;text-decoration:none;background-color:#FFFF85;}
		a:hover{color:orange;text-decoration:underline;background-color:#FF704D;}
		a:active{color:0000FF;text-decoration:underline;background-color:#FF704D;}
		body{
			background-image:url(main.jpg);
			background-color:black;
			background-repeat:no-repeat;
			background-size:100%;
			background-attachment:fixed;
		}

		h1.block1{
			font-size: 100px;
			text-shadow: 10px 10px 10px green;
			color: yellow;		
			text-decoration: underline;
		}
		#navmenu,ul.sub1{
			list-style-type: none;
			margin-right: 20px;
		}
		ul#navmenu ul.sub1 li{
			margin-right:90px;
		}
		ul#navmenu li{
			width:100px;
			text-align:center;
			position:relative;
			float:right;
			margin-right: 20px;

		}
		ul#navmenu a{
			text-decoration: none;
			font-size: 25px;
			padding: 5px;
			display:block;
			width:100px;
			height:30px;
			background-color: #4d5d2e;
			color: white;
			border:2px solid gray;
			border-radius: 20px;
		}
		ul#navmenu .sub1 input{
				margin-left: 0px;
				margin-right:20px;
				margin-top: 10px;
				background-color: #1e3c3c;
				color:white;
				padding:5px;
		}
		ul#navmenu li:hover > input{
			background-color: #858585;
			margin-left: 0px;
			margin-right: 20px;
		}
		ul#navmenu li:hover,ul#navmenu li:hover input:hover {
			-webkit-transform:scale(1.1,1.1);
			moz-transform:scale(1.1,1.1);
			transform:scale(1.1,1.1);
		}
		ul#navmenu li:hover input:hover{
		background-color: #633232;
	}
		ul#navmenu ul.sub1{
			display:none;
			position:absolute;
			right:5px;
		}
		ul#navmenu li:hover .sub1{
			display:block;
		}
		ul#navmenu li:hover ul{
			display:block;
			background-color: #cccccc;
			width:210px;
			padding: 5px;
			min-height:100px;
			margin-left: 0px;
			margin-right: 0px;
		}
		p.block2{
			font-size:25px;
			width:400px;
			position: relative;
			margin-left: 50px;
			color:yellow;
			float:left;
			min-height: 100px;
		}
		table.auto{
			table-layout:auto;
			border-color:darkblue;
			border-width:10px;
			color:white;
			font-size: 20px;
		}
		
		#q{
			background-color:darkred;
			display:block;
			font-size:25px;
		}
	</style>	
	<script>
		function validateForm() {
        	var a = document.getElementById("userid").value;
        	if(a== null || a=="" ){
        		alert("Entering USER_ID is must");
        		return false;
        	}
			var re=/^[\w ]+$/;
    		var x = document.getElementById("username").value;
   			if (x == null || x == "") {
        		alert("USER_NAME must be filled out");
        		return false;
   			}
			if(/\d/.test(x))
			{
				alert("Name is INVALID");
				return false;
			}
			if(!re.test(x))
			{
				alert("Error:USER_NAME contains INVALID characters");
				return false;
			}
			
			var y = document.getElementById("password").value;
        	if(y == null || y == ""){
        		alert("PASSWORD is must");
        		return false;
        	}
		}

	</script>
	<body>
		<h1 align="center" class="block1">  
			CENTRAL LIBRARY 
		</H1>

		<ul id="navmenu">
			<li ><a href="" >LOGIN</a>
				<ul class="sub1" color="yellow">
					<form name="myForm" action="submit.php" onsubmit="return validateForm()" method="post">
					<li>USER_ID: 
						<input type="text" ID="userid" name="userid" > 
					</li> 
					<br />
					<li>USER_NAME: 
						<input type="text" ID="username" name="username" > 
					</li>
					<br />
					<li> PASSWORD:<input type="password" ID="password" name="password">
					</li>
					<li> <input type="submit" value="submit">
					</li
					</form>
				</ul>
			</li>
			<li><a href="Q7.php">SIGN UP</a>
			</li>
		</ul>
		<br />
		<br />
		<br />
		<hr />
		<p class="block2"><marquee direction="up" >GOOGLE can bring you back 100,000 answers but  a LIBRARIAN can bring you back the <b>RIGHT ONE</b><br/>
			-TEJAL MALAR
			<br />
			<hr />
			<br />
			A library is like the best person you know-politely quiet but endlessly informative, amazingly knowledgeable but charmingly discrete, open to everyone yet subject to your every whim, and sadly, flammable if one isn't careful.Be careful with yours.<br />
			-ANAMIKA PATEL
			<br />
			<br />
			<hr />
			<br />
			If LOVE was a book...
			Ours would be a LIBRARY..<br />
				-MAHIMA BHOOTRA
			</marquee>
		</p>
			<table class="auto" border="1" width="100%">
	<tr>
		<td  id="q" width="40%"><b>Report</b><br>
		click--><a href="report2.php">REPORT</button></form></td>
		<td id="q" width="30%"><b>Email Id</b><br>
		click-><a href="mailto:mahimabhootra96@gmail.com">email</a></td>
		<td id="q" width="30%"><b>Contact Information</b><br>
		click-><a href="www.svnit.ac.in">Contact Info</a></td> 
	</tr>
</table>
	</body>
</html>

