<?php
require "config.php";
    if(isset($_POST["submit"])){
        $usernameemail = $_POST["usernameemail"];
        $password = $_POST["password"];
        $result = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE `user_username` = '$usernameemail' OR `user_email` = '$usernameemail'");
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){
            if (($password == $row["user_pass"]) && ( ($usernameemail == $row["user_username"]) || ($usernameemail == $row["user_email"]))) {
                $_SESSION["login"] = true;
                $_SESSION["user_id"] = $row["user_id"];
                header("location: skill_sets.html");
            }
            else{
                echo "<script> alert('Wrong Username or Password!'); </script>";
            }
        }
        else{
            echo "<script> alert('User not registered!'); </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to EL-rwanda</title>
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
            width: 50%;
            margin: 100px;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px black;
        }
        .btn{
            align-items: center;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            justify-content: center;
            background-color: orange;
            margin: 50px;
            color: beige;
        }
        .btn:hover{
            background-color: beige;
            color: black;
        }
         /*  small devices */
        @media only screen and (max-width: 800px){
            
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class=" text-center p-2 m-3">Login to continue to skill sets</h3>
        <form action = "" method = "POST">
            <div class="form-group m-3">
                <label for="usernameemail">UserName or Email</label>
                    <input type="text" name="usernameemail" id= "usernameemail" placeholder="Username" class="form-control" required value="">
            </div>
            <div class="form-group m-3">
                <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required value="">
            </div>
            <div class="form-group m-3">
                <button type="submit" name ="submit" class="btn">Login</button>
                <p>don't have account?  <a class=" text-decoration-none text-warning" href="signup.php">Signup</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
