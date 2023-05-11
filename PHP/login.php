<?php
session_start();

    include "./connection2.php";

    if(isset($_POST['btnLogin'])) {

        //user login details have been posted
        $uname = $_POST['username'];
        $upass = $_POST['password'];

        //read from database
        $queries = "SELECT * FROM users_orders WHERE password = '$upass' AND username = '$uname' limit 1";

        $results = mysqli_query($connect, $queries);

        if($results) {
            if($results && mysqli_num_rows($results) > 0) {
                $user_data = mysqli_fetch_assoc($results);
    
                if($user_data['role'] == 'Admin') {
                    $_SESSION['Admin'] = $user_data['username'];
                    header('Location: http://localhost/WebDevAssignment-php/PHP/admin.php');
                    exit();
                } else {
                    $_SESSION['User'] = $user_data['username'];
                    $_SESSION['Orders'] = $user_data['orders'];
                    header('Location: http://localhost/WebDevAssignment-php/PHP/users.php');
                    exit();
                };
            }
        }
        
        echo "<p><i>Invalid username or password</i></p>";
        
        mysqli_close($connect);
        

    }

?>
