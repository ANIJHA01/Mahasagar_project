<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="assets/web/css/logIn.css">
    <style>
        .btn{
            border: 1px solid red;
            border-radius:50px;
            margin-top:3px;
            margin-left:160px;
            background:blue;
            color:white;
        }
    </style>
</head>
<body>
    <div class="body-content">
        <div class="container" style="width: 400px; height:300px; box-shadow:2px 2px 20px black; border-radius:10px;">
            <!-- ADMIN HEADING -->
            <h2 class="heading" style="text-align: center; text-decoration:underline;">Admin</h2>
            <!-- FORM START -->
            <form action="authentication.php" method="POST">
                <div class="form-group">
                    <label style="text-decoration:underline;">Username</label>
                    <br>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <label style="text-decoration:underline;">Password</label>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <input type="hidden" name="form-name" value="user_login" />
                <!-- <input type="hidden" name="form_name" value="" > -->
                <input type="submit" class="btn form-btn" value="Login" />
            </form>
            <!-- FORM END -->
        </div>
    </div>
</body>
</html>
