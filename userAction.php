<?php 
include 'classes/User.php';
$UserClass = new User;

if(isset($_POST['register_user'])){
    $fullname = $_POST['user_fname'];
    $age = $_POST['user_age'];
    $email = $_POST['user_email'];
    $password = $_POST['password'];
    $bdate = $_POST['birthdate'];
    $location = $_POST['location'];

    $UserClass->registerUser($fullname,$age,$email,$password,$bdate,$location);
}
elseif(isset($_POST['login'])){
    $username = $_POST['email'];
    $password = $_POST['password'];

    $UserClass->login($username,$password);

}elseif(isset($_POST['upload'])){
    $profilePicture = $_FILES['user_pp']['name'];
    $userID = $_SESSION['login_id'];

    $UserClass->uploadProfilePicture($userID,$profilePicture);

}elseif(isset($_POST['uploadCover'])){
    $coverImg = $_FILES['cover_img']['name'];

    $UserClass->addCoverImage($_SESSION['login_id'],$coverImg);

}elseif(isset($_POST['updateUserInfo'])){
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $bdate = $_POST['bdate'];
    $location = $_POST['location'];

    $UserClass->updateUser($_SESSION['login_id'],$fname,$age,$bdate,$location);
}elseif(isset($_POST['updateCoverPhoto'])){
    $coverImg = $_FILES['user_cover_img']['name'];
    $UserClass->updateCoverPhoto($_SESSION['login_id'],$coverImg);

}elseif(isset($_POST['updateProfilePhoto'])){
    $profile_picture = $_FILES['user_pp']['name'];

    $UserClass->uploadProfilePicture($_SESSION['login_id'],$profile_picture);

}elseif(isset($_POST['addPost'])){
    $content = $_POST['user_post'];
    if(!empty($_FILES['post_image']['name'])){
        $img = $_FILES['post_image']['name'];

        $UserClass->addPostWithImage($_SESSION['login_id'],$content,$img);

    }else{
        // $content = $_POST['user_post'];
        $UserClass->addPost($_SESSION['login_id'],$content);
    }

}
elseif(isset($_POST['search'])){
    $searchedUser = $_POST['searched_user'];
    
    $_SESSION['searched_user'] = $searchedUser;
    header('location:searchedResult.php');

}elseif(isset($_POST['follow_user'])){

    $followedID = $_POST['followed_user_id'];
    $userID = $_POST['user_id'];

    // echo $userID;

    $UserClass->followUser($userID,$followedID);

}elseif(isset($_POST['unfollow'])){
    $followedID = $_POST['followed_user_id'];
    $userID = $_POST['user_id'];

    $UserClass->unfollow($userID,$followedID);
}
