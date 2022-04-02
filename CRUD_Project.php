<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body{
            background-color: whitesmoke;
        }

        h1{
            text-align: center;
        }
        form{
            width: 80%;
            margin: 2vh auto;
        }

        label{
            font-size: 20px;
        }

        input{
            width: 95%;
            font-size: 1em;
            padding: 0.5em;
            box-sizing: border-box;
            background-color: white;
            border: 1px solid pink;
            border-radius: 0.5em;
        }

        input:focus{
            outline: none;
        }

        textarea{
            width: 95%;
            font-size: 1em;
            padding: 0.5em;
            border-radius: 0.5em;
            border: 1px solid pink;
            background-color: white;
            resize: none;
        }

        textarea:focus{
            outline: none;
        }

        button{
            font-size: 18px;
            background-color: pink;
            padding: 0.7em;
            border: none;
            border-radius: 0.5em;
        }

        button:hover{
            background-color: lightpink;
            cursor: pointer;
        }

        .container{
            width: 80%;
            height: auto;
            margin: 1em auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .box{
            background-color: springgreen;
            height: auto;
            min-height: 30vh;
            width: 32%;
            margin-top: 1em;
            position: relative;
            padding-bottom: 1em;
            
            /* clip-path: polygon(0% 0%, 100% 0%, 100% 90%, 0% 100%); */
        }

        .box h1{
            color: black;
            font-size: 20px;
            padding: 0.5em;
            text-align: left;
        }

        .box h3{
            text-align: right;
            font-weight: 10;
            font-size: 1em;
            margin-right: 1vw;
        }

        .box p{
            display: block;
            padding: 1em;
            word-wrap: break-word;
        }

        .box a{
            padding: 0.5em;
            border-radius: 0.4em;
            background-color: pink;
            text-decoration: none;
            margin: 1vh auto;
            line-height: 7vh;
        }

        .box a:hover{
            background-color: lightpink;
        }

        .edel{
            position: absolute;
            right: 5px;
            bottom: 0;
            /* margin-right: 10px; */
        }
    </style>
</head>
<body>
    <h1>Roshan Notes</h1>

    <form action="CRUD_Project.php" method="POST">
        <label for="">Title:</label><br>
        <input type="text" name="title"><br>
        <label for="">Description:</label><br>
        <textarea name="des"></textarea><br>
        <button type="submit" name="add">Add note</button>
    </form>

    <?php
        // if($_SERVER['REQUEST_METHOD' == 'POST']){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = $_POST['title'];
            $des = $_POST['des'];

            $sql = "insert into `notes` (`Title`, `Description`) values('$title', '$des')";
            $sql_exe = mysqli_query($con, $sql);
        }
    ?>

    <div class="container">
        <?php
        $sql = "select * from notes";
        $sql_exe = mysqli_query($con, $sql);
        
        $sn = 0;
        while($row = mysqli_fetch_assoc($sql_exe)){
            echo "<div class='box'>";
            echo "<h1>".++$sn.". ".$row['Title']."</h1>"."<h3>".$row['DateTime']."</h3>";
            echo "<p>".$row['Description']."</p>";
            echo "<div class='edel'>"."<a href='edit.php'>Edit</a>"." <a href='delete.php'>Delete</a>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>