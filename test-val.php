<!DOCTYPE html>
<html>
<body>

<?php

include("config.php");
$rows = $con->query("select* from student_registered where `email-id`='manishchandra463@gmail.com'") or die($con->error);
if($rows->num_rows){
	while($student = $rows->fetch_assoc()){
		echo $student['mother-name'];
	}
}
?>

</body>
</html>