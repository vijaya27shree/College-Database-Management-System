<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Result Portal</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      color: #333;
      margin: 0;
      text-align: center;
      padding: 20px;
    }

    h1 {
      color: #4CAF50;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input {
      width: calc(100% - 16px);
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    #result-container {
      margin-top: 20px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 0 auto;
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>

<body>

  <h1>Student Result Portal</h1>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="rollNumber">Enter Roll Number:</label>
    <input type="text" name="rollNumber" required>

    <label for="semester">Enter Semester:</label>
    <input type="text" name="semester" required>

    <button type="submit">Get Results</button>
  </form>

  <div id="result-container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $rollNumber = $_POST["rollNumber"];
      $semester = $_POST["semester"];

      // Establish Oracle connection
      $conn = oci_connect('system', 'system', '');
      if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
      } else {
        echo "Connected to Oracle!";
        $query = "SELECT grade, result_status, avg, gpa FROM result  where result.reg_no=$rollNumber and result.stud_semester=$semester";

        // Prepare and execute the query
        $stmt = oci_parse($conn, $query);
        if (!$stmt) {
          $e = oci_error($conn);
          trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }

        $executeResult = oci_execute($stmt);
        if (!$executeResult) {
          $e = oci_error($stmt);
          trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }

        
        $columnNames = oci_num_fields($stmt);
        echo "<table border='1'>";
        echo "<tr>";
        for ($i = 1; $i <= $columnNames; $i++) {
            $columnName = oci_field_name($stmt, $i);
            echo "<th>$columnName</th>";
        }
        echo "</tr>";

        while ($row = oci_fetch_array($stmt, OCI_ASSOC + OCI_RETURN_NULLS)) {
            echo "<tr>";
            foreach ($row as $item) {
                echo "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";



        // Free statement and close connection
        oci_free_statement($stmt);
        oci_close($conn);
      }
    }
    ?>
  </div>

</body>

</html>
