<?php include 'db.php'; ?>

<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $query = "INSERT INTO students(name,email,course)
              VALUES('$name','$email','$course')";

    mysqli_query($conn, $query);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<form method="POST">

    <input type="text" name="name" placeholder="Name" required>
    <br><br>

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="text" name="course" placeholder="Course" required>
    <br><br>

    <button type="submit" name="submit">
        Add Student
    </button>

</form>

</body>
</html>