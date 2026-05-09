<?php include 'db.php'; ?>

<?php

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");

$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn,
    "UPDATE students SET
    name='$name',
    email='$email',
    course='$course'
    WHERE id=$id");

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<form method="POST">

<input type="text" name="name"
value="<?php echo $row['name']; ?>">

<br><br>

<input type="email" name="email"
value="<?php echo $row['email']; ?>">

<br><br>

<input type="text" name="course"
value="<?php echo $row['course']; ?>">

<br><br>

<button type="submit" name="update">
Update
</button>

</form>

</body>
</html>