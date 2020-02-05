<script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-sm navbar-light bg-light navigation-bar mt-3">
    <a class="navbar-brand" href="homepage.php"><img src="appPhotos/bigK.jpg" style="height:50px;width:50px" alt="" srcset=""></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fas fa-comments text-secondary" style="letter-spacing: 1px;">Messages</i><span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-angle-double-down">Options</i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt" style="letter-spacing: 2px;">Logout</i></a>
                    <a class="dropdown-item" href="profile.php">My Profle</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="userAction.php" method="post">     
                <input class="form-control mr-sm-2" name="searched_user" type="text" placeholder="Search">
               <button type="submit" name="search" class="btn btn-primary">Submit</button>         
        </form>
    </div>
</nav>
