<?php
include 'library/config.php';
include 'library/opendb.php';

//----

echo "{";
echo "	\"success\": 1,";
echo "	\"result\": ";


	$sql   = "SELECT * FROM Incidentes";}

$result = mysqli_query($conn,$sql);
$out = array();
while($row = mysqli_fetch_assoc($result))
{

      	//$Titulo=utf8_encode($Text);

	       $out[] = array(
	           'id'=> $row['ID'],
	           'width'=> $row['width'],
			   'height'=> $row['height'],
			   'numberOfFrames'=> $row['numberOfFrames'],
			   'ticksPerFrame'=> $row['ticksperframe'],
			   'SpriteEnd'=> $row['spriteend'],
			   'SpriteBegin'=> $row['spritebegin'],
			   'SpriteLevel1'=> $row['spritelevel1'],
			   'SpriteLevel2'=> $row['spritelevel2'],
	    );
	  //}
}
echo json_encode($out);
echo "}";
//echo ");</script>";
exit;
?>