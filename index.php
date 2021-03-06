<style>
    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
        height: 46px;
    }

    form.example button:hover {
        background: #0b7dda;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }
</style>
<!--main head -->
<?php
include 'partials/main_head.php'
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
<div style="background-image: url(img/W0CXE9.jpg) ;
background-repeat: no-repeat;
background-position: center;
background-size: 100%;
height: 90vh;
margin-top: -20px;
">


    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1 style="color:floralwhite;opacity: .6;font-size: 350%;margin-left:22%">A Home for Every Renter </h1>
            </div>
            <div class="col-sm-7 col-sm-offset-2">
                <h2 style="color:floralwhite;opacity: .7;font-size: 170%;margin-left:25%;margin-right:10%">There are
                    millions of homes out there. Let's find the one that's perfect for you.</h2>
            </div>
        </div>
        <div class="row" style="margin-top:2%;opacity: .7">
            <div class="col-sm-10">
                <form class="example" action="posts_loaction.php" method="post">
                    <input type="text" placeholder="Enter Location.." name="location">
                    <button type="submit" name="search_submit" style="opacity: .8"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-sm-2">
                <a href="posts.php" style="opacity: .9"><button class="btn btn-lg btn-success">HomeRent Post</button></a>
            </div>
        </div>
        <div class="row" style="margin-top:1% ">
            <div class="" style="opacity: .8">
                <div class="panel panel-info">
                    <div class="panel panel-body">
                        <form method="post" action="posts_search.php">
                            <div class="col-sm-3 form-group">
                                <label for="rent_type">Search City</label>
                                <select class="form-control" name="search_city">
                                    <option>Dhaka</option>
                                    <option>Comilla</option>
                                    <option>Barisal</option>
                                    <option>Jhenaidah</option>
                                    <option>One Sit-Mass</option>
                                    <option>Two Sit-Mass</option>
                                </select>
                            </div>
                            <div class="col-sm-3 form-group">
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
                            <div class="col-sm-3 form-group">
                                <label for="rent_type">Max Budge</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                            <div class="col-sm-3" style="margin-top: 24px">
                                <input type="submit" name="rent_search" value="Search House "
                                       class="btn btn-info btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--main footer-->
</body>
</html>
<?php
include 'partials/main_footer.php'
?>

