<?php
if (!isset($_SESSION['email'])) {
    header("location:admin_login.php");
}
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="col-md-2 navbar-header">
            <a class="navbar-brand" href="#" style="font-family: Comic Sans MS;font-size: 28px"><b><span
                            class="glyphicon glyphicon-th"></span>DashBoard</b></a>
        </div>
        <ul class=" col-md-7 nav navbar-nav" style="margin-top: 5px">
            <li><a href="manage_Post.php" style="font-family: Comic Sans MS;"><b>Manage Posts</b></a></li>
            <li><a href="post_request.php" style="font-family: Comic Sans MS;"><b>Post Requests</b></a></li>
        </ul>
        <ul class=" col-md-3 nav navbar-nav">
            <li><a href="#"><img src="<?php echo "../" . $_SESSION['admin_image'] ?>"
                                                 class="img-responsive" style="width:23px; border-radius: 40%;"></a>
            </li>
            <li><a href="#"
                   style="font-family: Comic Sans MS;"><?php echo $_SESSION['admin_name'] ?></a></li>
            <li><a href="logout.php" style="font-family: Comic Sans MS;"><span
                            class="glyphicon glyphicon-log-out"></span>Logout</a></li>
        </ul>
    </div>
</nav>
