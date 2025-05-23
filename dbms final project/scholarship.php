<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarships</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 1.2em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h1>Scholarship Opportunities</h1>
    <p>In our unwavering dedication to fostering a vibrant and diverse learning community, we are pleased to offer a range of scholarships to assist deserving students in their educational journey. Our scholarships are designed to recognize and reward outstanding achievements in academics, leadership, and community service. These financial aids are not only a testament to our belief in the transformative power of education but also a reflection of our commitment to making quality higher education accessible to talented individuals. Through our scholarship programs, we aim to empower students to overcome financial barriers and fully engage in the enriching academic and extracurricular experiences our college has to offer. We invite you to explore the various scholarship opportunities available and embark on a fulfilling educational adventure with us.</p>

    <button>CLICK HERE TO KNOW MORE ABOUT SCHOLARSHIPS</button>
    </form>

<div id="result-container">
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Establish Oracle connection
    $conn = oci_connect('system', 'system', '');
    if (!$conn) {
      $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    } else {
      echo "Connected to Oracle!";
      $query = "SELECT sch_type,sch_eligibility FROM scholarship";

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
