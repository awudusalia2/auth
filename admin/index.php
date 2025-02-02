<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
   <div class="container">
    <h1 class="form-title">
        Sign In
    </h1>
    <form action="user_account.php" method="POST">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" name="email" require placeholder="Email">
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" require placeholder="Password">
            <i class="fa fa-eye" id="eye"></i>
        </div>

        <p class="recover">
            <a href="#">Recovery Password</a>
        </p>

        <input type="submit" class="btn" value="Sign In " name="signin">
    </form>
    <p class="or">
        
    </p>

    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <i></i>
    
   </div>
   
   <script src="script.js"></script>
</body>
</html>