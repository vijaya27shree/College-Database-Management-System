<?php


      // Establish Oracle connection
      $conn = oci_connect('system', 'system', '');
      if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
      } else {
        echo "Connected to Oracle!";
        $query = "SELECT club_name,club_bearers,club_event,club_est_year,club_fund FROM club WHERE club_id=1004";

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
    
    ?>