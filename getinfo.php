<?php
	session_start();
	$name=$_SESSION["username"];
	$j=0;
	?>
<html>
<head>
	<style>
		body{
			background-image:url(signup.jpg);
			background-color:black;
			background-repeat:no-repeat;
			background-size:100%;
			background-attachment:fixed;
			background-position:0px -150px;
		}
		h1{
			color:white;
			font-size:35px;
		}
		.colow{
			color:white;
			font-size:25px;
		}
		.abc{
		font-size:20px;
	}
	</style>
</head>
<body>
<h1> INFORMATION ABOUT ISSUED BOOKS </H1>
<p class="colow">
<?php
$a=array();
$b=array();
$c=array();
$d=array();
$e=array();
	
	$handle= @fopen("bookissue.txt","r");
	$i=0;
		$search= $name;
		if($handle)
		{
			while(!feof($handle)){
				$buffer=fgets($handle);
				list($a[$i],$b[$i],$c[$i],$d[$i])=split(",",$buffer);
					
				if(strcmp($search,$d[$i])==0||strcmp($search,$d[$i])==-2){
					$e[$j]=$i;
					$j++;
					echo  "<br>You had issued the book <b>".$c[$i]." </b>on<b> ".$a[$i] . "</b> and suppose to return on <b> ".$b[$i] ."</b>"  ;
				}
				$i++;
			}
			ECHO "<br> <br>";
		}
		fclose($handle);

?>
</p>
<form  action="library book.php">
<button class="abc" style="float:right">BACK</button>
</form>
</body>
</html>
