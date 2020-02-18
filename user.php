<html>
    <body>
        <h1> Current Standings</h1>
        <?php 

        $servername = "localhost";
        $username = "kavya";
        $password = "KavyaPant1!";
        $dbname = "assignment";
         
        $p1=$_POST["aname"];
        $p2=$_POST["bname"];
        $w=$_POST["winner"];
        
        
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
                echo "PlayerA: " . $row["aname"]. " - PLayerB: " . $row["bname"]. " Winner:  " . $row["winner"]. "<br><br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
         ?>
    </body>
</html>
