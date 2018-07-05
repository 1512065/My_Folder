<?php 
	require_once('dbconnect.php');
	#QUERY
    $stmt = $connection->prepare("CALL UpdateStaff (?,?,?,?,?);");
	$stmt->bind_param("issis", $iID, $uName, $uPhone, $uRoomID, $uJoin_date);
	$iID = $_POST['uID'];
	$uName = $_POST['uName'];
	$uPhone = $_POST['uPhone'];
	$uRoomID = $_POST['uRoomID'];
	$uJoin_date = $_POST['uJoin_date'];
	$stmt->execute();
	$stmt->close();
	mysqli_close($connection);
?>