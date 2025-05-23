<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .credit-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="credit-form">
        <h2>Credit Card Information</h2>
        <form action="" method="post">
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" required>

            <label for="expiryDate">Expiry Date:</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>

            <label for="cardHolderName">Cardholder Name:</label>
            <input type="text" id="cardHolderName" name="cardHolderName" required>
            
            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount" required>

            <button type="submit">Submit</button>
        </form>
    </div>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cn = $_POST["cardNumber"];
    $a = $_POST["amount"];
    $name = $_POST["cardHolderName"]; 

    // Assuming you have already established a valid Oracle database connection
    $conn = oci_connect('system', 'system', '');

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    } else {
       

        $query = "INSERT INTO payment (card_number, amount, name) VALUES (:cn, :a, :name)";

        // Prepare and execute the query
        $stmt = oci_parse($conn, $query);

        oci_bind_by_name($stmt, ':cn', $cn);
        oci_bind_by_name($stmt, ':a', $a);
        oci_bind_by_name($stmt, ':name', $name);

        $executeResult = oci_execute($stmt);

        if (!$executeResult) {
            $e = oci_error($stmt);
            echo "SQL execution error: " . htmlentities($e['message'], ENT_QUOTES);
            // Handle the error appropriately (e.g., log it, display a message to the user)
        } else {
            echo "Transaction done  successfully!";
        }

        // Free statement and close connection
        oci_free_statement($stmt);
        oci_close($conn);
    }
}
?>
</body>
</html>