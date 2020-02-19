<?php
    session_start();
	if(isset($_SESSION['is_logged_in'])){
    // redirect them to your desired location
    header('location: admin.php');
    exit;
}

?>
    
<html>
    <body>
     

        <form action="adminlogin.php" method="post">
            Username: <input type="text" name="username" required ><br>
            Password:<input type="password" name="password" required  ><br>
        
            
             
            <input type="submit" value="DONE">
        

            
            </form>
             <a href="index.html">Back to the homepage</a>

    </body>
</html>