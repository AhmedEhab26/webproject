<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleSignup.css">
</head>
<body>
    <header>
        <form  method="post" action="database.php">
            <div class="header">
                <a href="index.php">
                    <i class="fa-solid fa-left-long back-arrow"></i>
                </a>
        <div class=" contaienr sign-form text-center ">
            <h1 class="my-5 ">Sign Up</h1>
            <div class="container ">
                <div class="row mb-3 width m-auto g-3 ">
            
                  <div class="col-md-6  text-start input-label">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name" name="fName">
                  </div>
              
                
                  <div class="col-md-6  text-start input-label">
                    <label for="exampleFormControlInput2" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Last Name" name="lName">
                  </div>
                </div>
            <div class="mb-3 width m-auto text-start input-label">
                <label for="exampleFormControlInput3" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput3"
                    placeholder="Your email address" name="email">
            </div>
            <div class="mb-3 width m-auto text-start input-label">
                <label for="exampleFormControlInput4" class="form-label">password</label>
                <input type="password" class="form-control" id="exampleFormControlInput4"
                    placeholder="Your password" name="password">
            </div>
        
        <button type="submit" class="btn w-50  ">
            SIGN UP
        
        </button>
        
        <p>Already have an account? 
            <a href="login.php">
            <span>sign in</span>
        </a>
        </p>
    </div>
        </div>

        </div>
    </form>
    </header>
    
</body>
</html>