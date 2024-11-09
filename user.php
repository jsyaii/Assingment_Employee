<?php
include 'connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $id=$_POST['id'];
    $employee_name= $_POST['employee_name'];
    $position= $_POST['position'];
    $salary= $_POST['salary'];
    $hire_date= $_POST['hire_date'];

    $sql = "INSERT INTO employee(id, employee_name, position, salary, hire_date) 
    VALUES('$id', '$employee_name', '$position', '$salary', '$hire_date')";

    if($connection->query($sql)==TRUE)
    {
        header("location: show_details.php");
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Add Details of Selling Product</title>
</head>
<body>
    <h1 class="text-center text-5xl my-10">Enter Information of Employee</h1>

    <form action="add_selling_details.php" method="POST" class="w-1/2 mx-auto py-4 space-y-3">

    <label for="a" class="p-2 text-xl ">Employee Id</label>
    <input name="id" type="number" id="a" placeholder="Enter the id" class="w-full border border-blue-700 p-2 rounded-md">

    <label for="b" class="p-2 text-xl">Employee Name</label>
    <input name="employee_name" type="text" id="b" placeholder="Enter employee name" class="w-full border border-blue-700 p-2 rounded-md">

    <label for="c" class="p-2 text-xl">Position</label>
    <textarea id="c" name="position" rows="3" cols="50" placeholder="Enter position here" class="w-full border border-blue-700 p-2 rounded-md"></textarea>

    <label for="e" class="p-2 text-xl">Salary</label>
    <input name="salary" type="number" id="e" placeholder="Enter salary" class="w-full border border-blue-700 p-2 rounded-md">

    <label for="d" class="p-2 text-xl">Hire Date</label>
    <input name="hire_date" type="number" id="d" placeholder="Enter the date" class="w-full border border-blue-700 p-2 rounded-md">

    

    <button class="w-full bg-blue-500 text-white p-2 rounded-md">Submit</button>


    
    
    </form>

</body>


</html>