<?php
        include_once 'movies.php';
 
 		$conn = mysql_connect('localhost', 'root', '');
 		$db = mysql_select_db('mikare');

		$username = mysql_real_escape_string( $_POST["username"] );
		$password = mysql_real_escape_string( md5($_POST["password"]) );


		if( empty($username) || empty($password) )
			echo "Empty username or password";
		else
		{
			$sql = "SELECT count(*) FROM users WHERE(username='$username' AND password='$password')";
 
 
	    	$res = mysql_query($sql);
			$row = mysql_fetch_array($res);
 
			if( $row[0] > 0 ){
		 		echo "Login Successful";
		 		//echo "id: " . $row["id"]. " - Name: " . $row["filmname"]. " " . $row["year"]. "<br>";
			}
			else {
		 		echo "Failed To Login";
			}
   		}		
?>