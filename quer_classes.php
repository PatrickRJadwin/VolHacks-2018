<?php
require_once "config.php";

$conn = mysqli_connect('localhost:3306', 'root','irobot97', 'user_classes');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if ($result = mysqli_query($conn, "SELECT Class_Name FROM user_classes")) {
	$row_cnt = mysqli_num_rows($result);
}
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
}
$row_cnt = mysqli_num_rows($result);
 
if ($row_cnt > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "<a href='#' style='height:150px; maxheight:150px;' class='list-group-item list-group-item-action disabled'>".$row["Class_Name"]."</a>";
	}
}
else {
	echo "";
}

$conn->close();
?>
