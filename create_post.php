
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
    $rent_type=$_POST['rent_type'];
    $post_date=$_POST['post_date'];
    $file_name=$_FILES['image']['name'];
    $temp_file=$_FILES['image']['tmp_name'];
    $final_destination="img/$file_name";
    move_uploaded_file($temp_file,$final_destination);
    $image=$final_destination;
    $contact_no=$_POST['contact_no'];
    if(!empty($address)&&!empty($description)&&!empty($city)&&!empty($area)&&!empty($price)&&!empty($rent_type)&&!empty($file_name)&&!empty($post_date)&&!empty($contact_no)){

        $query = "insert into post(member_id,city,area,rent_type,image,discription,price,address,post_date,contact_no)VALUES ('$member_id','$city','$area','$rent_type','$image','$description','$price','$address','$post_date','$contact_no')";
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
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Address</label>
                            <input type="text" placeholder="Enter you House Address" class="form-control" name="address">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="rent_type">Rent Type</label>
                            <select class="form-control" name="rent_type">
                                <option>Full House</option>
                                <option>Full Flat</option>
                                <option>One Room-Sublet</option>
                                <option>One Room-Mass</option>
                                <option>One Sit-Mass</option>
                                <option>Two Sit-Mass</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Post Date</label>
                                <input type="date" name="post_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea placeholder="Enter Your House Description" rows="3" class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Contact No:</label>
                                <input type="text" placeholder="Enter Contact No.." class="form-control" name="contact_no">
                            </div>
                        </div>
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
                            <input type="number" placeholder="Enter your expected price" class="form-control" name="price">
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


