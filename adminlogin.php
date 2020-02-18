<html>
    <body>
        <?php
        // Store Session Data
        if ( ! empty( $_POST ) ) {
            if ( $_POST['username']=="kavya" && $_POST['password']=="abc" ) {
                session_start();
                $_SESSION['is_logged_in'] = true;
                echo $_SESSION['is_logged_in'];
                header('Location: admin.php');
                
            }
        
        else
        {
            echo "Incorrect username or password , Try Again";
        }
    }
        ?>
</body>
</html>