<?php
include "head.php";
include "admin_navigation.php";

$obj = new admin_class();
if(isset($_POST['allow']))
{
    $flag=1;
    $obj->allow($flag,$_POST);
}
$results = $obj->postRequest();
if (mysqli_num_rows($results) >= 1)
{
?>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3>House Rent Posts</h3>
                    </div>
                    <?php
                    foreach ($results as $result) {
                        ?>
                        <div class="panel panel-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <img src="<?php echo "../" . $result['image'] ?>" height="100%" width="100%">
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
                                <div class="panel-footer">
                                    <form action="" method="post">
                                        <input type="hidden" value="<?php echo $result['id'] ?>" name="id">
                                        <input type="submit" value="Accept Post Request" name="allow" class="btn btn-success btn-block">
                                    </form>
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
        else {
            ?>
            <h2 class="text-center alert">No post Yet</h2>
            <?php
        }

        ?>

    </div>

</div>

<!--main footer-->
<?php
include '../partials/main_footer.php'
?>
