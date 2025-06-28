<?php
    include "base.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
        
<form action = '#' method = 'post'>
    <label for="">
    First name<br>
    <input type="text" name = "fn">
    </label><br>
    <label for="">
        Last name<br>
    <input type="text" name = "ln">
    </label><br>

    <label for="">
        Age<br>
    <input type="number" name = "age">
    </label><br>

    <label for="">
        Mail<br>
    <input type="email" name = "mail">
    </label><br>

    <label for="">
        kit_id<br>
    <input type="text" name = "kit_id">
    </label><br>

    <label for="">
        <br>
    <input type="submit" value  = "Insert" name = "sub">
    </label><br>
        
    </form>
    <?php
    if(isset($_POST["sub"])){
        $first_name = $_POST['fn'];
        $last_name = $_POST['ln'];
        $age = $_POST['age'];
        $mail = $_POST['mail'];
        $kit_id = $_POST['kit_id'];
        $query = "INSERT INTO student (firstname, lastname, age, mail, kit_id) 
        VALUES ('$first_name', '$last_name', '$age', '$mail','$kit_id');";
        $result = mysqli_query($connect,$query);

    }
    ?>
    
</body>
</html>         