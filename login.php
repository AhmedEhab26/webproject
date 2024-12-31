<?php
session_start();

// Database connection
$host = 'localhost';
$db = 'database1'; // Replace with your database name
$user = 'root'; // Replace with your MySQL username
$pass = ''; // Replace with your MySQL password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $error = "Email and password are required.";
    } else {
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $stored_password);
            $stmt->fetch();

            if ($password === $stored_password) {
                // Set session variables
                $_SESSION['user_id'] = $id;
                $_SESSION['email'] = $email;
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No user found with that email.";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
    <header>
        <form method="post" action="login.php">
            <div class="login">
                <div class="header">
                    <a href="index.php">
                        <i class="fa-solid fa-left-long back-arrow"></i>
                    </a>
                    <h1 class="text-center">Login</h1>
                </div>
                <div class="container d-flex flex-column justify-content-end">
                    <div class="container text m-auto mb-1">
                        <span class="mb-2 text-center d-block">Welcome!</span>
                        <p class="text-center">Break your limits with Creativity <br> and make your own rocket</p>
                    </div>
                    <div class="login-form text-center">
                        <span>Register with</span>
                        <div class="icon d-flex justify-content-center">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-apple"></i></a>
                            <a href="#"><i class="fa-brands fa-google"></i></a>
                        </div>
                        <span class="or">or</span>

                        <?php if (!empty($error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>

                        <div class="mb-3 w-75 m-auto text-start input-label">
                            <label for="exampleFormControlInput2" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Your email address" name="email" required>
                        </div>
                        <div class="mb-3 w-75 m-auto text-start input-label">
                            <label for="exampleFormControlInput3" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput3" placeholder="Your password" name="password" required>
                        </div>

                        <div class="toggle-switch">
                            <input type="checkbox" id="toggle">
                            <label for="toggle">
                                <span class="toggle-text">Remember me</span>
                            </label>
                        </div>

                        <button type="submit" class="btn w-50">Log in</button>
                    </div>
                </div>
            </div>
        </form>
    </header>
</body>
</html>