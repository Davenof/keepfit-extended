<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KeepFit</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Powers the Toggle Tooltip -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body id="index-body">
        <div id="layoutAuthentication" class="index-body">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <section class="home-message">
                            <h7>Section Heading</h7>
                            <div class="container px-5">
                                <div class="row gx-5 align-items-center justify-content-left">
                                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                                        <div class="my-5 text-center text-xl-start">
                                            <h1 id="keepfit" class="display-5 fw-bolder mb-2">KeepFit</h1>
                                            <h3 class="display-6 fw-bolder mb-2 text-dark"> A platform that allows tracking students' activity using wrist-worn devices </h3>
                                            <p class="lead fw-normal mb-4 text-dark">This is the web version for teachers and instructors</p>
                                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="downloads.php">Download App</a>
                                                <div>
                                                    <?php
                                                        if (isset($_SESSION['userEmail'])) {
                                                            echo '<a class="btn btn-outline-light btn-lg px-4" id="btn-changed" href="dashboard.php">Dashboard</a>';
                                                        } else {
                                                            echo '<a class="btn btn-outline-light btn-lg px-4" id="btn-changed-2" href="login.php">Log in</a>';
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <?php
                                                if (!isset($_SESSION['userEmail'])) {
                                                    echo '
                                                        <div class="home-signup mt-2">
                                                            Don`t have an account? <a href="signup.php"><span class="home-signup-link">Sign Up</span></a>
                                                        </div>';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>  
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
