<?php


?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/register.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 lef-content">

                </div>
                <div class="col-lg-4 right-content">
                    <div class="kredo-logo-container">
                        <img src="appPhotos/kredo-logo.png" class="kredo-logo" alt="kredo-logo.jpg">
                    </div>
                    <form action="userAction.php" method="post">
                        <div class="form-group form-container">

                            <label for="" class="lead">Enter Firstname</label>
                            <input type="text" name="user_fname" placeholder="Enter Fullname" class="form-control">
                            <label for="" class="lead">Enter Age</label>
                            <input type="number" name="user_age" placeholder="Enter Age" class="form-control">
                            <label for="" class="lead">Enter Email</label>
                            <input type="email" name="user_email" placeholder="Enter Email" class="form-control">
                            <label for="" class="lead">Enter Password</label>
                            <input type="password" name="password" placeholder="Enter password" class="form-control">
                            <label for="" class="lead">Enter Birtdate</label>
                            <input type="date" name="birthdate" placeholder="Enter Birthdate" class="form-control">
                            <label for="" class="lead">Enter Location</label>
                            <input type="location" name="location" placeholder="Where you are in japan located" class="form-control">
                            <button type="submit" name="register_user" class="btn btn-success mt-3 btn-block">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>