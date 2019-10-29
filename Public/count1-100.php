<?php

include ('../maintain/db.php');
for($i = 1; $i <= 100; $i++ ){
		$sql="INSERT into number(id,number) value('$i','$i')";
	    mysqli_query($connection,$sql);
		//echo "DONE";	
}
?>