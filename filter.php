<html>
     <body>
         <?php
          $servername = "localhost";
          $username = "kavya";
          $password = "KavyaPant1!";
          $dbname = "assignment";
          $p1=htmlspecialchars($_POST["namee"]);
          
              
        $conn = new mysqli($servername,$username, $password,$dbname);
        
        if ($conn->connect_error) {
            echo "die";
            die("Connection failed: " . $conn->connect_error);
        }
       
//select all tuples from database with name entered by user as player A or player B 
// filtering according to name of player
        $sql = "SELECT aname, bname, winner FROM race WHERE aname='$p1' or bname='$p1'";
        $result = $conn->query($sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "PlayerA: " . $row["aname"]. " - PlayerB: " . $row["bname"]. " Winner:  " . $row["winner"]. "<br><br>";
            }
        } 
        else {
            echo "0 results";
        }
    

        $conn->close();
         ?>
   <br>
   <a href="index.html">Back to the homepage</a>

    </body>
    </html>