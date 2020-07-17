<?php

    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, 'watchland');


if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        
        $email = $_POST['email'];
        $pass = $_POST['pass']; 
        $number = $_POST['number']; 
        
        $sql = "SELECT id FROM user WHERE email = '$email' && pass = '$pass' && number = '$number'";
        $result = $conn->query($sql);

            if ($result->num_rows > 0) {

            echo '<script>

            window.location="./js/loginsuccess.html";

            </script>';

            } else {

            echo '<html>

                <h1> You have entered wrong credentials!  </h1>

            </html>';

}
     }
?>