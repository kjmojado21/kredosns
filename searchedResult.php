<?php
include 'userAction.php';
$result =  $_SESSION['searched_user'];

$searchedUser = $UserClass->searchUser($result);
// print_r($relationship);

// print_r($searchedUser);
if ($searchedUser != FALSE) {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <?php include 'navbar.php' ?>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <p class="lead" style="letter-spacing: 0.3em">Searched User Result:</p>
                </div>
            </div>
            <div class="row mt-5">
                <?php
                foreach ($searchedUser as $row) :
                    $randomID = $row['user_id'];
                    $userImg = $row['user_img'] ?>
                    <div class="card w-25 float-left mr-2 mt-3">
                        <div class="card-body">
                            <img src="uploads/<?php echo $userImg ?>" class="card-img-top" alt="">
                            <p class="lead mt-3" style="letter-spacing: 0.2em"><?php echo $row['user_fullname'] ?></p>
                        </div>

                        <?php
                        $rs = $UserClass->validateUserRelationship($_SESSION['login_id'], $randomID);
                        // echo $rs;
                        if ($rs == 'follow') { ?>
                            <div class="follow-button p-2">
                                <form action="userAction.php" method="post">
                                    <input type="hidden" value="<?php echo $row['user_id'] ?>" name="followed_user_id">
                                    <input type="hidden" value="<?php echo $_SESSION['login_id'] ?>" name="user_id">
                                    <button type="submit" name="follow_user" class="btn btn-outline-info">Follow User</button>
                                </form>
                            </div>
                        <?php  } else {
                        ?>
                            <div class="follow-button p-2">
                                <form action="userAction.php" method="post">
                                    <input type="hidden" value="<?php echo $row['user_id'] ?>" name="followed_user_id">
                                    <input type="hidden" value="<?php echo $_SESSION['login_id'] ?>" name="user_id">
                                    <button type="submit" name="unfollow" class="btn btn-outline-info">Unfollow</button>
                                </form>
                            </div>

                        <?php

                        }

                        ?>

                    </div>

                <?php
                endforeach;
                ?>
            </div>


        </div>




    <?php
} else {
    ?>
        <!doctype html>
        <html lang="en">

        <head>
            <title>Title</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php include 'navbar.php'; ?>
                        <div class="alert alert-warning mt-5">No User Match! Sorry</div>

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
    <?php
}
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>