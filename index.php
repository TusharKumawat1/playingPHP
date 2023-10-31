<?php
  include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
     <form action="index.php" method="post">
      <label for="username">Username : </label>
      <input type="text" name="username">
      <label for="username">Password : </label>
      <input type="password" name="password">
      <br>
      <input type="submit" name="submit" value="Login">
     </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        if(!isset($_POST["username"])){
          echo "please enter username!";
        }
        elseif(!isset($_POST["password"])){
          echo "please enter password!";
        }
        else{
          $username=$_POST["username"];
          $password=$_POST["password"];

          //checking if user exist?

          $sql="SELECT * FROM users WHERE username= '{$username}' ";
          $result=mysqli_query($conn,$sql);
          if (mysqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
             if ($password==$row["password"]) {
                echo"login successfull";
             }else{
              echo"Incroccet password";
             }
          }
          else{
            echo "user not found";
          }
        }
    }
    mysqli_close($conn);
?>