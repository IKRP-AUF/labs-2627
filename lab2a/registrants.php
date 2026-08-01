<?php

$file = fopen("registrations.csv", "r");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registrants</title>
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css">
</head>
<body>

<h1>Registrants</h1>

<table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Birthday</th>
            <th>Age</th>
            <th>Contact Number</th>
            <th>Sex</th>
            <th>Program</th>
            <th>Address</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>

    <?php
    while (($row = fgetcsv($file)) !== false) {
        echo "<tr>";

        foreach ($row as $value) {
            echo "<td>$value</td>";
        }

        echo "</tr>";
    }

    fclose($file);
    ?>

    </tbody>

</table>

</body>
</html>