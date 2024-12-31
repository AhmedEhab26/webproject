<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "database1";

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

                echo '
                <div id="popupModal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; z-index: 1000;">
                    <p> User Created Successfully </p>
                </div>
                <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: hsl(15, 87.40%, 40.40%); z-index: 999;"></div>
                <script>
                    document.getElementById("popupModal").style.display = "block";
                    document.getElementById("overlay").style.display = "block";
                    setTimeout(function() {
                        window.location.href = "login.php";
                    }, 2000);
                </script>
                ';

   /*     } else {
            echo "Error: " . mysqli_error($con);*/
        }
        
    }
}

$conn->close();
?>