
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" style="font-family: Comic Sans MS;font-size: 28px"><b> <span class="glyphicon glyphicon-home"></span>RentHouse.com</b></a>
        </div>


        <ul class="nav navbar-nav" style="margin-top: 1%">
            <?php
            if (isset($_SESSION['user_id'])){



            ?>
                <li><a href="my_posts.php"><b style="font-family: Comic Sans MS;font-size:17px">My Posts</b></a></li>
                <li><a href="create_post.php" style="font-family: Comic Sans MS;font-size:17px"><b>Create a post for Rent</b></a></li>
            <?php } ?>
        </ul>


        <ul class="nav navbar-nav navbar-right">
            <?php
            if (!isset($_SESSION['user_id'])){



            ?>
<!--            url test-->

            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>


            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php }else{
                ?>
            <?php
                $user_id = $_SESSION['user_id'];
                $query = "select user_name from user WHERE id = '$user_id'";
                if($connect->query($query)){

                    $result = $connect->query($query);
                    $result2 = $result->fetch_assoc();

                    $result2['user_name'];

                }
                ?>


                <li><a href=""><span class="glyphicon glyphicon-user"></span> <?php  echo $result2['user_name']; ?></a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php


            } ?>

        </ul>
    </div>
</nav>