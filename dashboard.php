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
        <title>Dashboard - KeepFit</title>
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
            <!-- White Stats Area -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4" id="dashboard-top">
                        <h1 class="mt-4 text-dark"><i class="fas fa-tachometer-alt"></i> Dashboard</h1>
                        <p></p>
                        <h5>Daily Stats</h5>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-dark mb-4">
                                    <div class="card-body">
                                        <p class="top-card-num">In Class Now</p>
                                        <p>Student: 40 &nbsp;|&nbsp; 100% &nbsp;|&nbsp;<i class="fa fa-sun"></i></p>
                                    </div>
                                    <div class="card-footer bg-success d-flex align-items-center justify-content-between">
                                        <p class="total font-weight-bold small text-white">TOTAL EXPECTED: 40</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-dark mb-4">
                                    <div class="card-body">
                                        <p class="top-card-num">In Challenge Now</p>
                                        <p>Student: 38 &nbsp;|&nbsp; 71.7% &nbsp;|&nbsp;<i class="fa fa-moon"></i></p>
                                    </div>
                                    <div class="card-footer bg-warning d-flex align-items-center justify-content-between">
                                        <p class="total font-weight-bold small text-white">TOTAL EXPECTED: 53</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-dark mb-4">
                                    <div class="card-body">
                                        <p class="top-card-num">Leaderboard</p>
                                        <div class="leader-grid">
                                            <div class="leader-item">
                                                <p class="item1" id="move">Moves</p>
                                                <p class="item2">325 <span class="item3 text-muted">Cal</span></p>
                                            </div>
                                            <div class="leader-item">
                                                <p class="item1" id="time">Time</p>
                                                <p class="item2">5 <span class="item3 text-muted">hrs</span></p>
                                            </div>  
                                            <div class="leader-item" id="no-border-item">
                                                <p class="item1" id="goal">Goal</p>
                                                <p class="item2">97.5 <span class="item3 text-muted">%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer card-footer-changed d-flex align-items-center justify-content-between">
                                        <p class="total font-weight-bold small text-white stretched-link">STUDENT: DAVID OFILI</p>
                                        <!-- <div class="small text-white"><a>See All <i class="fas fa-angle-right"></i></a></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-dark mb-4">
                                    <div class="card-body">
                                        <p class="top-card-num">Trailing Board</p>
                                        <div class="leader-grid">
                                            <div class="leader-item">
                                                <p class="item1" id="move">Moves</p>
                                                <p class="item2">113 <span class="item3 text-muted">Cal</span></p>
                                            </div>
                                            <div class="leader-item">
                                                <p class="item1" id="time">Time</p>
                                                <p class="item2">5 <span class="item3 text-muted">hrs</span></p>
                                            </div>  
                                            <div class="leader-item" id="no-border-item">
                                                <p class="item1" id="goal">Goal</p>
                                                <p class="item2">48.9 <span class="item3 text-muted">%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-danger d-flex align-items-center justify-content-between">
                                        <p class="total font-weight-bold small text-white stretched-link">STUDENT: OFILI DAVID</p>
                                        <!-- <div class="small text-white"><a>See All <i class="fas fa-angle-right"></i></a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content Row -->
                    <div class="row">
                        <p></p>
                        <h5>Weekly Stats</h5>
                        <!-- Calories Burned (Weekly) -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-1 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Calories Burned (Weekly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">40,000 <span class="text-muted font-weight-normal">Cals</span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-weight-scale fa-2x text-gray-600"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <!-- Time Committed (Weekly) -->
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-2 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Time Committed (Weekly)
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">98,000 <span class="text-muted font-weight-normal">Hrs</span></div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x text-gray-600"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Movement (Weekly) -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-3 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Movement (Weekly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">215,000 <span class="text-muted font-weight-normal">Steps</span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-shoe-prints fa-2x text-gray-600"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Goals Achieved (Weekly) -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-4 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Goals Achieved (Weekly)</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">48<span class="text-muted font-weight-normal">%</span></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 48%" aria-valuenow="48" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bullseye fa-2x text-gray-600"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                        <div class="row">
                            <p></p>
                            <h5>Monthly Stats</h5>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Class Progress Chart 
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Enrolment and Engagement Bar Chart
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <p></p>
                        <h5>All Students</h5>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Students' Data Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>School Name</th>
                                            <th>Area Code</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Badge</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>School Name</th>
                                            <th>Area Code</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Badge</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>David Ofili</td>
                                            <td>Everton Free School</td>
                                            <td>L4</td>
                                            <td>14</td>
                                            <td>2022/01/25</td>
                                            <td><i class="fa fa-award"></i> Cardio Magician</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>The Alsop High School</td>
                                            <td>L32</td>
                                            <td>13</td>
                                            <td>2022/07/25</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td><i class="fa fa-crown"></i> Endurance Queen</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Calderstones School</td>
                                            <td>L4</td>
                                            <td>15</td>
                                            <td>2022/03/29</td>
                                            <td><i class="fa fa-shield"></i> Contender</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Archbishop Beck Catholic Sports College</td>
                                            <td>L20</td>
                                            <td>16</td>
                                            <td>2022/11/28</td>
                                            <td><i class="fa fa-trophy"></i> Board Leader</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Childwall Sports & Science Academy</td>
                                            <td>L9</td>
                                            <td>12</td>
                                            <td>2012/12/02</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Liverpool College</td>
                                            <td>L15</td>
                                            <td>13</td>
                                            <td>2022/08/06</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>King David High School</td>
                                            <td>L6</td>
                                            <td>15</td>
                                            <td>2022/10/14</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Holly Lodge Girls' College</td>
                                            <td>L27</td>
                                            <td>13</td>
                                            <td>2022/09/15</td>
                                            <td> -- </td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Dixons Broadgreen Academy</td>
                                            <td>L12</td>
                                            <td>14</td>
                                            <td>2022/12/13</td>
                                            <td><i class="fa fa-medal"></i> Swim Goldfish</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Childwall Sports & Science Academy</td>
                                            <td>L9</td>
                                            <td>12</td>
                                            <td>2012/12/02</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Everton Free School</td>
                                            <td>L4</td>
                                            <td>14</td>
                                            <td>2012/01/25</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>North Liverpool Academy</td>
                                            <td>L13</td>
                                            <td>14</td>
                                            <td>2022/12/18</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td><i class="fa fa-crown"></i> Strength Queen</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>St Edward's College</td>
                                            <td>L3</td>
                                            <td>16</td>
                                            <td>2022/11/27</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Notre Dame Catholic College</td>
                                            <td>L48</td>
                                            <td>15</td>
                                            <td>2022/06/09</td>
                                            <td><i class="fa fa-trophy"></i> Board Leader</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Holly Lodge Girls' College</td>
                                            <td>L27</td>
                                            <td>12</td>
                                            <td>2022/04/10</td>
                                            <td><i class="fa fa-medal"></i> Trailblazer</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>North Liverpool Academy</td>
                                            <td>L13</td>
                                            <td>16</td>
                                            <td>2022/10/13</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>The Alsop High School</td>
                                            <td>L32</td>
                                            <td>13</td>
                                            <td>2022/09/26</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Everton Free School</td>
                                            <td>L4</td>
                                            <td>14</td>
                                            <td>2012/01/25</td>
                                            <td><i class="fa fa-award"></i> Cardio Magician</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>The Alsop High School</td>
                                            <td>L32</td>
                                            <td>13</td>
                                            <td>2022/07/25</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td><i class="fa fa-crown"></i> Endurance Queen</td>
                                        </tr>
                                        <tr>
                                            <td>Ifeoma Onyedikachi</td>
                                            <td>Calderstones School</td>
                                            <td>L4</td>
                                            <td>15</td>
                                            <td>2022/03/29</td>
                                            <td><i class="fa fa-shield"></i> Contender</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Archbishop Beck Catholic Sports College</td>
                                            <td>L20</td>
                                            <td>16</td>
                                            <td>2022/11/28</td>
                                            <td><i class="fa fa-trophy"></i> Board Leader</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Childwall Sports & Science Academy</td>
                                            <td>L9</td>
                                            <td>12</td>
                                            <td>2012/12/02</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Ernest Musasizi</td>
                                            <td>Liverpool College</td>
                                            <td>L15</td>
                                            <td>13</td>
                                            <td>2022/08/06</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>King David High School</td>
                                            <td>L6</td>
                                            <td>15</td>
                                            <td>2022/10/14</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Holly Lodge Girls' College</td>
                                            <td>L27</td>
                                            <td>13</td>
                                            <td>2022/09/15</td>
                                            <td> -- </td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Dixons Broadgreen Academy</td>
                                            <td>L12</td>
                                            <td>14</td>
                                            <td>2022/12/13</td>
                                            <td><i class="fa fa-medal"></i> Swim Goldfish</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Childwall Sports & Science Academy</td>
                                            <td>L9</td>
                                            <td>12</td>
                                            <td>2012/12/02</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Chan Hin</td>
                                            <td>Everton Free School</td>
                                            <td>L4</td>
                                            <td>14</td>
                                            <td>2012/01/25</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Hiroyuki Osayuki</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Nayo Mwabadiwe</td>
                                            <td>North Liverpool Academy</td>
                                            <td>L13</td>
                                            <td>14</td>
                                            <td>2022/12/18</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Brendan Thandiwe</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td><i class="fa fa-crown"></i> Strength Queen</td>
                                        </tr>
                                        <tr>
                                            <td>Macy Gray</td>
                                            <td>St Edward's College</td>
                                            <td>L3</td>
                                            <td>16</td>
                                            <td>2022/11/27</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Notre Dame Catholic College</td>
                                            <td>L48</td>
                                            <td>15</td>
                                            <td>2022/06/09</td>
                                            <td><i class="fa fa-trophy"></i> Board Leader</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Holly Lodge Girls' College</td>
                                            <td>L27</td>
                                            <td>12</td>
                                            <td>2022/04/10</td>
                                            <td><i class="fa fa-medal"></i> Trailblazer</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>North Liverpool Academy</td>
                                            <td>L13</td>
                                            <td>16</td>
                                            <td>2022/10/13</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>The Alsop High School</td>
                                            <td>L32</td>
                                            <td>13</td>
                                            <td>2022/09/26</td>
                                            <td>--</td>
                                        </tr>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
