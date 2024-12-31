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
            echo '
            <div id="popupModal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; z-index: 1000;">
                <p>Thank you for contacting us! Your message has been received.</p>
            </div>
            <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: hsl(15, 87.40%, 40.40%); z-index: 999;"></div>
            <script>
                document.getElementById("popupModal").style.display = "block";
                document.getElementById("overlay").style.display = "block";
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 2000);
            </script>
            ';
        }
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required!";
    }
?>
