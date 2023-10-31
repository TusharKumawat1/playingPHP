<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>You are loged in... </h1>
    <a href="index.php">goto login</a>
    <form action="home.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>

<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.php");
    }
    echo "Welcom {$_SESSION["username"]}"
?>