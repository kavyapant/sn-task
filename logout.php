<html>
    <body>
        <?php
        session_start();
         session_destroy();
         unset ($_SESSION['is_logged_in']);
         header('location: index.html');
        ?>
</body>
</html>