<?php
include 'userAction.php';
$currentUser = $UserClass->getOneUser($_SESSION['login_id']);
if (!empty($currentUserCover = $UserClass->userCoverPhoto($_SESSION['login_id']))) {
    $currentUserCover = $UserClass->userCoverPhoto($_SESSION['login_id']);
}
$currentUserPosts = $UserClass->getUserPosts($_SESSION['login_id']);
// print_r($currentUserPosts);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/profile.css">
    <style>
        .profile-picture {
            position: absolute;
            height: 100% !important;
            width: 100% !important;
        }

        .img-cover {
            position: absolute;
            width: 100%;
            height: 100%;
        }



        .btn:hover {
            background: white !important;
            color: black !important;

        }

        .file-container {
            position: relative;
            width: 100%;
            height: 100%;
            background: green;
        }

        .user-details-btn:hover {
            background: white !important;
            color: black !important;
            border: none !important;
        }

        .user-details-btn:focus {
            background: white !important;
            color: black !important;

        }

        .post-container {
            position: relative;
            top: 5%;
            margin-left: 25px;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="content">
        <div class="container-fluid">
            <div class="row ml-3 parent-row">
                <!-- cover photo container -->
                <div class="col-lg-6 cover-photo-container">
                    <div class="row mt-3" style="height:50%; width:100%;">
                        <div class="col-lg-12 user-cover">
                            <?php
                            if (empty($currentUserCover)) {
                            ?>
                                <div class="jumbotron h-100 w-100">
                                    <p class="lead">Upload A cover Photo</p>
                                    <form action="userAction.php" enctype="multipart/form-data" method="post">
                                        <input type="file" name="cover_img" class="form-control" id="">
                                        <button type="submit" name="uploadCover" class="btn btn-block btn-outline-secondary mt-3">Upload Cover Photo</button>
                                    </form>
                                </div>
                            <?php
                            } else { ?>
                                <img src="cover_images/<?php echo $currentUserCover['img_name'] ?>" class='img-cover' alt="">
                            <?php
                            }

                            ?>
                        </div>
                    </div>
                    <div class="row mt-3 ml-1" style="height:40%; width:100%;">
                        <div class="col-lg-6">
                            <?php
                            if (!empty($currentUser['user_img'])) {
                                $image = $currentUser['user_img']; ?>
                                <img src="uploads/<?php echo $image ?>" class='img-thumbnail user-pp rounded-circle profile-picture' alt="" srcset="">

                            <?php   } else { ?>

                                <div class="file-container jumbotron p-5 rounded-circle">
                                    <form action="userAction.php" enctype="multipart/form-data" method="post">
                                        <input type="file" name="user_pp" id="" class='form-control mt-5'>
                                        <button type="submit" name="upload" class="btn btn-outline-secondary btn-block mt-3">Upload Photo</button>
                                    </form>
                                </div>

                            <?php  } ?>



                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <p class="lead mt-5" style="letter-spacing: 0.3em">
                                        <b> <?php
                                            echo $currentUser['user_fullname'];
                                            ?>
                                        </b>


                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn user-details-btn btn-outline-secondary border-0 btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseExample" onclick="this.blur()" aria-expanded="false" aria-controls="collapseExample">

                                        <i class="fas fa-angle-double-down"></i>
                                    </button>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body text-center border-0">
                                            <p>
                                                <b>AGE :</b><br>
                                                <?php echo $currentUser['user_age']; ?>
                                                <br>
                                                <b>Birtdate :</b><br>
                                                <?php echo $currentUser['user_bdate']; ?>
                                                <br>
                                                <b>Location :</b><br>
                                                <?php echo $currentUser['user_location']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row mt-5" style="height: 10%; width:100%">
                        <div class="col-lg-12">
                            <!-- Button trigger modal -->
                            <button type="button" style="height: 100%; letter-spacing:0.5em;" class="btn btn-outline-secondary border-0 btn-block btn-lg" data-toggle="modal" data-target="#modelId">
                                <i class="fas fa-pen-fancy">Write Something</i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modelId" tabindex="-1" onclick="this.blur()" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Thinking Something?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <form action="userAction.php" enctype="multipart/form-data" method="post">
                                                    <input type="text" name="user_post" style="height: 250px" placeholder="Whats on your mind??" class="form-control text-center">
                                                    <label for="" class="lead mt-3">Have an image? add here!</label>
                                                    <input type="file" name="post_image" class="form-control " id="">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="addPost" class="btn btn-outline-info"><i class="fas fa-signature">Post now</i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $('#exampleModal').on('show.bs.modal', event => {
                                    var button = $(event.relatedTarget);
                                    var modal = $(this);
                                    // Use above variables to manipulate the DOM

                                });
                            </script>
                        </div>
                    </div>

                    <div class="row mt-5" style="height: 10%; width:100%;">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 p-2 text-center">
                                    <button type="button" class="btn btn-outline-secondary border-0">
                                        <i class="fas fa-bookmark fa-2x" style="letter-spacing: 0.1em;">favorates</i>

                                    </button>
                                </div>
                                <div class="col-lg-6 p-2 text-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-secondary border-0" data-toggle="modal" data-target="#settings">
                                        <i class="fas fa-cog  fa-2x" style="letter-spacing: 0.1em;">Settings</i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"> <i class="fas fa-cog  fa-2x" style="letter-spacing: 0.1em;">Update Settings</i></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="accordion" id="updateUserInfo">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#updateCoverPhoto" aria-expanded="false" aria-controls="collapseOne">
                                                                            Cover Photo
                                                                        </button>
                                                                    </h2>
                                                                </div>

                                                                <div id="updateCoverPhoto" class="collapse show" aria-labelledby="headingOne" data-parent="#updateUserInfo">
                                                                    <div class="card-body">
                                                                        <form action="userAction.php" enctype="multipart/form-data" method="post">
                                                                            <input type="file" name="user_cover_img" id="" class='form-control mt-5'>
                                                                            <button type="submit" name="updateCoverPhoto" class="btn btn-outline-secondary btn-block mt-3">Upload Photo</button>
                                                                        </form>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#updateBasicInfo" aria-expanded="false" aria-controls="updateCoverPhoto">
                                                                            Basic Information
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="updateBasicInfo" class="collapse" aria-labelledby="headingTwo" data-parent="#updateUserInfo">
                                                                    <div class="card-body">
                                                                        <form action="userAction.php" method="post">
                                                                            <label for="" class="lead">Update Fullname</label>
                                                                            <input type="text" name="fname" value="<?php echo $currentUser['user_fullname'] ?>" class="form-control">
                                                                            <label for="" class="lead">Update Age</label>
                                                                            <input type="number" name="age" value="<?php echo $currentUser['user_age'] ?>" class="form-control mt-2">
                                                                            <label for="" class="lead">Update Birthdate</label>
                                                                            <input type="date" name="bdate" value="<?php echo $currentUser['user_bdate'] ?>" class="form-control mt-3">
                                                                            <label for="" class="lead">Update Location</label>
                                                                            <input type="text" name="location" value="<?php echo $currentUser['user_location'] ?>" class="form-control mt-3">

                                                                            <button type="submit" name="updateUserInfo" class="btn btn-outline-primary mt-3">Submit</button>


                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="headingThree">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                            Update Profile Picture
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#updateUserInfo">
                                                                    <div class="card-body">
                                                                        <form action="userAction.php" enctype="multipart/form-data" method="post">
                                                                            <input type="file" name="user_pp" id="" class='form-control mt-5'>
                                                                            <button type="submit" name="updateProfilePhoto" class="btn btn-outline-secondary btn-block mt-3">Upload Photo</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        $('#exampleModal').on('show.bs.modal', event => {
                                            var button = $(event.relatedTarget);
                                            var modal = $(this);
                                            // Use above variables to manipulate the DOM

                                        });
                                    </script>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 user-post-container">
                    <?php
                    include 'navbar.php';
                    ?>
                    <div class="post-container lead">
                        <?php
                            if($currentUserPosts == FALSE){
                                echo "<div class = 'alert alert-warning'>Add you first post!</div>";
                            }else{
                                foreach ($currentUserPosts as $post) :
                                    if (empty($post['post_image'])) {
        
                                ?>
                                        <div class="card mt-3 mb-3 bg-dark text-light text-center w-100" style="height: 50%;">
                                            <div class="card-body">
                                                <div class="content">
                                                    <p class="display-2 m-5">
                                                        <?php
                                                        echo $post['post_content'];
                                                        ?>
                                                    </p>
                                                </div>
        
                                            </div>
                                        </div>
        
        
                                    <?php
                                    } else {
                                        $image = $post['user_img'];
                                        $postImages = $post['post_image'];
                                    ?>
                                        <div class="card mt-2">
                                            <div class="card-header">
                                                <img src='uploads/<?php echo $image ?>' class='rounded-circle mr-3' style='height:100px;'>
                                                <?php echo $post['user_fullname'] ?>
                                            </div>
                                            <div class="card-body">
                                                <div class="caption p-3" style="font-size: 50px;">
                                                    <?php echo $post['post_content']; ?>
                                                </div>
                                                <div class="postimages">
                                                    <img src="postImages/<?php echo $postImages ?>" class='w-100 img-thumbnail' alt="">
        
                                                </div>
                                            </div>
                                        </div>
        
                                <?php      }
        
                                endforeach;
                            }
                        ?>
                    </div>
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