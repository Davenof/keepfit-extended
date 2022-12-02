<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-dark text-white"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="includes/signup-inc.php" method="POST">
                                            <div class="row mb-3">
                                                <div class="text-white bg-danger">        
                                                    <?php
                                                        if (isset($_GET["error"])) {
                                                            if ($_GET["error"] == "stmtfailed") {
                                                            echo "<p>&nbsp; Oops! Something went wrong. Please try again</p>";
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name="inputFirstName" placeholder="Enter your first name" required/>
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="inputLastName" type="text" placeholder="Enter your last name" required/>
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="inputEmail" placeholder="name@example.com" required/>
                                                <label for="inputEmail">Email address</label>
                                                <div class="text-white bg-danger">
                                                    <?php
                                                        if (isset($_GET["error"])) {
                                                            if ($_GET["error"] == "emailtaken") {
                                                            echo "<p>&nbsp; There's an account with this email address</p>";
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" name="inputPassword" placeholder="Create a password" required/>
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" name="inputPasswordConfirm" placeholder="Confirm password" required/>
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                                <div class="text-white bg-danger">
                                                    <?php
                                                        if (isset($_GET["error"])) {
                                                            if ($_GET["error"] == "passwordsdontmatch") {
                                                            echo "<p>&nbsp; Passwords don't match</p>";
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-radio mb-3 mb-md-0">
                                                        <input type="radio" class="form-radio-input" id="teacherDesignation" name="inputDesignation" value="Teacher" required/>
                                                        <label class="form-radio-label" for="teacherDesignation">Teacher</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-radio mb-3 mb-md-0">
                                                        <input type="radio" class="form-radio-input" id="instructorDesignation" name="inputDesignation" value="Instructor" />
                                                        <label class="form-radio-label" for="instructorDesignation">Instructor</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <button type="submit" name="signup" class="btn btn-primary btn-block col-md-12">Sign Up</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">Have an account? <a href="login.php">Login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="bg-dark py-4 mt-auto">
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
