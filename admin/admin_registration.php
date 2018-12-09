<?php
include "head.php";
if (isset($_SESSION['email'])) {
    header("location:post_request.php");
}
$object = new admin_class();
$msg="";
if (isset($_POST['admin_reg'])) {
    $msg = $object->admin_reg($_POST);
    echo $msg;
}
?>
<body>
<div class="container">
    <div class="col-md-6 col-md-offset-3" style="margin-top: 2%">
        <div class="panel panel-info">
            <div class="panel panel-heading">
                <h1 style="text-align: center">Admin Registration</h1>
            </div>
            <div class="panel panel-body">
                <form action="admin_registration.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mobile Number:</label>
                        <input type="text" name="mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth:</label>
                        <input type="date" name="birth_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password:</label>
                        <input type="password" name="con_pass" class="form-control">
                    </div>
                    <input type="submit" name="admin_reg" class="btn btn-block btn-success">
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>
