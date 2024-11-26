<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="assets/web/css/logIn.css">
</head>
<body>
    <div class="container-fluid">
            <div class="container animate-box fadeInUp animated-fast">
                <div class="bottom">
                <!-- form start -->
                    <form action=" " method="POST">
                        <div class="row">
                            <div class="col-12 offset-md-0 col-md-12">
                                <div class="card mb-5">
                                    <div class="card-header text-center">
                                        <h2>Admin-Login-Page</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-4">
                                            <label style="text-decoration:underline;">Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label style="text-decoration:underline;">Password</label>
                                            <br>
                                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                        </div>    
                                    </div>
                                    <div class="card-footer">
                                        <input type="hidden" name="form-name" value="user_login" />
                                        <input  type="submit" name="login" class="btn btn-primary" value="Login" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            // Check for PHP session variable and display SweetAlert
            <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
                Swal.fire("User is logged in!");
                <?php unset($_SESSION['login_success']);?>
            <?php endif; ?>
        </script>
</body>
</html>
