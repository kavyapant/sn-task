<html>
    <body>
        <h1> Current Standings</h1>
        <?php 

        $servername = "localhost";
        $username = "kavya";
        $password = "KavyaPant1!";
        $dbname = "assignment";
         
        
        
        
        $conn = new mysqli($servername,$username, $password,$dbname);
        
        if ($conn->connect_error) {
            echo "die";
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT aname, bname, winner FROM race";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "PlayerA: " . $row["aname"]. " - PlayerB: " . $row["bname"]. " Winner:  " . $row["winner"]. "<br><br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
         ?>
          <br>
   <a href="index.html">Back to the homepage</a>
    </body>
</html>
