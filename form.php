<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name"><br>
        <label>Email:</label>
        <input type="email" name="mail"><br>
        <label>Username:</label>
        <input type="text" id="uname" name="uname"><br>
        <label>Password</label>
        <input type="password" name="pass"><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    include 'connection.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $uname = $_POST['uname'];
        $pw = $_POST['pass'];

        $sql = "insert into cwh1 values('$name', '$email', '$uname', '$pw')";
        $sql_exe = mysqli_query($con, $sql);

        if($sql_exe){
            echo('You are now our customer');
        }
        else{
            echo('Oops! Account not created.Please try again later.');
        }
    }
    ?>
</body>

</html>