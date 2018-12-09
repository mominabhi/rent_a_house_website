<!--main head -->
<?php
include 'partials/main_head.php'
?>
<?php
if (!isset($_SESSION['user_id'])) {
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
if (isset($_POST['rent'])) {
    $post_id = $_POST['id'];
    $member_id = $_SESSION['user_id'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    $rent_type = $_POST['rent_type'];
    $post_date = $_POST['post_date'];
    $file_name = $_FILES['image']['name'];
    $temp_file = $_FILES['image']['tmp_name'];
    $final_destination = "img/$file_name";
    move_uploaded_file($temp_file, $final_destination);
    $image = $final_destination;
    $contact_no = $_POST['contact_no'];
    $flag = 0;
    $_SESSION['id']=$post_id;
    $query = "UPDATE post SET member_id='$member_id',city='$city',area='$area',rent_type='$rent_type',image='$image',discription='$description',price='$price',address='$address',post_date='$post_date',contact_no='$contact_no',flag='$flag' WHERE id='$post_id'";
    if ($connect->query($query)) {
        ?>
        <div class="alert alert-success" style="text-align: center">Post updated successfully</div>
        <?php
    }

}
if(isset($_GET['id']))
{
    $post_id = $_GET['id'];
}
else{
    $post_id=$_SESSION['id'];
}

    $query = "SELECT * FROM post WHERE id='$post_id'";
    if ($connect->query($query)) {
        $result = $connect->query($query);
    }
    $result = mysqli_fetch_assoc($result);

?>

<div class="container">
    <h1 class="well text-center">Rent House Form</h1>
    <div class="col-lg-12 well">
        <div class="row">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="col-sm-12">
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                        <div class="col-sm-6 form-group">
                            <label>Address</label>
                            <input type="text" placeholder="Enter you House Address" class="form-control" name="address"
                                   value="<?php echo $result['address'] ?>">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="rent_type">Rent Type</label>
                            <select class="form-control" name="rent_type" value="<?php echo $result['rent_type'] ?>">
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
                                <input type="file" name="image" class="form-control"
                                       value="<?php echo $result['image'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Post Date</label>
                                <input type="date" name="post_date" class="form-control"
                                       value="<?php echo $result['post_date'] ?>">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea placeholder="Enter Your House Description" rows="3" class="form-control"
                                          name="description"><?php echo $result['discription'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Contact No:</label>
                                <input type="text" placeholder="Enter Contact No.." class="form-control"
                                       name="contact_no" value="<?php echo $result['contact_no'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>City</label>
                            <input type="text" placeholder="Enter City Name Here.." class="form-control" name="city"
                                   value="<?php echo $result['city'] ?>">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Area</label>
                            <input type="text" placeholder="Enter Area name here" class="form-control" name="area"
                                   value="<?php echo $result['area'] ?>">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Price</label>
                            <input type="number" placeholder="Enter your expected price" class="form-control"
                                   name="price" value="<?php echo $result['price'] ?>">
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


