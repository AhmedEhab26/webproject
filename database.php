<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name, last_name, email, password) 
                VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {

            echo "<h1>User Created Successfully</h1>";
            echo "<a href='login.php'>Click here to login</a>";
        } else {
            echo "Error: " . mysqli_error($con);
        }
        
    }
}

$conn->close();
?>