<?php

    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, 'watchland');

    if(isset($_POST['insertdata'])){


        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $number = $_POST['number'];
        $address = $_POST['address'];
        $skill = $_POST['skill'];

        $query = "INSERT INTO user(`fname`, `lname`, `email`, `pass`,`number`, `address`, `skill`) VALUES('$fname', '$lname', '$email', '$pass', '$number', '$address', '$skill')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {

            echo '<script> alert("Data saved"); </script>';
            header('Location: ./js/success.html');
            exit();
        }
        else

        {
            echo '<script> alert("Data not saved"); </script>';
        }
    }

    

?>
