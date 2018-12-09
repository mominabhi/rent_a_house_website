<?php

session_start();

class admin_class
{
    public function __construct()
    {
        $database_name = "rent_house";
        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $this->connected = mysqli_connect("$host_name", "$user_name", "$password", "$database_name");
    }


    public function admin_reg($data)
    {
        $name = $this->validation($data['name']);
        $email = $this->validation($data['email']);
        $mobile = $this->validation($data['mobile']);
        $birth_date = $this->validation($data['birth_date']);
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $final_destination = "../img/$image_name";
        move_uploaded_file($tmp_name, $final_destination);
        $image = "img/" . $image_name;
        $password = $this->validation(md5($data['password']));
        $con_pass = $this->validation(md5($data['con_pass']));
//      ***Start Age Calculate
        $date = new DateTime($birth_date);
        $now = new DateTime();
        $interval = $now->diff($date);
        $interval->y;
//           ***End Age Calculate
        $query = "SELECT * FROM admin WHERE email='$email'";
        $result = mysqli_query($this->connected, $query);
        $num_row = mysqli_num_rows($result);
        if (empty($name) || empty($email) || empty($mobile) || empty($birth_date) || empty($image_name) || empty($password) || empty($con_pass)) {
            return $msg = "<div class='alert alert-danger'>Please Fill Up All Field</div>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $msg = "<div class='alert alert-danger'>Invalid email format</div>";
        } elseif ($num_row >= 1) {
            return $msg = "<div class='alert alert-danger'>Email Should have to be Unique</div>";
        } elseif ($interval->y < 18) {
            return $msg = "<div class='alert alert-danger'>Only For 18+ People</div>";
        } elseif ($password != $con_pass) {
            return $msg = "<div class='alert alert-danger'>Password doesn't Matched</div>";
        } elseif (!filter_var($mobile, FILTER_VALIDATE_INT)) {
            return $msg = "<div class='alert alert-danger'>Mobile Number Invalid</div>";
        } else {
            $query = "INSERT INTO admin(name,email,mobile,birth_date,image,password,con_pass) VALUES('$name','$email','$mobile','$birth_date','$image','$password','$con_pass') ";
            $result = mysqli_query($this->connected, $query);
            if ($result) {
                $_SESSION['email']=$email;
                $_SESSION['admin_id']=mysqli_insert_id($this->connected);
                $_SESSION['admin_name']=$name;
                $_SESSION['admin_image']=$image;
                header("location:post_request.php");
            }
        }
    }

    public function validation($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function login($data)
    {
        $email = $data['email'];
        $pass = md5($data['password']);
        $query = "SELECT * FROM admin WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($this->connected, $query);
        $num_row=mysqli_num_rows($result);
        if($num_row==0 || $num_row<1)
        {
           echo "<div class='alert alert-danger'>Email And Password Invalid</div>";
        }
        else{
            $_SESSION['email']=$email;
            $fatch=mysqli_fetch_assoc($result);
            $_SESSION['admin_id']=$fatch['id'];
            $_SESSION['admin_name']=$fatch['name'];
            $_SESSION['admin_image']=$fatch['image'];
            header("location:post_request.php");
        }

    }
    public function readAll()
    {
        $query="SELECT * FROM post ORDER BY post_date DESC ";
        $result=mysqli_query($this->connected,$query);
        return $result;
    }
    public function delete($id)
    {
        $query="DELETE FROM post WHERE id='$id'";
        mysqli_query($this->connected,$query);
        header("location:manage_post.php");
    }
    public function flagChange($flag,$data)
    {
        $query="UPDATE post SET flag='$flag' WHERE id='$data[id]'" ;
        mysqli_query($this->connected,$query);
        header("location:manage_post.php");
    }
    public function allow($flag,$data)
    {
        $query="UPDATE post SET flag='$flag' WHERE id='$data[id]'" ;
        mysqli_query($this->connected,$query);
        header("location:post_request.php");
    }
    public function postRequest()
    {
        $query="SELECT * FROM post WHERE flag=0 ";
        return $result=mysqli_query($this->connected,$query);

    }
}