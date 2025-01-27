<?php
include 'connect.php';
$sql = "SELECT* FROM employee";

$result = $connection->query($sql);

$records = $result->fetch_all(MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product invetory</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        th,td{
            border: 5px solid black;
            padding: 12px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="text-center text-4xl my-5">Product Inventory</h1>

    <table class="mx-auto border-10x">
        <thead class="py-2 bg-blue-500 ">
            <tr>
            <th>Product Id</th>
            <th>Employee Name</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Date</th>
            <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($records as $record): ?>
            <tr>
            <td><?=$record['id']; ?></td>
            <td><?=$record['employee_name']; ?></td>
            <td><?=$record['position']; ?></td>
            <td><?=$record['salary']; ?></td>
            <td><?=$record['hire_date']; ?></td>
            <td class="space-x-2">
            
            <a href="update_details.php?id_no=<?= $record['id_no']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="delete_data.php?id_no=<?= $record['id_no']; ?>"><i class="fa-solid fa-trash"></i></a>

            </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>