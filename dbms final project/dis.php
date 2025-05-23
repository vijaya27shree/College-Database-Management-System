<?php
// Oracle connection
$conn = oci_connect('system', 'system', '');

if (!$conn) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
} else {
    // Check if the form is submitted and department/semester are selected
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['department']) && isset($_POST['semester'])) {
        $department = $_POST['department'];
        $semester = $_POST['semester'];

        // Prepare and execute the query for the selected department and semester
        $query = "SELECT exam_id, exam_name, exam_mode, exam_location, exam_invigilator,exam_session,exam_date FROM exam WHERE department = '$department' AND semester = $semester";
        $stmt = oci_parse($conn, $query);
        oci_execute($stmt);

        // Display results
        echo "<h2>Exam Table for $department Department - Semester $semester</h2>";
        echo "<table border='1'>";

        // Add table headers based on your database columns
        $columnNames = oci_num_fields($stmt);
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

        // Free statement
        oci_free_statement($stmt);
    }

    // Close connection
    oci_close($conn);
}
?>
