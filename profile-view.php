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
        <title>Profile - KeepFit</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styles-2.css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- Navigation-->
        <?php
          include_once 'primary-nav.php';
        ?>
            <!-- Profile Main -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container mt-5">
                        <div class="main-body">
                              <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="d-flex flex-column align-items-center text-center">
                                        <img src="images/profile_photo.png" alt="Profile Image" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                          <h4>David Ofili</h4>
                                          <p class="text-secondary mb-1">Teacher</p>
                                          <p class="text-muted font-size-sm">Bay Area, Liverpool, UK</p>
                                          <button class="btn btn-primary">Follow</button>
									                        <button class="btn btn-outline-primary">Message</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card mt-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0" id="anchor-changed"><a href=""><i class="fa-brands fa-linkedin"></i> LinkedIn</a></h6>
                                            <span class="text-secondary">@davenof</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0" id="anchor-changed"><a href=""><i class="fa-brands fa-instagram"></i> Instagram</a></h6>
                                            <span class="text-secondary">@dav_nof</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0" id="anchor-changed"><a href=""><i class="fa-brands fa-facebook"></i> Facebook</a></h6>
                                            <span class="text-secondary">@davenof</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0" id="anchor-changed"><a href=""><i class="fa-brands fa-twitter"></i> Twitter</a></h6>
                                            <span class="text-secondary">@davenof</span>
                                        </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="card mb-3">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                          David Ofili
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                          david.ofili@keepfit.co.uk
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Work Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                          (000) 237-8716
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Mobile</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                          (000) 561-4873
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">About David Ofili</h6>
                                        </div>
                                      </div>
                                      <div class="row mt-4">
                                        <div class="col-sm-12">
                                          David Ofili is an experienced, educated, and passionate teacher, who is capable of providing 
                                          motivating and beneficial fitness instruction to students of all levels. He provides fitness training 
                                          and advice to various students coming from different age groups. As a professional fitness teacher, 
                                          his core activities include, leading and teaching exercise routines, offering training, motivating and 
                                          advising to fitness instructors, working with students and improving their fitness level, assisting students in reaching personal fitness goals, 
                                          and performing administrative tasks.
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
