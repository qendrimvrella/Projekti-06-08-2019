<?php

if (isset($_POST['signup-submit'])) {

    require 'conn.inc.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $birthday = $_POST['birthday'];


    if (empty($name) || empty($surname) || empty($email) || empty($password) || empty($passwordRepeat) || empty($birthday)) {
        header("Location: ../signup.php?error=empty&name=".$name."&surname=".$surname."&email=".$email."&birthday=".$birthday);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        header("Location: ../signup.php?error=invalidemailname");
        exit();           
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&name=".$name."&surname=".$surname."&birthday=".$birthday);
        exit();           
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        header("Location: ../signup.php?error=invalidName&surname=".$surname."&email=".$email."&birthday=".$birthday);
        exit();        
    }
    else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck&name=".$name."&surname=".$surname."&email=".$email."&birthday=".$birthday);
        exit();
    }
    else {
        $sql = "SELECT user_email FROM users WHERE user_email=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=emailused&email=".$email);
                exit();
            }
            else {
                $sql = "INSERT INTO users (user_firstname, user_surname, user_email, user_password, user_gender, user_country, user_birthday) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sssssss", $name, $surname, $email, $hashedPwd, $gender, $country, $birthday);
                    mysqli_stmt_execute($stmt);

                    header("Location: ../signup.php?signup=success");
                    exit();
                } 
            }
        }

    }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
}
else {
    header("Location: ../signup.php");
    exit();
}