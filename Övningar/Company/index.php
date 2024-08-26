<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Company</title>
</head>
<body>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: blue;
            color: white;
        }
    </style>
    <h1>Company</h1>
    <h2>Employees who started between 2006 and 2009</h2>

    <!-- unordered list -->
    <ul>
        <?php
        $sql = "SELECT * FROM employees WHERE start_year BETWEEN '2006' AND '2009'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>".$row["fname"]." ".$row["lname"]."</li>";
            }
        } else {
            echo "0 results";
        }
        ?>
        <br>
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Title</th>
            <th>Start year</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Street address</th>
            <th>Postal code</th>
            <th>City</th>
        </tr>
        <?php
        $sql = "SELECT * FROM employees";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["fname"]."</td>";
                echo "<td>".$row["lname"]."</td>";
                echo "<td>".$row["title"]."</td>";
                echo "<td>".$row["start_year"]."</td>";
                echo "<td>".$row["phone"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["street_address"]."</td>";
                echo "<td>".$row["postal_code"]."</td>";
                echo "<td>".$row["city"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>0 results</td></tr>";
        }
        ?>
    </table>