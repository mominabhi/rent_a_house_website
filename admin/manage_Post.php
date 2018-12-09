<?php
include "head.php";
include "admin_navigation.php";
$obj=new admin_class();
$results=$obj->readAll();
if(isset($_POST['published'])){
    $flag=0;
    $obj->flagChange($flag,$_POST);
}
elseif(isset($_POST['nonPublish']))
{
    $flag=1;
    $obj->flagChange($flag,$_POST);
}
?>
<body>
<div class="container">
    <div class="panel panel-success">
        <div class="panel panel-heading">
            <h2 style="text-align: center">Manage Posts</h2>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>City</th>
                        <th>Price</th>
                        <th>Publish?</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($results as $result)
                    {
                        ?>
                        <tr>
                            <td><?php echo $result['post_date']?></td>
                            <td><img src="<?php echo "../".$result['image']?>" class="img-responsive" style="width:50px"></td>
                            <td><?php echo $result['address']?></td>
                            <td><?php echo $result['discription']?></td>
                            <td><?php echo $result['city']?></td>
                            <td><?php echo $result['price']?></td>
                            <td>
                                <form action="" method="post">
                                    <?php
                                    if($result['flag']==1)
                                    {
                                        ?>
                                        <input type="hidden" name="id" value="<?php echo $result['id']?>">
                                        <input type="submit" class="btn btn-success btn-block" name="published" value="Published">
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <input type="hidden" name="id" value="<?php echo $result['id']?>">
                                        <input type="submit" class="btn btn-warning btn-block" name="nonPublish" value="NonPublish">
                                        <?php
                                    }
                                    ?>
                                </form>
                            </td>
                            <td>
                                <a href="delete.php?id=<?php echo $result['id']?>" style="text-decoration: none"><button type="submit" class="btn btn-danger btn-block" name="delete">Delete</button></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel-footer">
            <div style="margin-left: 46%;margin-top: 2%">
                <i class="fa fa-home" aria-hidden="true" style="font-size:36px"></i>
            </div>
            <div style="margin-left: 43%">
                <p style="font-family: Comic Sans MS ">&copy;HouseRent.com</p>
            </div>
        </div>
    </div>

</div>
</body>
</html>