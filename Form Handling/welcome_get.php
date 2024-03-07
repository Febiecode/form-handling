<html>
    <head>
        <style>
            .container{
            display: flex;
            justify-content: center;
            text-align: center;
            margin: 300px auto;
        }
        </style>
    </head>
<body>

<div class="container">
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
</div>

</body>
</html>