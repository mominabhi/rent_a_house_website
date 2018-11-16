<!--main head -->
<?php
include 'partials/main_head.php'
?>
<?php
if (!isset($_SESSION['user_id'])){
    header('Location:login.php');
}

?>


<!--  adding title -->

<title>Welcome to Rent house Website</title>


<!--middle footer-->
<?php
include "partials/main_head_middle.php";

?>

<!--navigation bar-->

<?php

include 'partials/navigation.php'

?>
<?php


if (isset($_POST['rent'])){

    $member_id = $_SESSION['user_id'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    if(!empty($address)&&!empty($description)&&!empty($city)&&!empty($area)&&!empty($price)){

        $query = "insert into post(member_id,city,area,discription,price,address)VALUES ('$member_id','$city','$area','$description','$price','$address')";
        if($connect->query($query)){
            ?>
            <p class="well text-center"> Successfully Posted</p>
<?php
        }

    }
}

?>

<div class="container">
    <h1 class="well text-center">Rent House Form</h1>
    <div class="col-lg-12 well">
        <div class="row">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Address</label>
                            <input type="text" placeholder="Enter you House Address" class="form-control" name="address">
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea placeholder="Enter Your House Description" rows="3" class="form-control" name="description"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>City</label>
                            <input type="text" placeholder="Enter City Name Here.." class="form-control" name="city">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Area</label>
                            <input type="text" placeholder="Enter Area name here" class="form-control" name="area">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Price</label>
                            <input type="text" placeholder="Enter your expected price" class="form-control" name="price">
                        </div>
                    </div>






                    <input type="submit" name="rent" value="Submit" class="btn btn-lg btn-info btn-block">
                </div>
            </form>
        </div>
    </div>
</div>


<!--main footer-->
<?php
include 'partials/main_footer.php'
?>


