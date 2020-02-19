<html>
    <body>
        <?php
        // Store Session Data
        /*Admin username is "kavya" and password is "abc". If any other value is entered by user then
        error message will be displayed */
        if ( ! empty($_POST ) ) {
            if ( htmlspecialchars($_POST['username'])=="kavya" && htmlspecialchars($_POST['password'])=="abc" ) {
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