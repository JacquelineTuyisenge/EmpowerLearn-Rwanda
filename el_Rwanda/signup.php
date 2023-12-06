<?php
require "config.php";
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE `user_username` = '$username' OR `user_email` = '$email' ");
        
        if(mysqli_num_rows($duplicate) > 0){
            echo
            "<script> alert('Username or Email has already been taken'); </script>";
        }
        else{
            if($password == $confirmpassword){
                $query = " INSERT INTO `tb_user`(`user_name`, `user_username`, `user_email`, `user_pass`) VALUES ('$name','$username','$email','$password')";
                mysqli_query($conn, $query);
                echo
                "<script> alert('Signup is Successful'); </script>";
            }
            else{
                echo
                "<script> alert('Password does not match'); </script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up to EL-rwanda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background: linear-gradient(90deg, rgba(110, 32, 4) 0%, rgba(110, 32, 2) 35%, rgba(184, 160, 0.9) 100%);
            color: beige;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 100;
            font-size: 20px;
            padding: 0;
            margin: 0;
        }
        .container{
            width: 40%;
            margin: 50px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px black;
            margin-left: 300px;
        }
        .btn{
            align-items: center;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            justify-content: center;
            background-color: orange;
            margin: 30px;
            color: beige;
        }
        .btn:hover{
            background-color: beige;
            color: black;
        }
                /*small devices*/
        @media only screen and (max-width: 800px){
           .container{
            text-align: center;
            width: auto;
            margin: 10px;
            padding: 10px;
            padding-top: 20px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px black;
            } 
        }
        /*  medium devices */
        @media only screen and (min-width: 801px) and (max-width: 1089px){
            .container{
            text-align: center;
            width: auto;
            margin: 70px;
            padding: 40px;
            padding-top: 80px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px black;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class=" text-center p-1 m-2">Signup Form</h3>
        <form action = "" method = "POST">
            <div class="form-group m-2">
                <label for="name">Name</label>
                    <input type="text" name="name" placeholder="name" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group m-2">
                <label for="username">UserName</label>
                    <input type="text" name="username" placeholder="Username" id="username" name="username" class="form-control" required>
            </div>
             <div class="form-group m-2">
                <label for="email">Your Email</label>
                    <input type="email" name="email" placeholder="Email" id="email" class="form-control" required>
            </div>
            <div class="form-group m-2">
                <label for="password">Enter your Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group m-2">
                <label for="confirmpassword">Confirm Password</label>
            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" required>
            </div>
            <div class="form-group m-2">
                <button type="submit" name ="submit" class="btn">Signup</button>
                <p>Have account?  <a class=" text-decoration-none text-warning" href="login.php">Login</a></p>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
