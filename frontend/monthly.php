<?php
	$servername = "localhost";
	$username = "root";
	$password = "vmy";
	$dbname ="ledger";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully\n";

	$jsondata = file_get_contents('monthly.json');
	$data = json_decode($jsondata, true);

	$month = $data['month'];
	echo $month. "\n";


	$sql = "SELECT * FROM monthlyExpense where month = '$month' and payment_mode = 'cash'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
				 echo "month: " . $row["month"]. " - onlineMode: " . $row["onlineMode"]. " " . $row["cashMode"]."\n";
    	}
	} else {
		    echo "0 results";
	}


	
