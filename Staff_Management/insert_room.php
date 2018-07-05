<?php 
	require_once('dbconnect.php');
	#QUERY
    $stmt = $connection->prepare("INSERT INTO room(ID,Name,RoomNum,Branch) values(?,?,?,?);");
	$stmt->bind_param("isis", $iID, $iName, $iRoomNum, $iBranch);
	$iID=$_POST['iID'];
	$iName=$_POST['iName'];
	$iRoomNum=$_POST['iRoom'];
	$iBranch=$_POST['iBranch'];
	#execute
	$stmt->execute();
	$stmt->close();
	mysqli_close($connection);
?>