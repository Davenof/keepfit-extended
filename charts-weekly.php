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
        <title>Weekly Stats - KeepFit</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="dashboard/assets/css/material2-dashboard.css?v=3.0.0" rel="stylesheet" />
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
            <!-- White Weekly Charts Area -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <ol class="sub-dashboard breadcrumb mb-4 bg-white">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Weekly Stats</li>
                        </ol>
                        <h3 class="mt-4"><i class="fas fa-chart-pie"></i> &nbsp; Weekly Stats</h3>
                        <p></p>
                        <div class="card-header report-para bg-white">
                          <ul class="mt-3">
                              <li class="small text-primary"><a href="#!"><i class="fas fa-download fa-sm"></i> Download</a></li>
                              <li class="small text-primary">&#124;</li>
                              <li class="small text-primary"><a href="#!"><i class="fas fa-print fa-sm"></i> Print</a></li>
                              <li class="small text-primary">&#124;</li>
                              <li class="small text-primary"><a href="#!"><i class="fas fa-share fa-sm"></i> Share</a></li>
                          </ul>
                      </div>
                        <div class="row mt-5">
                            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                              <div class="card">
                                <div class="card-header p-3 pt-2">
                                  <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <div class="badge bg-success"><i class="fas fa-person-running"></i></div>
                                  </div>
                                  <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Calories Burned</p>
                                    <h4 class="mb-0">532,687 <span class="text-secondary">Cals</span> </h4>
                                  </div>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-3">
                                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>greater than last week</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                              <div class="card">
                                <div class="card-header p-3 pt-2">
                                  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                    <div class="badge bg-warning"><i class="fas fa-heart"></i></div>
                                  </div>
                                  <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Cardio Improvement</p>
                                    <h4 class="mb-0">58%</h4>
                                  </div>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-3">
                                  <p class="mb-0"><span class="text-warning text-sm font-weight-bolder">+3% </span>greater than last week</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                              <div class="card">
                                <div class="card-header p-3 pt-2">
                                  <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <div class="badge bg-danger"><i class="fas fa-face-frown"></i></div>
                                  </div>
                                  <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Confidence Improvement</p>
                                    <h4 class="mb-0">56%</h4>
                                  </div>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-3">
                                  <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> lower than last week</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                              <div class="card">
                                <div class="card-header p-3 pt-2">
                                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <div class="badge bg-success"><i class="fas fa-clock"></i></div>
                                  </div>
                                  <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Time Committed</p>
                                    <h4 class="mb-0">503,430 <span class="text-secondary">Hrs</span></h4>
                                  </div>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-3">
                                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>greater than last week</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-4">
                            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                              <div class="card z-index-2 ">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-warning">
                                  <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="card-body">
                                  <h6 class="mb-0 ">Students' Engagement</h6>
                                  <p class="text-sm ">General Fitness Performance</p>
                                  <hr class="dark horizontal">
                                  <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> statistics sent 2 days ago </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                              <div class="card z-index-2  ">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-success">
                                  <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="card-body">
                                  <h6 class="mb-0 "> Weekly Activities </h6>
                                  <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in this week's activities. </p>
                                  <hr class="dark horizontal">
                                  <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> updated 4 min ago </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 mt-4 mb-3">
                              <div class="card z-index-2 ">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-danger">
                                  <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="card-body">
                                  <h6 class="mb-0 ">Completed Tasks</h6>
                                  <p class="text-sm ">Last Fitness Performance</p>
                                  <hr class="dark horizontal">
                                  <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm">just updated</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </main>
                <footer class="bg-dark-changed py-4 mt-auto">
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
        <!--   Core JS Files   -->
  <script src="dashboard/assets/js/core/popper.min.js"></script>
  <script src="dashboard/assets/js/core/bootstrap.min.js"></script>
  <script src="dashboard/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="dashboard/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="dashboard/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Mon", "May", "Tue", "Jul", "Wed", "Sep", "Thu", "Nov", "Fri"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Mon", "May", "Tue", "Jul", "Wed", "Sep", "Thu", "Nov", "Fri"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="dashboard/assets/js/material-dashboard.min.js?v=3.0.0"></script>
    </body>
</html>
