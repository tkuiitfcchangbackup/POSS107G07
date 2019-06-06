<?php
$servername = "localhost";
$username = "group7";
$password = "abc12345";

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error ){
	die("Connect failed: ". $conn->connect_error);
}
echo "Connected successfully";
?>
<link rel="stylesheet" type="text/css" href="style.css">
<html>
	<head>
		<title>
			group7
			</title>
		</head>
	       <h1>
		        Constellation
	       </h1>
	       <hr sixe="30px" align="center" width="100%">
	<body>
	      <blockquote><blockquote><blockquote><blockquote><blockquote><blockquote>
               <div style = "float:left">
		<table style="position:relative; top:30px; border-top:4px #FFD382 solid;border-bottom:4px #FFD382 solid;border-right:4px #FFD382 solid;border-left:4px #FFD382 solid;" cellpadding="15" border='0'>
	


	<tr>
		<td align="center"><a href="WaterCarrier.php"><img src="../watercarrier.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>

		<td align="center"><a href="Fish.php"><img src="fish.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>
		
		<td align="center"><a href="Ram.php"><img src="ram.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;" ></a></td>
		
		<td align="center"><a href="Bull.php"><img src="bull.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>
	</tr>
		
	<tr>
		<td align = "center"><a href="Twins.php"><img src="twins.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>
		
		<td align = "center"><a href="Crab.php"><img src="cancer.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>
		
		<td align = "center"><a href="Lion.php"><img src="leo.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>
		
		<td align="center"><a href="Virgin.php"><img src="virgin.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>
	</tr>
		
	<tr>
		<td align = "center"><a href="Scales.php"><img src="scales.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>
		
		<td align = "center"><a href="Scoipion.php"><img src="scorpio.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>
		
		<td align = "center"><a href="Archer.php"><img src="sagittarius.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>
		
		<td align = "center"><a href="Goat.php"><img src="capricorn.png" alt="HTML tutorial" style = "width:100px;height:100px;border:0;"></a></td>
	</tr>

             </blockquote></blockquote></blockquote></blockquote></blockquote></blockquote>
</table>
</div>

               <div style = "float:right">
               	
	       <table style="position:relative; top:80px; right:10px; border-top:4px #FFD382 solid;border-bottom:4px #FFD382 solid;border-right:4px #FFD382 solid;border-left:4px #FFD382 solid;" cellpadding="15" border='0'>
		<tr>
                     <td>星座運勢排行</td>
                     <td>星座學業排行</td>                                 
	       </tr>
		<tr>
			<td>星座財運排行</td>
			<td>星座愛情排行</td>
	
</div>     
 </body>

</html>    
