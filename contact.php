<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!empty($number) && !empty($email) && !empty($message)) {
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO ContactUs (Number, Email, Message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $number, $email, $message);

        if ($stmt->execute()) {
            echo "Thank you for contacting us! Your message has been received.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required!";
    }
}
?>
