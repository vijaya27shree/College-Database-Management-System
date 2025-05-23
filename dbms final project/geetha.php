<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>STAFF</title>
<style>
body{
font-size: small;
}
</style>
<body>
<div style="background-color: #075d8f; height: 60px">
<table><td>
<a href="home.html" style="color: antiquewhite;">
<i class="fas fa-home" style="font-size: 40px; color: rgb(255, 255, 255);"></i></a>
</td></table>
</div>
<br>

<?php


      // Establish Oracle connection
      $conn = oci_connect('system', 'system', '');
      if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
      } else 
        echo "Connected to Oracle!";
        $query = "SELECT S_FNAME,S_LNAME,S_D_ID,S_GENDER,S_PH,S_DOJ,S_EMAIL,S_QUAL,S_SPEC,S_POSITION,S_DTLS,S_TYPE FROM staff WHERE s_id=18";

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
      
    
    ?>
    <br>


<center>
<br>
<table width="70%" border="1" height="200px">

<td style="width: 10%;">
<img src="staff.jpeg" style="width:200px"> 
</td>
<td style="width: 60%;">
<p> <b style="color: orangered;"> Personal Information</b><br>
Prof R Geetha Ramani<br>
Female<br>
Department of Information Science and Technology, Anna University ,
Chennai, Tamil Nadu, India - 600025
</p>
<p> <b style="color: orangered;">Expertise</b><br>
Computer Science Information Systems<br>
Machine Learning, Data Mining, Artificial Intelligence, Image Processing, Evolutionary Algorithms
</p>
<p><b style="color: orangered;">
    Experience</b><br>
    2012 - Present<br>
Professor<br>
Department of Information Science and Technology<br>

Anna University
</p>
<p><b style="color: orangered;">
    Qualification</b><br>
    2009<br>
Ph.D<br>
Pondicherry University
</p>
</td>
</table>

</center>
</body>