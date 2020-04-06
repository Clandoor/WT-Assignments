<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'workshop');

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $wtype = $_POST['wtype'];
    $bdate = $_POST['bdate'];
    $nationality = $_POST['nationality'];

    $s = "select * from workshop where Email = '$email'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
        echo "Email already Registered.";
    }

    else{
        $reg = "insert into workshop(fname, email, phone, wtype, bdate, nationality) values ('$fname', '$email', '$phone', '$wtype', '$bdate', '$nationality')";
        mysqli_query($con, $reg);
        echo "Registration Successful!";
    }
?>