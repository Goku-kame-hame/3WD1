<?php
$say = "whats good" . $_GET['first_name'] . " " . $_GET['last_name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label>
            First name:
            <input type="text" name="first_name"/>
        </label>
        <br/>
        <label>
            Last name:
            <input type="text" name="last_name"/>
        </label>
        <br/>
        <input type="submit" value="Register">
    </form>
    <tr>
        <td> First Name :</td>
        <td><?= $_POST['first_name']?></td>
    </tr>
    <tr>
        <td> Last Name :</td>
        <td><?= $_POST['last_name']?></td>
    </tr> 
    
</body>
</html>