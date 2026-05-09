<?php include 'db.php'; ?>

<?php

$result = mysqli_query($conn,
"SELECT COUNT(*) as total FROM students");

$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard</h1>

<h2>Total Students:
<?php echo $data['total']; ?>
</h2>

<a href="index.php">Manage Students</a>

</body>
</html>