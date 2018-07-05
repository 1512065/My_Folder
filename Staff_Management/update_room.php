<?php 
	require_once('dbconnect.php');
	#QUERY
    $stmt = $connection->prepare("CALL UpdateRoom (?,?,?,?);");
	$stmt->bind_param("isis", $iID, $iName, $iRoomNum, $iBranch);
	$iID=$_POST['uID'];
	$iName=$_POST['uName'];
	$iRoomNum=$_POST['uRoom'];
	$iBranch=$_POST['uBranch'];
	$stmt->execute();
	$stmt->close();
	mysqli_close($connection);
?>