<?php
    $name = $_POST['username'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_SPECIAL_CHARS);
    $type = filter_input(INPUT_POST, 'type', FILTER_VALIDATE_INT);

    if (!$comment){
        die("You can not sumbit an empty comment!");
    }

    $host = "localhost";
    $dbname = "el_rwanda";
    $username = "root";
    $password = "";

    $conn = mysqli_connect(hostname: $host, 
                    username: $username,
                    password: $password, 
                    database: $dbname);

    if (mysqli_connect_error()){
        die("Connection error: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `comments`(`comm_name`, `comm_email`, `comm_sms`, `comm_type`) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)){
        die(mysql_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $comment, $type);

    mysqli_stmt_execute($stmt);

    echo "The records have been saved!";
?>