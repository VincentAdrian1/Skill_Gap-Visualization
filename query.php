<?php
require('config.php');

$sql = "SELECT s.skill_name, e.department, COUNT(e.idemployees) AS num_employees
        FROM employees e
        JOIN skills s ON e.skills_idskills = s.idskills
        GROUP BY s.skill_name, e.department
        ORDER BY s.skill_name, e.department";

$result = $conn->query($sql);

$data = array();
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = array(
                'skill_name' => $row["skill_name"],
                'department' => $row["department"],
                'count' => $row["num_employees"],
            );
        }
    }
    $conn->close();
    echo json_encode($data);
} else {
    echo "Error: " . $conn->error;
}
?>
