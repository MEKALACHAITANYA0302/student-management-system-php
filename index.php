<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Student Management System</h1>

<a href="add.php">Add Student</a>

<br><br>

<form method="GET">
    <input type="text" name="search" placeholder="Search student">
    <button type="submit">Search</button>
</form>

<br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php

if(isset($_GET['search'])){
    $search = $_GET['search'];

    $query = "SELECT * FROM students 
              WHERE name LIKE '%$search%' 
              OR email LIKE '%$search%'";

} else {

    $query = "SELECT * FROM students";
}

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){

?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['course']; ?></td>

    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

        <a href="delete.php?id=<?php echo $row['id']; ?>">
            Delete
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>