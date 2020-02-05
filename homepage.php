<?php
include 'userAction.php';
$currentUserID = $_SESSION['login_id'];
$currentUser = $UserClass->getOneUser($currentUserID);
$followedPosts = $UserClass->getFollowedUserPosts($currentUserID);
// $currentUserPosts = $UserClass->getUserPosts($currentUserID);
// print_r($followedPosts);
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
        <!-- navigation bar -->
        <div class="row fixed-top">
            <div class="col-lg-12">
                <?php include 'navbar.php' ?>
            </div>
        </div>
        <div class="row spacer mt-3">
            <div class="col-lg-12 p-5">

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <hr>
    </div>
    <div class="container">
        <!-- user image -->
        <div class="row mt-5" style="">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 text-center"><img src="uploads/<?php echo $currentUser['user_img'] ?>" class='img-thumbnail img-fluid rounded-circle' style="height:200px; width:200px" alt=""></div>
            <div class="col-lg-4">
            </div>
        </div>
        <!-- user Information -->
        <div class="row mt-3">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 text-center">
                <p class="lead" style="letter-spacing: 0.3em">
                    <?php
                    echo $currentUser['user_fullname'];
                    ?>
                </p>
            </div>
            <div class="col-lg-4"></div>
        </div>

    </div>

    <hr>
    <!-- posts container -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                if ($followedPosts == FALSE) {
                    echo "<div class = 'alert alert-warning'>I see no posts here.. Try Following a user or post your first one !</div>";
                } else {
                    foreach ($followedPosts as $post) {
                        $img = $post['user_img'];
                        if (empty($post['post_image'])) {
                ?>
                            <div class="card mt-3" style="height: 400px;">
                                <div class="card-header">
                                    <img src="uploads/<?php echo $img ?>" class="img-thumbnail img-fluid rounded-circle" style="height: 100px; width:100px;" alt=""> <?php echo $post['user_fullname'] ?>
                                </div>
                                <div class="card-body bg-dark text-light">
                                    <h1 class="display-2 text-center p-5">
                                        <?php echo $post['post_content'] ?>
                                    </h1>
                                </div>
                            </div>

                        <?php

                        } else {
                        ?>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <img src="uploads/<?php echo $img ?>" class="img-thumbnail img-fluid rounded-circle" style="height: 100px; width:100px;" alt=""> <?php echo $post['user_fullname'] ?>
                                </div>
                                <div class="card-body bg-dark text-light p-5">
                                    <h1 class="display-2 text-center mt-5">
                                        <?php echo $post['post_content'] ?>
                                    </h1>
                                    <?php $postImg = $post['post_image'] ?>
                                    <img src="postImages/<?php echo $postImg ?>" style="width: 100%;" class="img-fluid img-thumbnail" alt="">

                                </div>
                            </div>

                <?php
                        }
                    }
                }

                ?>

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