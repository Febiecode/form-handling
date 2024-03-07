<html>

<head>
    <style>
        .container {
            display: flex;
            justify-content: center;
            text-align: center;
            margin: 300px auto;
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $PName = $_POST["name"];
    $Email = $_POST["email"];
    $sql = "INSERT INTO person (PersonName, Email)
VALUES ('{$PName}', '{$Email}')";

    if ($conn->query($sql) === TRUE) {
        $val2 = "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>

    <div class="container">
        Welcome <?php echo $PName ?><br>
        Your email address is: <?php echo $Email ?>
        <br>
        
    </div>
    <div class="container">
    <h3><?php echo $val2 ?></h3>
    </div>

</body>

</html>