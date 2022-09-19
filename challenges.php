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
        <title>Challenges - KeepFit</title>
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
            <!-- Header Ends -->
            <header class="py-0" id="challenge-header">
                <div class="container px-5" id="challenge-bg">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">Our mission is to make fitness fun and staple for everyone.</h1>
                                <p class="lead fw-normal text-white mb-4">KeepFit challenges are selected on the idea of total quality, physical and psychological fitness, and suitability to our user community. Use the KeepFit app to keep up with challenges on the go.</p>
                                <a class="btn btn-primary btn-lg" href="#scroll-target">Download App</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Challenge section one-->
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/8.jpg" wwidth="600" height="400" alt="Challenge Banner" /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">30 Day Fitness Challenge</h2>
                            <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                            <a class="btn btn-primary mt-4" href="challenge-template.php">Join Challenge</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Challenge section two -->
            <section class="py-5">
                <div class="container px-5 my-5" id="scroll-target">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/5.jpg" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Body Basics Challenge</h2>
                            <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                            <a class="btn btn-primary mt-4" href="challenge-template.php">Join Challenge</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Challenge section three -->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/4.jpg" wwidth="600" height="400" alt="Challenge Banner" /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">14 Day Cardio Challenge</h2>
                            <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                            <a class="btn btn-primary mt-4" href="challenge-template.php">Join Challenge</a>
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
