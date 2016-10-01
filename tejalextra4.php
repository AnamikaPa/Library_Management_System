<?php 
	session_start();
	$name=$_SESSION["username"];
	$j=0;
?>
<html>
<head>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="username">USERNAME</input>
<button onclick="<?php echo $_SERVER['PHP_SELF'];?>">OK</button>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$a=array();
$b=array();
$c=array();
$d=array();
$e=array();
	
	$handle= @fopen("tejal.txt","r");
	$i=0;
		$search= $name;
		if($handle)
		{
			ECHO "<br><br>";
			while(!feof($handle)){
				$buffer=fgets($handle);
				list($a[$i],$b[$i],$c[$i],$d[$i])=split(",",$buffer);
					
				if(strcmp($search,$d[$i])==0||strcmp($search,$d[$i])==-2){
					$e[$j]=$i;
					$j++;
					echo  "<br>YOU HAD ISSUED THE BOOK ".$c[$i]." ON ".$a[$i] . " AND SUPPOSE TO RETURN ON ".$b[$i] ;
				}
				$i++;
			}
			ECHO "<br> <br>";
		}
		
		fclose($handle);
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<?php
for($i=0;$i<$j;$i++){ ?>
<input type="checkbox" name="bookdel[]"><?php echo $c[$e[$i]];?></input> 
<?php } ?>
<br />
<br />
<button onclick="mahima()"><?php if($i) echo "OK";?></button>
</form>
</body>
</html>

<?php
	function mahima(){
$lines = isset($_POST['bookdel']) ?
             $_POST['bookdel'] : false;
$lines=$lines.check;
if ( !empty($lines) ) {
    $content = file('tejal.txt');

    foreach ( $lines as $line ) {
        // Delete the lines chosen by the client
        unset($content[$line]);
    }

    // Write back the remaining content
    file_put_contents('tejal.txt', $content);
}
	}
?>