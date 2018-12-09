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

<div class="container">
    <div class="row">

            <?php

            $user_id = $_SESSION['user_id'];
            $query = "select * from post WHERE member_id = '$user_id'";
            if($connect->query($query)->num_rows > 0){

                $results = $connect->query($query);

                ?>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3>House Rent Posts</h3>
                            </div>
                            <?php
                            foreach ($results as $result)
                            {
                                ?>
                                <div class="panel panel-body">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-md-6">
                                                <img src="<?php echo $result['image']?>" height="100%" width="100%">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Address:</label>
                                                <p><?php echo $result['address']?></p>
                                                <label>Rent Type:</label>
                                                <p><?php echo $result['rent_type']?></p>
                                                <label>Discription:</label>
                                                <p><?php echo $result['discription']?></p>
                                                <label>Price:</label>
                                                <p><?php echo $result['price']?>Tk/=</p>
                                                <label>Contact No:</label>
                                                <p><?php echo $result['contact_no']?></p>
                                                <label>Post Date:</label>
                                                <p><?php echo $result['post_date']?></p>
                                                <?php
                                                if($result['flag']==1)
                                                {
                                                  ?>
                                                    <b style="color: darkgreen">Post Accepted</b>
                                                  <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <b style="color:darkred">Still Pending</b>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="delete_post.php?id=<?php echo $result['id']?>" style="text-decoration: none;"><button TYPE="submit" name="delete" class="btn btn-danger btn-block" >Delete Post</button></a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="edit_post.php?id=<?php echo $result['id']?>" style="text-decoration: none;"><button TYPE="submit" name="Edit" class="btn btn-warning btn-block" >Edit Post</button></a>
                                                </div>
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
                <?php
            }
            else{
                ?>
                <h2 class="text-center alert">No post Yet</h2>
                <?php
            }


            ?>

        </div>

</div>

<!--main footer-->
<?php
include 'partials/main_footer.php'
?>


