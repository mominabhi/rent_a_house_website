<?php
include 'connect/connect.php';
$post_id = $_GET['id'];

$query = "DELETE FROM post WHERE id='$post_id'";
if ($connect->query($query)) {
    header("Location:my_posts.php");
}

?>