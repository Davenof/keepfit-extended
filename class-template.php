<?php

    session_start();

    if (!isset($_SESSION['userEmail'])) {
        header("Location: 401.php");
        die();
} 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Legs, Butt, and Thighs - KeepFit</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Powers the Toggle Tooltip -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php
                include_once 'primary-nav.php';
            ?>
            <!-- Secondary Navbar-->
            <?php
                include_once 'secondary-nav.php';
            ?>
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-3">
                            <div class="d-flex align-items-center mt-lg-5 mb-4">
                            <a class="class-image-edit" href="profile-view.php"><img class="img-fluid rounded-circle" src="images/profile_photo.png" width="50" height="50" alt="Instructor's Image" /></a>
                                <div class="ms-3">
                                    <a class="fw-bold" href="profile-view.php">David Ofili</a>
                                    <div class="text-muted">Instructor</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <!-- Post content-->
                            <article>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h1 class="fw-bolder mb-1">Legs, Butt, and Thighs</h1>
                                    <!-- Post meta content-->
                                    <div class="text-warning fw-bold mb-2">Duration: 6 WEEKS | May 1 - June 16, 2022</div>
                                    <!-- Post categories-->
                                    <a class="badge bg-primary text-decoration-none link-light mt-4" href="#!">Balance</a>
                                    <a class="badge bg-primary text-decoration-none link-light" href="#!">Strength</a>
                                    <a class="badge bg-warning text-decoration-none link-light" href="#!">Indoor</a>
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4"><img class="img-fluid rounded" src="images/7.jpg" alt="Class Picture" /></figure>
                                <!-- Post content-->
                                <section class="mb-5">
                                    <p class="fs-5 mb-4">
                                        We understand how hard it is to get up and exercise on your own. So, our first priority in this six weeks 
                                        class is to get you back motivated and in the swing of things. This class offers aerobics 
                                        that keeps your workouts both fun and effective!
                                    </p>
                                    <p class="fs-5 mb-4">
                                        This fast-paced class is lovely and easy to continue at home. It gets your heart rate up (bonus cardio!) and 
                                        recruits your inner and outer thigh muscles to help you quickly switch directions. This class comes with free 
                                        swimming, diet, and weight loss lessons.
                                    </p>
                                    <p class="fs-5 mb-4">
                                        The class will play a key role in stabilising your body. Exercising your legs, butt, and thighs is a great 
                                        way to burn fat, and may do as much for building upper body mass as any other exercises, if not more.
                                    </p>
                                    <p class="fs-5 mb-4">
                                        To join this class, <a href="login.php">log in</a> if you're not already logged in, and click the blue button below. 
                                        Otherwise, to ask a question concerning this class, use the orange button to contact our team, and the class 
                                        instructor will get in touch with you as soon as possible. 
                                    </p>
                                    <div class="access-link-color d-flex align-items-center justify-content-between mb-0">
                                        <a class="btn btn-primary text-white blue-button" href="successful.php">Join Class</a>
                                        <a class="btn btn-primary text-white" href="contact.php">Contact Team</a>
                                    </div>
                                </section>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
