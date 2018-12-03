<?php
include 'partials/main_head.php';
include "partials/main_head_middle.php";
include 'partials/navigation.php';
?>
<?php
if(isset($_POST['rent_search']))
{
    $city=$_POST['search_city'];
    $rent_type=$_POST['rent_type'];
    $price=$_POST['price'];
    $query="SELECT * FROM post WHERE city='$city' AND rent_type='$rent_type' AND price <='$price' ORDER BY post_date ASC";
    if ($connect->query($query)) {

        $results = $connect->query($query);
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3>House Rent Posts</h3>
                    </div>
                    <?php
                    foreach ($results as $result) {
                        ?>
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel panel-body">
                                    <div class="col-md-6">
                                        <img src="<?php echo $result['image'] ?>" height="50%" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Address:</label>
                                        <p><?php echo $result['address'] ?></p>
                                        <label>Rent Type:</label>
                                        <p><?php echo $result['rent_type'] ?></p>
                                        <label>Discription:</label>
                                        <p><?php echo $result['discription'] ?></p>
                                        <label>Price:</label>
                                        <p><?php echo $result['price'] ?>Tk/=</p>
                                        <label>Contact No:</label>
                                        <p><?php echo $result['contact_no'] ?></p>
                                        <label>Post Date:</label>
                                        <p><?php echo $result['post_date'] ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php
                    }
                    ?>
                    <div class="panel-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

?>

