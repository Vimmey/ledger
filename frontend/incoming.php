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

	$jsondata = file_get_contents('incoming.json');
	$data = json_decode($jsondata, true);

	$incoming_mode = $data['incoming_mode'];
	$datee = $data['date'];
	$amount = $data['amount'];
	echo $datee. "\n";


	$sql = "INSERT INTO incoming(incomingDate,incoming_mode,amount) 
			VALUES ('$datee', '$incoming_mode','$amount')";

	if($conn->query($sql)){
		echo "Values Inserted successfully\n";
	} else {
		echo "Values Insertion Failed\n";
	}
