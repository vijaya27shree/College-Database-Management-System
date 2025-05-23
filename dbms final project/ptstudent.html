<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students of Mechanical Engineering</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color:rgb(180, 176, 216);
            color: white;
            text-align: center;
            padding: 20px;
            border-bottom: 2px solid #ddd;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .c1 {
            background-image: url('itstud.jpeg');
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            background-color: rgb(180, 176, 216);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color:rgb(180, 176, 216);
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <h1>Students of Mechanical Engineering</h1>
    </header>

    <div class="container">
        <div class="c1">
            <p>STUDENTS<br><br>The 450+ students of the department are given equal emphasis on theoretical and experimental Mechanical Engineering with Anna University's curriculum.</p>
        </div>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="course">Enter the course (UG/PG):</label>
            <input type="text" name="course" required>

            <label for="year">Enter the year:</label>
            <input type="text" name="year" required>

            <button type="submit">Get Results</button>
        </form>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $course = $_POST["course"];
      $year= $_POST["year"];

      // Establish Oracle connection
      $conn = oci_connect('system', 'system', '');
      if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
      } else {
        echo "Connected to Oracle!";
        $query = "SELECT REG_NO ,ST_FNAME,ST_LNAME,ST_DOB FROM students WHERE dept_name='mech' AND year=$year AND cr_type='$course'";

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
 

</body>

</html>