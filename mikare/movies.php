<?php

 	//function DisplayUserMovie() {
 		$conn = mysql_connect('localhost', 'root', '');
 		$db = mysql_select_db('mikare');

 		$username = mysql_real_escape_string( $_POST["username"] );
 		$user_id = "SELECT id FROM users WHERE username=$username";
 		$sql = "SELECT id, filmname, year FROM movies WHERE user_id='1'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "id: " . $row["id"]. " - Name: " . $row["filmname"]. " " . $row["year"]. "<br>";
    		}
		} else {
    		echo "0 results";
		}

	//$conn->close();
	

?>