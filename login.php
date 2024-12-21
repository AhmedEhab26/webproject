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
        <form  method="post" action="database.php">
        <div class="login">
            <div class="header">
                <a href="index.html">
                    <i class="fa-solid fa-left-long back-arrow"></i>
                </a>

                <h1 class="text-center">Login</h1>
            </div>
            <div class="container d-flex flex-column justify-content-end">
                <div class="container text m-auto mb-1">
                    <span class="mb-2 text-center d-block">Welcome!</span>
                    <p class="text-center">Break your limits with Creativity <br> and make your own rocket</p>
                </div>
                <div class="login-form text-center ">
                    <span>Register with</span>
                    <div class="icon d-flex justify-content-center">
                        <a href="">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-apple"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-google"></i>
                        </a>
                    </div>

                    <span class="or">or</span>
               
                    <div class="mb-3 w-75 m-auto text-start input-label">
                        <label for="exampleFormControlInput2" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput2"
                            placeholder="Your email address" name="email">
                    </div>
                    <div class="mb-3 w-75 m-auto text-start input-label">
                        <label for="exampleFormControlInput3" class="form-label">password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput3"
                            placeholder="Your password" name="password">
                    </div>

                    <div class="toggle-switch">
                        <input type="checkbox" id="toggle">
                        <label for="toggle">
                            <span class="toggle-text">Remember me</span>
                        </label>
                    </div>

                    <button class="btn w-50  ">
                        SIGN in
                    </button>
                </div>
            </div>
        </div>

    </form>
    </header>










</body>

</html>