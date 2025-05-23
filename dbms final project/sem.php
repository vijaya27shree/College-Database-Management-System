<?php
// Oracle connection
$conn = oci_connect('system', 'system', '');

if (!$conn) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
} else {
    // Display tables
    echo "Connected to Oracle!";
    $query1 = 'SELECT * FROM customer';

    // Prepare and execute the query
    $stmt = oci_parse($conn, $query1);
    oci_execute($stmt);
   

    // Fetch and display results
    echo "<table border='1'>";
    while ($row = oci_fetch_array($stmt, OCI_ASSOC + OCI_RETURN_NULLS)) {
        echo "<tr>";
        foreach ($row as $item) {
            echo "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    // Display semester selection form
    
    // Free statement and close connection
    oci_free_statement($stmt);
   // oci_free_statement($stmt);
    oci_close($conn);
}
?>
