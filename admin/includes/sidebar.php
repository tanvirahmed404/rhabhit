<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="../index.php" target="_blank">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-eye"></i></div>
                    Visit Site
                </a>
                <div class="sb-sidenav-menu-heading">Manage</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bell"></i></div>
                    Notice
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="all_notices.php"><i class="fa-solid fa-bell me-2"></i>All
                            Notice</a><a class="nav-link" href="add_notice.php"><i class="fa-solid fa-plus me-2"></i>Add
                            New
                            Notice</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsResult"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-line"></i></div>
                    Result
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutsResult" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="all_result.php"><i class="fa-solid fa-chart-line me-2"></i>All
                            Result</a><a class="nav-link" href="add_result.php"><i class="fa-solid fa-plus me-2"></i>Add
                            New
                            Result</a>
                    </nav>
                </div>



                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#gallery"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-images"></i></div>
                    Photo Gallery
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="gallery" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="photo_gallery.php"><i class="fa-solid fa-image me-2"></i>View Photo
                        </a><a class="nav-link" href="add_photo.php"> <i class="fa-solid fa-plus me-2"></i>Add Photo</a>
                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#gallery1"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-video"></i></div>
                    Video Gallery
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="gallery1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="video_gallery.php"><i class="fa-solid fa-video me-2"></i>View Video
                        </a><a class="nav-link" href="add_video.php"> <i class="fa-solid fa-plus me-2"></i>Add Video</a>
                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#teacher"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                    Teacher & Stuff
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="teacher" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="all_teachers.php"><i class="fa-solid fa-chalkboard-user me-2"></i> All
                            Teacher</a>
                        <a class="nav-link" href="add_teacher.php"><i class="fa-solid fa-plus me-2"></i> Add New
                            Teacher</a>
                    </nav>
                </div>




                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#users"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="users" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="all_users.php"><i class="fa-solid fa-users me-2"></i> All Users</a>
                        <a class="nav-link" href="add_user.php"><i class="fa-solid fa-plus me-2"></i> Add New Users</a>
                    </nav>
                </div>


            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php

            if(isset($_SESSION["auth"])==true){
                echo $_SESSION["auth_user"]["user_name"];
            }
            
            ?>
        </div>
    </nav>
</div>