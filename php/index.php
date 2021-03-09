<html>
    <head>
        <title>Mysql Test</title>
    </head>

    <body>

        <?php
            $servername = "mysqldb";
            $username = "sqluser";
            $password = "sqlpass";
            $dbname = "appdbase";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            //Sql Query
            $sql = "SELECT id, firstname, lastname, email FROM nameDB";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"] ." - Email: " . $row["email"] . "<br>";
                 }
            } else {
                echo "No results";
                }
            //close connection
            $conn->close();
            ?>
    </body>
</html>