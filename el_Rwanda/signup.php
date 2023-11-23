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
    </style>
</head>
<body>
    <div class="container">
        <h3 class=" text-center p-2 m-3">Signup Form</h3>
        <form action = "" method = "POST">
            <div class="form-group m-3">
                <label for="username">UserName</label>
                    <input type="text" name="username" placeholder="Username" name="username" class="form-control" required>
            </div>
             <div class="form-group m-3">
                <label for="email">Your Email</label>
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="form-group m-3">
                <label for="password">Enter your Password</label>
            <input type="password" name="password"  class="form-control" required>
            </div>
            <div class="form-group m-3">
                <button type="submit" value ="" name = "btn" class="btn">Signup</button>
                <p>already have account?  <a class=" text-decoration-none text-warning" href="login.php">Login</a></p>
            </div>
    </div>
            <?php
            // error_reporting(0);
            //     include "connect.php";
            //     if(isset($_POST['btn'])){
            //         $username = $_POST['username'];
            //         $password = $_POST['password'];

            //         $sql="SELECT `guest_name`,  `guest_pass` FROM `guests` WHERE `guest_name` = '$username'AND `guest_pass` = '$password' ";
            //         $result = mysqli_query($con,$sql);
            //     }
            //     if ($result){
            //         header('location: display.php');
            //     }
            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
