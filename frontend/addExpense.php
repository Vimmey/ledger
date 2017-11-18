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

	$jsondata = file_get_contents('addExpense.json');
	$data = json_decode($jsondata, true);

	$head = $data['head'];
	$datee = $data['date'];
	$month = $data['month'];
	$payment_mode = $data['payment_mode'];
	$amount = $data['amount'];
	echo $datee. "\n";


	$sql = "INSERT INTO dailyExpense(month,expenseDate,head,payment_mode,amount) 
			VALUES ('$month', '$datee', '$head', '$payment_mode', '$amount')";

	

	if($conn->query($sql)){
		echo "Values Inserted successfully\n";
	} else {
		echo "Values Insertion Failed\n";
	}
