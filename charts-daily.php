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
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Daily Stats - KeepFit</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styles-2.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- Navigation-->
        <!-- Primary Navbar-->
        <?php
            include_once 'primary-nav.php';
        ?>
        <!-- Secondary Navbar-->
        <?php
            include_once 'secondary-nav-dashboard.php';
        ?>
        <!-- Main Content Area -->
        <div id="layoutSidenav">
            <!-- Sidebar -->
            <?php
                include_once 'sidebar.php';
            ?>
            <!-- White Monthly Charts Area -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <ol class="sub-dashboard breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daily Stats</li>
                        </ol>
                        <h3 class="mt-4"><i class="fas fa-chart-bar"></i> &nbsp; Daily Stats</h3>
                        <p></p>

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 report-para">
                                    <i class="fafa-memo-pad"></i> &nbsp; Summary
                                    <ul>
                                        <li class="small text-primary"><a href="#!"><i class="fas fa-download fa-sm"></i> Download</a></li>
                                        <li class="small text-primary">&#124;</li>
                                        <li class="small text-primary"><a href="#!"><i class="fas fa-print fa-sm"></i> Print</a></li>
                                        <li class="small text-primary">&#124;</li>
                                        <li class="small text-primary"><a href="#!"><i class="fas fa-share fa-sm"></i> Share</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Daily goals reached <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Challenge tenacity <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Collective calories burned <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Improvement in cardio <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Overall class engagement <span
                                            class="float-right">100%</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
