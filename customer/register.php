<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
<div class="container">
    <h1 class="form-title">Register</h1>

    <form action="user_account.php" method="POST">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" id="name" name="name" require placeholder="name">
        </div>

        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" name="email" require placeholder="Email">
            
        </div>

        <div class="input-group password">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" require placeholder="Password">
            <i class="fa fa-eye" id="eye"></i>
        </div>

        <div class="input-group ">
            <i class="fas fa-lock"></i>
            <input type="password"  name="confirm_password" require placeholder=" Confrim Password">
        </div>

        <input type="submit" class="btn" value="Sign UP" name="signup">
    </form>
    <p class="or">
        --------or--------
    </p>

    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <i></i>
    <div class="links">
        <p>Already have account ?</p>
        <a href="index.php">Sign In</a>
    </div>
   </div>

   <script src="script.js"></script>
</body>
</html>