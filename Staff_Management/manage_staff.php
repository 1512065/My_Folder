<?php
	require_once('dbconnect.php');
	#QUERY
	$query = "SELECT * from `staff`";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));	
	$count = mysqli_num_rows($result);
	#SHOW RESULT
	if ($result->num_rows > 0) {
		echo "<table border='1'>
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Room Number</th>
		<th>Join date</th>
		</tr>";

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>" . $row['Phone'] . "</td>";
		echo "<td>" . $row['RoomID'] . "</td>";
		echo "<td>" . $row['Join_date'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysqli_close($connection);
}
?>
