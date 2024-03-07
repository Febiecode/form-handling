<html>

<head>
    <style>
        .container {
            display: flex;
            justify-content: center;
            text-align: center;
            margin: 300px auto;
            flex-direction: column;
        }
    </style>
</head>

<body>

    <div class="container">
        <div>
            <form action="welcome_post.php" method="post">
                <span>Name:</span> <input type="text" name="name" required><br>
                <span>E-mail:</span> <input type="email" name="email" required><br>
                <input type="submit">
            </form>
        </div>

        <div>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dname = "test";

            // Create connection
            $conn = new mysqli($servername, $username, $password,  $dname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }else{
                $val1 = "Connection successfully";
            }
            $conn->close();
            ?>
            <h3><?php echo $val1 ?></h3>

        </div>
    </div>

</body>

</html>