<?php
include "head.php";
if (isset($_SESSION['email'])) {
    header("location:post_request.php");
}
$obj=new admin_class();
if(isset($_POST['admin_login']))
{
    $obj->login($_POST);
}
?>
<body>
<div class="container">
    <div class="col-md-6 col-md-offset-3" style="margin-top: 5%">
        <div class="panel panel-info">
            <div class="panel panel-heading">
                <h1 style="text-align: center">Admin Login</h1>
            </div>
            <div class="panel panel-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <input type="submit" name="admin_login" class="btn btn-block btn-success">
                </form>
                <br>
                <a href="admin_registration.php" style="text-decoration: none"><button type="submit" class="btn btn-warning btn-block">Registration Now</button></a>
            </div>

        </div>
    </div>
</div>
</body>
</html>
