<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav" id="user-overview">
                            <div class="sb-sidenav-menu-heading text-light">
                                Access Type: <span id="class-access">Class</span><div class="pulsating-circle"></div>
                            </div>
                            <p id="profile-image"><img src="uploads/profile_photo.png" width="100" height="100" alt="Profile Image">
                            <span class="tooltiptext small"><span><a href="#!">View</a></span> | <span><a href="#!">Change</a></span> </span> </p>
                            
                            <!-- Profile Image Upload Form -->
                            <!-- <div class="image-upload" id="image-upload">
                                <form action="upload.php" method="POST" enctype="multipart/form-data" class="small">
                                    <input type="file" name="file">
                                    <button type="submit" name="submit">Replace</button>
                                </form>
                            </div> -->
                            <!-- Form Ends -->
                            
                            <div class="small" id="profile-name">
                                <?php
                                    if (isset($_SESSION["userEmail"])) {
                                        echo $_SESSION["userFirst"] . " " . $_SESSION["userLast"] . " | " . $_SESSION["userStatus"];
                                    }
                                ?>  
                            </div>
                            <p id="activity-overview">OVERVIEW & DOWNLOADS</p>
                            <ul>
                                <li><a href="charts-daily.php"><i class="fas fa-chart-bar"></i>&nbsp; Daily Stats Chart <span class="num-count">1</span></a></li>
                                <li><a href="charts-weekly.php"><i class="fas fa-chart-line"></i> &nbsp; Weekly Stats Charts <span class="num-count">3</span></a></li>
                                <li><a href="charts-monthly.php"><i class="fas fa-chart-pie"></i> &nbsp;Monthly Stats Charts <span class="num-count">3</span></a></li>
                                <li><a href="tables.php"><i class="fas fa-table"></i> &nbsp; Students' Data Table <span class="num-count">4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small text-light">Logged in as:</div>
                        <span class="profile-email small">
                            <?php
                                if (isset($_SESSION["userEmail"])) {
                                    echo $_SESSION["userEmail"];
                                } 
                            ?> 
                        </span>
                    </div>
                </nav>
            </div>