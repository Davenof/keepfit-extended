<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - KeepFit</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-dark"><h3 class="text-center text-light font-weight-light my-4">Class Login</h3></div>
                                    <div class="card-body bg-light text-dark">
                                        <form action="includes/login-inc.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="inputEmail" type="email" placeholder="name@example.com" required/>
                                                <label for="inputEmail">Email address</label>
                                                <div class="text-white bg-danger">
                                                    <?php
                                                        if (isset($_GET["error"])) {
                                                            if ($_GET["error"] == "wrongemail") {
                                                            echo "<p>&nbsp; Incorrect Email</p>";
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="inputPassword" type="password" placeholder="Password" required />
                                                <label for="inputPassword">Password</label>
                                                <div class="text-white bg-danger">
                                                    <?php
                                                        if (isset($_GET["error"])) {
                                                            if ($_GET["error"] == "wrongpassword") {
                                                            echo "<p>&nbsp; Incorrect password</p>";
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="access-link-color d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.php">Forgotten user ID or password?</a>
                                                <button type="submit" name="login" class="btn btn-primary text-white">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="login-footer card-footer text-center py-3">
                                        <div class="access-link-color small">Not Class? <a href="remote/login.html">Remote Login</a></div>
                                        <div class="access-link-color small">Dont have an account? <a href="signup.php">Sign Up</a></div>
                                    </div>
                                </div>
                                <div class="access-home text-center py-3">
                                    <div class="small"><a href="index.php"><i class="fa fa-house fa-sm"></i> Home </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="footer-changed py-4 mt-auto">
                    <div class="container px-5">
                        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                            <div class="col-auto">
                                <div class="small m-0 text-muted" id="attribution">
                                    &copy; 2022 | Designed and developed by <a class="text-muted" href="https://www.linkedin.com/in/david-ofili-7b9a752a/" 
                                    target="_blank">David Ofili</a>. Powered by <a class="text-muted" href="https://code-academy.co.uk/" 
                                    target="_blank">Code Academy UK</a> | All rights reserved.
                                </div>
                            </div>
                            <div class="col-auto" id="attr-link">
                                <a class="link-light small text-muted" href="#!">Privacy</a>
                                <span class="text-white mx-1">&middot;</span>
                                <a class="link-light small text-muted" href="#!">Terms</a>
                                <span class="text-white mx-1">&middot;</span>
                                <a class="link-light small text-muted" href="#!">Contact</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
