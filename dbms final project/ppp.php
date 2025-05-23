<html>
    
</html><?php
$conn = oci_connect('system', 'system', '');
if (!$conn) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
} else {
    echo "Connected to Oracle!";
    $query = 'SELECT * FROM student';
    $query1 = 'SELECT * FROM customer';

    // Prepare and execute the query
    $stmt = oci_parse($conn, $query);
    oci_execute($stmt);
    $stmt1 = oci_parse($conn, $query1);
    oci_execute($stmt1);

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
    echo "<table border='1'>";
    while ($row = oci_fetch_array($stmt1, OCI_ASSOC + OCI_RETURN_NULLS)) {
        echo "<tr>";
        foreach ($row as $item) {
            echo "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // Free statement and close connection
    oci_free_statement($stmt);
    oci_free_statement($stmt1);
    oci_close($conn);
}
?>